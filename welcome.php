<?php 
include("session.php");
include("database.php");
?>
<html>
   
   <head>
      <title>Welcome </title>
      <link rel= "stylesheet" href = "style.css"/>
   </head>
   <body>
    <center>
      <h1>Welcome </h1> 
   <?php
   $email = $_SESSION['login'];
   if($email == "admin@gmail.com") {
    $sql = "select * from  users";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo "<table>";
                echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Firstname</th>";
                    echo "<th>Lastname</th>";
                    echo "<th>Email</th>";
                    echo "<th>Action</th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                if($row['email'] !='admin@gmail.com')
                {
                echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['firstname'] . "</td>";
                    echo "<td>" . $row['lastname'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td><a href = './delete.php?email=".$row['email']."'>Delete</button></td>";
                echo "</tr>";
                }
            }
            echo "</table>";
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    }
    else{
        $sql = "select * from users where email = '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo "<p>".$row["email"]."</p>";
    }
   ?>
      <h2><a href = "logout.php">Sign Out</a></h2>
</center>
<script>
       function deleteUser(email) {
           console.log(email);
       }
   </script>
   </body>
</html>