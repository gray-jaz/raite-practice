<?php
    session_start();
    require_once "../db_connection.php";

    if(isset($_POST)) {
        $nickname = $_POST['nickname'];
        $quizcode = $_POST['quizCode'];

        $sql = "INSERT INTO student (Nickname,QuizCode) VALUES ('$nickname','$quizcode')";
        
        if($nickname==""){
            echo "Please Enter a Nickname.";
        }
        else if ($quizcode==""){
            echo "Please Enter your Quiz Code.";
        }
        else {
            if($conn->query($sql) === TRUE) {
                $_SESSION["student_in"] = $nickname;
            } else {
                echo "Invalid Quiz Code.s";
            }

            $conn->close();
        }

        
    }
?>