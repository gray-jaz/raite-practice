<?php
    session_start();
    if(isset($_SESSION["teacher_un"])) {
        header("Location: ../teacher/welcome.php");
    } 

    require_once "../db_connection.php";

    if (isset($_POST)) {

        $sql = "SELECT name FROM teacher WHERE 
                username = '" . $_POST["username"] . "' AND password = '" . $_POST["password"] . "'"; 
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            echo "ok";

            $row = $result->fetch_assoc();

            $_SESSION["teacher_un"] = $_POST["username"];
            $_SESSION["teacher_name"] = $row["name"];

        } else {
            echo "You've got an error: " . $conn->error;
        }
    }
?>