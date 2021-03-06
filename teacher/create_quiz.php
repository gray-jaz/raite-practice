<?php
    session_start();
    if(!isset($_SESSION["teacher_un"])) {
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create your quiz!</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/teacher.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- JQuery UI -->
    <link href="js/jquery-ui-1.13.0.custom/jquery-ui.css" rel="stylesheet">
    <script src="js/jquery-ui-1.13.0.custom/jquery-ui.js"></script>
    <link href="js/jquery-ui-1.13.0.custom/jquery-ui.theme.css" rel="stylesheet">
    <!-- Customized -->
    <link href="../css/master.css" rel="stylesheet">
    <script src="../js/master.js"></script>
    <script src="../js/create_quiz.js"></script>
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/logout.js"></script>
</head>

<body>

    <nav class="navbar">
        <div id="logo">
            <img src="../images/logo.png">
        </div>

        <div id="fullname">
            Ma'am / Sir Erika Raymundo
        </div>
    </nav>
    <div class="space-div">
        <div id="div-quiz-creator">
            <div id="questions">
            </div>

            <div id="create-options">
                <button id="btn-add-question" class="btn btn-primary main-gradient">+ Question</button>
                <button id="btn-save-quiz" class="btn btn-primary main-gradient">Save Quiz</button>
            </div>
        </div>
    </div>
</body>

</html>