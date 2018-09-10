<?php
include("database.php");
?>
<html>
<body>
<?php
$email = $_GET['email'];
echo "<p>".$email."</p>";
$sql = "delete from users where email='$email'";
if(mysqli_query($conn,$sql))
{
    header("location:welcome.php");
}
else{
    echo "<p>Invalid User</p>";
}
?>
</body>
</html>