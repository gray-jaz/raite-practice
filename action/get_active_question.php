<?php

session_start();
require_once "../db_connection.php";

#set ko muna score mo ha
if (!isset($_SESSION["score"])) {
    $_SESSION["score"] = 0;
}

#first check muna natin si quiz if nag-start na ba or baka naman tapos na
$sql = "SELECT `Status` FROM quiz WHERE Code = '" . $_SESSION["QuizCode"] . "'";
$result = $conn->query($sql);

#oh, check muna kung nageexist ba yung code syempre, baka naman budol yan!
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    if ($row["Status"] == 0) {
        echo "<h1>The quiz has not yet started...please wait on this page. :)</h1>";
    } 
    
    else if ($row["Status"] == 1) {
        include_once "get_question.php";
    }

    else if ($row["Status"] == 2) {
        echo "<h1>The quiz has ended, mamaya lalabas na yang leaderboard na yern. </h1>";
    }

    else {
        echo "<h1>NAHACK DATABASE NATIN MAMI!</h1>";
    }

}

?>