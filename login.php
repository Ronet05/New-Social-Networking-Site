<?php
include('./classes/DB.php');
	$username=$_POST['username'];
	$password=$_POST['password'];

	if(DB::query('SELECT username FROM users WHERE username=:username',
		array(':username'=>$username))){

		if(password_verify($password,DB::query('SELECT password FROM users WHERE username=:username', 
			array(':username'=>$username))[0]['password'])){
			//echo "Logged in!";
			header("Location:index.php");
			$cstrong=True;     //cryptographically strong
			//to generate memory space and make it cryptographilly strong and convert from bin to hex
			$token= bin2hex(openssl_random_pseudo_bytes(64,$cstrong));
			$user_id=DB::query('SELECT id FROM users WHERE username=:username', array(':username' =>$username))[0]['id'];

			DB::query('INSERT INTO login_tokens VALUES (\'\',:token,:user_id)',
				array(':token'=>sha1($token),':user_id'=>$user_id));
			//sha1(str) is a function to hash the string; the only place the raw token is stored is in 
			//the users cookie's in the browser;

			setcookie('SNID',$token,time()+(60*60*24*7),'/',NULL,NULL,TRUE);
			/*setcookie(name,token,expiry time,location of the server the cookie is valid for,
			the domain the coookie is valid for,..)*/

		}
		else {
			echo "Incorrect password";
		}
	}else{
		echo "User not registered!";
	}


?>

