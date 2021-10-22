<?php

session_start();
require_once "../db_connection.php";

#paki-stop ang quiz
$sql = "UPDATE quiz SET status = 2 WHERE code = '" . $_SESSION['QuizCode'] . "'";
if ($conn->query($sql)) {

    #remove active state on other questions kasi nga tapos na sila duh
    $sql = "UPDATE question SET active = 0 WHERE QuizID = '" . $_SESSION['QuizCode'] . "'";

    if ($conn->query($sql)) {
        echo "end";
        unset($_SESSION['QuizCode']);
        unset($_SESSION["question_no"]);
    } else {
        echo "error: " . $conn->error;
    }
} else {
    echo "error: " . $conn->error;
}
