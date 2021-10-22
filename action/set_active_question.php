<?php
session_start();
$_SESSION['QuizCode'] = "G13FqYKm";
require_once "../db_connection.php";

#set na tayo ng question
if (!isset($_SESSION['question_no'])) {
    die();
    $_SESSION["question_no"] = 1;
} else {
    $_SESSION["question_no"] += 1;
}

#remove active state on other questions kasi nga tapos na sila duh
$sql = "UPDATE question SET active = 0 WHERE QuizID = '" . $_SESSION['QuizCode'] . "'";

if (!$conn->query($sql)) {
    echo "error: " . $conn->error;
}

#set new active state sa new question aba malamang hihe
$sql = "UPDATE question SET active = 1 WHERE QuizID = '" . $_SESSION['QuizCode'] . "' 
AND sequence_no = " . $_SESSION["question_no"] . "";

if (!$conn->query($sql)) {
    echo "error: " . $conn->error;
}

#display the current active
include_once "get_question.php";
?>