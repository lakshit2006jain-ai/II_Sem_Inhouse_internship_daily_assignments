<?php
 
 $host = "localhost";
 $username = "root";
 $password = "12345";
 $database ="industrial_training";

 $conn= mysqli_connect($host, $username, $password, $database);

 if(!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
 }
 echo "Connection Successful!";
 ?>
