<?php
$url='127.0.0.1:3306';
$username='newuser';
$password='Anant@123';
$conn=mysqli_connect($url,$username,$password,"users");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}
?> 