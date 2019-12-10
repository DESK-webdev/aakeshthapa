<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style/login.css">
</head>
<body>
<form action=""  method="post"> 
 <fieldset>
 <legend><h2>Login Form</h2>
</legend>
  <div class="container">
    <label for="u_name"><b>Username:</b></label>
    <input type="text" placeholder="Enter Username" name="u_name" required><br /><br>
    <label for="psw"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br /><br>
    <input type="checkbox"  name="remember"> <b>Remember me</b><br><br>
    <button type="submit">Login</button><br><br>
    <span class="forgot_psw"> <a href="#">Forgot password?</a></span>
  </div><br>
    <button type="button" class="sign_up">Sign_up</button>
</fieldset>
</form>
</body>
</html>
