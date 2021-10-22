<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quiz Time</title>
	<link rel="stylesheet" type="text/css" href="../student/quiz_time.css">
	<link rel="stylesheet" type="text/css" href="../css/master.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/logout.js"></script>
	<script src="../js/teacher_start_quiz.js"></script>
</head>
<body>
	<div class="quiz-container">
		<button id="btn-start-stop" class="btn-options" style="background-color: #9BDD59;">Start Quiz</button>
		<div class="title-bg">
			<!--<text class="title-txt"><strong>Q</strong>uiz<strong>M</strong>aker</text>-->
			<img src="../images/white_logo.png">
		</div>
		<button id="btn-next" class="btn-options" style="background-color: #C042EC;">Next Question</button>
	</div>
	<div class="timer-cd">
		<span id="time">00:30</span>
	</div>

	<div id="question-container">
		
	</div>

</body>
</html>