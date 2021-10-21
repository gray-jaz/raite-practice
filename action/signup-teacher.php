<?php
    session_start();
    require_once "../db_connection.php";

    if(isset($_POST)) {
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $fullname = $_POST['fullname'];


        $sql = "SELECT * FROM teacher WHERE username = '" . $username . "'";
        $duplicate = $conn->query($sql);

        if ($duplicate->num_rows > 0) {
            echo "Oh no! That username is already taken!";
        } else {
            $sql = "INSERT INTO teacher (username, password, name) VALUES ('$username', '$pwd', '$fullname')";
            
            if($conn->query($sql) === TRUE) {
                echo "ok";
                $_SESSION["teacher_un"] = $username;
                $_SESSION["teacher_name"] = $fullname;
            } else {
                echo "ERROR: " . $conn->error;
            }
        }
        
        $conn->close();

    }
?>