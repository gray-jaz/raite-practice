<?php

session_start();
require_once "db_connection.php";

#set ko muna score mo ha
if (!isset($_SESSION["score"])) {
    $_SESSION["score"] = 0;
}

#first check muna natin si quiz if nag-start na ba or baka naman tapos na
$sql = "SELECT `Status` FROM quiz WHERE Code = " . $_SESSION["QuizCode"] . "";
$result = $conn->query($sql);

#oh, check muna kung nageexist ba yung code syempre, baka naman budol yan!
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    if ($row["Status"] == 0) {
        echo "<h1>The quiz has not yet started...please wait on this page. :)</h1>";
    } 
    
    else if ($row["Status"] == 1) {
        #eto na bess start na!!! go check anong question no naba us
        $sql = "SELECT Title, `Type`, Duration, Active, `Point`, Choice1, Choice2, Choice3, Choice4, SoloAnswer, CheckAnswer, ChoiceAnswerKey, sequence_no FROM question WHERE QuizID = " . $_SESSION["QuizCode"] . " AND Active = 1";

        $result = $conn->query($ql);

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            #set sessions
            #and change the current question no
            $_SESSION["question_no"] = $row["sequence_no"];

            echo "
                <div class='question-div'>
                    <div class='question-left'>
                        <div class='number-div'><span class='question-no'>".$row["sequence_no"]."</span></div>
                        <input type='hidden' value='".$row["sequence_no"]."' name='question_no'>
                    </div>
                    <div class='question-right'>
                        <p> ".$row["Title"]." </p>
                    </div>
                </div>";

            echo "<div class='answer-box'>";

            #check anong type ang exam
            if($row["Type"] == "TypeA") {
                echo 
                    "<div class='multiple-choice' style='display: block'>
                        <button name='choice' value='a' class='multiple-ans' style='background-color: #42CEEC;'>A".$row["Choice1"]."</button>
                        <button name='choice' value='b' class='multiple-ans' style='background-color: #7879F1;'>".$row["Choice2"]."</button><br>
                        <button name='choice' value='c' class='multiple-ans' style='background-color: #9BDD59;'>".$row["Choice3"]."</button>
                        <button name='choice' value='d' class='multiple-ans' style='background-color: #FE9B8E;'>".$row["Choice4"]."</button>
                    </div>";
            }

            else if($row["Type"] == "TypeB") {
                echo 
                    "<div class='fill-in-blank' style='display: none'>
                        <input name='solo-answer' class='fill-ans' placeholder='Type Your Answer Here'></input>
                    </div>";                
            }

            else if($row["Type"] == "TypeC") {
                echo 
                    "<div class='true-false' style='display: none'>
                        <button  name='trueFalseAnswer' class='true-false-ans' style='background-color: #C042EC;'>True</button>
                        <button  name='trueFalseAnswer' class='true-false-ans' style='background-color: #7879F1;'>False </button>
                    </div>";
            }
            
            echo "</div>";
        }
    }

    else if ($row["Status"] == 2) {
        echo "<h1>The quiz has ended, mamaya lalabas na yang leaderboard na yern. </h1>";
    }

    else {
        echo "<h1>NAHACK DATABASE NATIN MAMI!</h1>";
    }

}

?>