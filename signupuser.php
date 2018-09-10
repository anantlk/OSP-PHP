<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
extract($_POST);
include("database.php");
$rs=mysqli_query($conn,"select * from users where email='$email'");

if (mysqli_num_rows($rs)>0)
{
echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
exit;
}

$query="insert into users(id,firstname,lastname,email,password) values('$id','$firstname','$lastname','$email','$psw')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID $email Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID </div>";
echo "<br><div class=head1><a href=login.php>Login</a></div>";
?>
</body>
</html> 