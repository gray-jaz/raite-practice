<?php
    session_start();
    unset($_SESSION["teacher_un"]);
    header("location: ../index.html");
?>