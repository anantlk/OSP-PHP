<!DOCTYPE HTML>
<html>
<head>
<title>User Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
session_start();
include("database.php");
extract($_POST);

$rs=mysqli_query($conn,"select * from users where email='$email' and password='$psw'");
$count = mysqli_num_rows($rs);
      
  
if($count == 1) {
   $_SESSION['login'] = $email;
   
   header("location: welcome.php");
}else {
   $error = "Your Login Name or Password is invalid";
   echo "<p> $error </p>";
}
?>
</body>
</html>