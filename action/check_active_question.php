<?php

session_start();
require_once "../db_connection.php";

#oh ha! ayan tayo ang watcher kay timer or kay teacher if nagbabago na ba sya ng question! hay nakoo
$sql = "SELECT Active FROM question WHERE QuizID = '" . $_SESSION["QuizCode"] . "' AND sequence_no = " . $_SESSION["question_no"]. "";

if (!$conn->query(($sql))) {
    echo "error is " . $conn->error;
}

$result = $conn->query($sql);

if($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if($row["Active"] == 0) {
        echo "0";
    } 

    else if($row["Active"] == 1) {
        echo "1";
    }
}

?>