<?php
session_start();

if (!isset($_SESSION["teacher_un"])) {
    header("Location: teacher_login.php");
}

require_once "../db_connection.php";

if (isset($_POST)) {
    $questions = json_decode($_POST['quiz']);
    $quizCode = getQuizCode();
    $teacher_un = $_SESSION["teacher_un"];
    
    $sql = "INSERT INTO quiz (code, teacherusername)
    values ('$quizCode', '$teacher_un')";

    if ($conn->query($sql) !== TRUE) {
        echo "Quiz cannot be saved, error " . $conn->error;
    } else {

        $sequence_no = 0;

        foreach ($questions as $q) {
            $sequence_no++;
            $qText = $q->text;
            $points = $q->points;
            $dTime = $q->dTime;
            $qType = $q->qType;
            $choices = $q->choices;
            $choicesAnswerKey = $q->choicesAnswerKey;
            $soloAnswer = $q->soloAnswer;
            $trueFalseAnswer = ($q->trueFalseAnswer == "True" ? 1 : 0);
    
            if ($qType == "TypeA") {
    
    
                $sql = "INSERT INTO question (title, type, duration, `point`, choice1, choice2, choice3, choice4, choiceAnswerKey, sequence_no, quizid)
                values ('$qText', '$qType', '$dTime', '$points', '$choices[0]', '$choices[1]', '$choices[2]', '$choices[3]', '$choicesAnswerKey', $sequence_no, '$quizCode')";
    
            } else if ($qType == "TypeB") {
                
                $sql = "INSERT INTO question (title, type, duration,`point`, soloanswer, sequence_no, quizid)
                values ('$qText', '$qType', '$dTime', '$points', '$soloAnswer',  $sequence_no, '$quizCode')";
    
            } else {
    
                $sql = "INSERT INTO question (title, type, duration, `point`, checkanswer, sequence_no, quizid)
                values ('$qText', '$qType', '$dTime', '$points', '$trueFalseAnswer',  $sequence_no, '$quizCode')";
            }
    
            
            if ($conn->query($sql) === TRUE) {
                echo "Quiz code $quizCode";
                $_SESSION["quiz_code"] = $quizCode;
            } else {
                echo "Quiz cannot be saved, error " . $conn->error;
            }
        }
    }

}

function getQuizCode()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $quizCode = '';

    for ($i = 0; $i < 8; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $quizCode .= $characters[$index];
    }

    return $quizCode;
}
