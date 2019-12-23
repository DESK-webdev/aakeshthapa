<?php
$u_name=$_POST['u_name'];
$u_password=$_POST['u_password'];
if($u_name=="aakeshthapa" && $u_password="hellovai")
echo 'logged in';
else
echo 'sorry';
echo ''
?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style/1.css">
<script src="login_page.js"></script>
</head>
<body>

<h2>Login Form</h2>

<form name="rajudai"'
 action="loginpage.php" onsubmit="return validform()" method="post">
 <fieldset>
 <legend>Login form</legend>
    <img src="zomato.jpg" alt="zomato-order" title="zomato-order">
  
  <time ></time>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>Date of birth:
    <input type="date" name="day">
    <label for="country">Country</label>
    <select id="country" name="country">
        <option value="Nepal">Nepal</option>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="India">India</option>
    </select>
    number of experience year:<input type="number" min="0" max="20"><br>
    <button type="submit">Login</button>
    <label>
      
      Comments:<textarea rows="3" cols="30"></textarea><br>
      <input type="checkbox" checked="checked" name="remember"> <b>Remember me</b>
    </label>
  </div>
  

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw"> <a href="#">Forgot password?</a></span>
  </div>
</fieldset>
</form>
<?php
$u_name=$_POST['uname'];
$u_password=$_POST['psw'];

echo $_POST['uname'];
echo "<br>";
echo $_POST['psw'];
if($uname=="aakeshthapa" && $psw="rajeshthapa")
{
  echo 'logged in';
}
else
echo 'sorry';
?>
</body>
</html>
