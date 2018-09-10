<!DOCTYPE HTML>
<html>
<head>
<title>Login </title>

<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
 <form method="POST" action="loginuser.php" style="border:1px solid #ccc">
  <fieldset>
    <legend><h1>Login</h1></legend>
    <hr>

   
    <input type="email" placeholder="Enter Email" name="email" required>

    <input type="password" placeholder="Enter Password" name="psw" id="passwd" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required>
<br>


    <div class="clearfix">

      <button type="submit" class="loginbtn">Login</button>
    </div>
  </div>
  <br>
  <a href="signup.html">New user? Register here</a>
</fieldset>
</form> 

</center>


</body>
</html> 