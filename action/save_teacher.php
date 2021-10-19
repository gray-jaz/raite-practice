<?php
    session_start();
    require_once "../db_connection.php";

    if(isset($_POST)) {
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $fullname = $_POST['fullname'];

        $sql = "INSERT INTO teacher (username, password, name) VALUES ('$username', '$pwd', '$fullname')";
        
        if($conn->query($sql) === TRUE) {
            echo "Sign up successfully!";
        } else {
            echo "You have an error: " . $conn->error;
        }

        $conn->close();
    }
?>