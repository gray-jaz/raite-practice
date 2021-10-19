<?php
    $server = "localhost";
    $username = "root";
    $password = "";
        
    $conn = new mysqli($server, $username, $password);
    
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    echo "Connected Successfully"; 
?>