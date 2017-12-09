<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Connectify Front</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Amiri|Lobster" rel="stylesheet">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Lato:300'>
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="modalform.css">
    <link rel="stylesheet" href="profilepage.css">

  
</head>

<body>


  <div class="container">
  <div class="row">
      <div class="col-sm-5">
      <img src="logo.png" class="logo"/>
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm"><center>
          <h1 style="padding-top:17.5%; font-family:'Lobster'; font-size:100px;">Connectify</h1></center>
      </div>
      </div>
 
  <div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-1">
    
      <div class="button-login button" id="login-btn" style="font-weight: bold; font-family: verdana;"><center><h1><a class="frontbutton" href="login.html">Login</a></h1></center></div>

   <!-- <div id="modallogin" class="modal">

   Modal content 
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 style="font-weight: bold;"><center>Enter Login Credentials</center></h2><br>
    </div>
    <div class="modal-body">
      <form>
      <br>
      <p style="color: grey; font-family: verdana;">E-mail ID: <input type="text" id="loginname" size="66" /><p><br>
      <p style="color: grey; font-family: verdana;">Password: <input type="password" id="loginpass" size="66" /></p><br>
      <button type="button" class="btn btn-primary">Go!</button><br>
      </form>
    </div>
    
  </div>

</div>-->
<!-- Modal End -->
  
  </div>
  
  <div class="col-sm-1"></div>
  <div class="col-sm-1"></div>
  <div class="col-sm-1"></div>
  
  <div class="col-sm-1"></div>
  <div class="col-sm-1"></div>
  <div class="col-sm-1"></div>
  <div class="col-sm-1"></div>
  <div class="col-sm-1"></div>


  <div class="col-sm-1">
      <div class="button button-signup" id="signup-btn" style="font-weight: bold; font-family: verdana;"><center><center><h1><a class="frontbutton" href="create-account.html">Signup</a></h1></center></div>

     <!--<div id="modalsignup" class="modal">

   Modal content 
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 style="font-weight: bold;"><center>Signup to Create an account</center></h2><br>
    </div>
    <div class="modal-body">
      <form>
      <br>
      <p style="color: grey; font-family: verdana;">First Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="signfname" size="66" /><p><br>
      <p style="color: grey; font-family: verdana;">Last Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="signlname" size="66" /><p><br>
      <p style="color: grey; font-family: verdana;">Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="signemail" size="66" /></p><br>
      <p style="color: grey; font-family: verdana;">Re-enter Email:  &nbsp;<input type="text" id="signremail" size="66" /></p><br>
      <p style="color: grey; font-family: verdana;">Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="signpass" size="66" /></p><br>
      <p style="color: grey; font-family: verdana;">Sex: &nbsp;
      Male: <input type="radio" name="signgender" id="signmale" value="male" />&nbsp;&nbsp;&nbsp; Female: <input type="radio" name="signgender" id="signfema;e" value="female" /></p><br>
      <p style="color:grey; font-family: verdana;">Birthday:
      <select name="t7" method="post" style="color:grey; font-family: verdana;">
<option value="-1">Month</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
<select name="t8" method="post" style="color: grey; font-family: verdana;">
<option value="-1">Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option> 
<option value="27">27</option>
<option value="28">28</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="t9" method="post" style="color: grey; font-family: verdana;">
<option value="-1">Year</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option>
</select></p>
<br>

      <button type="button" class="btn btn-primary">Create the account</button>
      </form>
    </div>
    
  </div>

</div>-->
<!-- Modal End -->
</div>
<!--Row ends-->
<div style="padding-top: 75px;">
<p><center>
    
    <br><br><span class="glyphicon glyphicon-copyright-mark">
    Copyright 2016-2017<br>
    All Rights Reserved
    </span></center>
    </p>
</div>
      

  
</div>  
<!--<script>
// Get the modal
var modallogin = document.getElementById('modallogin');
var modalsignup = document.getElementById('modalsignup');
// Get the button that opens the modal
var loginbtn = document.getElementById("login-btn");
var signupbtn = document.getElementById("signup-btn");
// Get the <span> element that closes the modal
var span0 = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close")[1];
// When the user clicks the button, open the modal 
loginbtn.onclick = function() {
    modallogin.style.display = "block";
}
signupbtn.onclick=function() {
  modalsignup.style.display="block";
}
// When the user clicks on <span> (x), close the modal
span0.onclick = function() {
    modallogin.style.display = "none";
    
}
span1.onclick = function() {
    
    modalsignup.style.display= "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modallogin || event.target == modalsignup) {
        modallogin.style.display = "none";
        modalsignup.style.display="none";  
    }
}
</script>-->
</body>
</html>