<?php
    session_start();
    require_once "../db_connection.php";

    if(isset($_POST)) {
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $fullname = $_POST['fullname'];

        $sql = "INSERT INTO teacher (username, password, name) VALUES ('$username', '$pwd', '$fullname')";
        
        if($conn->query($sql) === TRUE) {
            echo "Thank you for signing up, Teacher " . $fullname;
            $_SESSION["teacher_un"] = $username;
        } else {
            echo "Ooops! Please try again. You have an error: " . $conn->error;
        }

        $conn->close();
    }
?>