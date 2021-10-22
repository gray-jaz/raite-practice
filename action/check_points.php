<?php

session_start();
require_once "db_connection.php";
#tapos na question so check na rin natin if tama or mali hehe
$sql = "SELECT `Type`, ChoiceAnswerKey, SoloAnswer, CheckAnswer, `Point` FROM questions WHERE QuizID = " . $_SESSION["QuizCode"] . " AND sequence_no = " . $_SESSION["question_no"] . "";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

if(isset($_POST)) {
    if ($row["Type"] == "TypeA") {
        if($_POST["Answer"] == $row["ChoiceAnswerKey"]) {
            $_SESSION["score"] += $row["Point"];
            echo "correct";
        } else {
            echo "The correct answer is " . $row["ChoiceAnswerKey"] . "";
        }
    }
    else if ($row["Type"] == "TypeB") {
        if($_POST["Answer"] == $row["SoloAnswer"]) {
            $_SESSION["score"] += $row["Point"];
            echo "correct";
        } else {
            echo "The correct answer is " . $row["SoloAnswer"] . "";
        }
    }
    else if ($row["Type"] == "TypeC") {
        if($_POST["Answer"] == $row["CheckAnswer"]) {
            $_SESSION["score"] += $row["Point"];
            echo "correct";
        } else {
            echo "The correct answer is " . $row["CheckAnswer"] . "";
        }
    }
}

?>