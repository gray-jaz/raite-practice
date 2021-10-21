<?php
    session_start();
    if(!isset($_SESSION["teacher_un"])) {
        header ("Location: teacher/login.php");
    } else {
        header("Location: teacher/welcome.php");
    }

    require_once "db_connection.php";

    if (isset($_POST)) {
        echo "ok";
    }
?>