<?php


session_start();

$_SESSION['quiz_code']="G13FqYKm";

if (!isset($_SESSION["teacher_un"])) {
    header("location: login.php");
}

if (!isset($_SESSION["quiz_code"])) {
    header("location: welcome.php");
}

require_once "../db_connection.php";


if (!isset($_SESSION['sequence_no'])) {
    $_SESSION['sequence_no'] = 0;
    $sql = "UPDATE quiz SET status = 1 WHERE code = '" . $_SESSION['quiz_code'] . "'";
    $conn->query($sql);
    $_SESSION['quiz_status'] = 1;
    echo "run <hr>";
} else {
    echo "session no is " .  $_SESSION['sequence_no'] . " <hr>";
}

# getting the number of questions for counter
$sql = "SELECT * FROM question WHERE QuizID = '" . $_SESSION['quiz_code'] . "'";
$result = $conn->query($sql);
$no_of_questions = $result->num_rows;
if ($_SESSION['sequence_no'] > $no_of_questions) {
    $_SESSION['sequence_no'] = 0;
    $_SESSION['quiz_status'] = 0;
} else if ($_SESSION['quiz_status'] == 0) {
    echo "the quiz is finished.";
} else {

    $sql = "UPDATE question SET active = 0 WHERE QuizID = '" . $_SESSION['quiz_code'] . "' 
                    AND sequence_no = " . $_SESSION['sequence_no'] . "";

    if ($conn->query($sql)) {
        $current_no = $_SESSION['sequence_no'] + 1;
        $_SESSION['sequence_no'] = $current_no;
        echo "current no is $current_no <hr>";
        $sql = "UPDATE question SET active = 1 WHERE QuizID = '" . $_SESSION['quiz_code'] . "' 
                AND sequence_no = " . $current_no . "";

        if ($conn->query($sql)) {
            $sql = "SELECT active, duration FROM question WHERE QuizID = '" . $_SESSION['quiz_code'] . "'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<ul>";
                $counter = 0;
                while ($row = $result->fetch_assoc()) {
                    $counter++;
                    echo "<li class='question'>Question # " . ($counter) . " ";
                    $milliseconds = $row["duration"];
                    $d = new DateTime('@' . $milliseconds / 1000);

                    if ($row["active"] == 1) {
                        echo "<span id='active'> Timer: " . $d->format("i:s") . "</span>";
                    }
                }
                echo "</ul>";
            }
        } else {
            echo "error sa 2st update $conn->error";
        }
    } else {
        echo "error sa 1st update $conn->error";
    }
}
