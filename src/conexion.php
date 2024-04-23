<?php
    $servername = "mysql";
    $database = "lamp_db";
    $username = "lamp_user";
    $password = "lamp_password";
   
    
    $conn = mysqli_connect($servername, $username, $password, $database,3306);
   
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    mysqli_close($conn);
?>