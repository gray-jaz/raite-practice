<?php
session_start();
if (!isset($_SESSION["teacher_un"])) {
    header("location: login.php");
}

if (!isset($_SESSION["quiz_code"])) {
    header("location: welcome.php");
}

require_once "../db_connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Quiz Code #<?php echo $_SESSION["quiz_code"] ?>
        <button id="start-quiz">Start Quiz/Next Question</button>

        <div id="div-questions">
            hi!
        </div>
        <script src="../js/teacher_quiz_on.js"></script>

</body>

</html>