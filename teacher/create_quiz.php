<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create your quiz!</title>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6a07858133.js" crossorigin="anonymous"></script>
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
</head>

<body>

    <nav class="navbar">
        <div id="logo">
            <img src="images/logo.png">
        </div>

        <div id="fullname">
            Ma'am / Sir Erika Raymundo
        </div>
    </nav>
    <div id="div-quiz-creator">
        <button id="btn-add-question" class="btn btn-primary main-gradient">+ Question</button>
        <div id="questions">
        </div>

        <button id="btn-save-quiz" class="btn btn-primary main-gradient">Save Quiz</button>
    </div>
</body>

</html>