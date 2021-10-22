<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quiz Time</title>
	<link rel="stylesheet" type="text/css" href="../student/quiz_time.css">
	<link rel="stylesheet" type="text/css" href="../css/master.css">
</head>
<body>
	<div class="quiz-container">
		<button class="btn-options" style="background-color: #9BDD59;">Start/Stop Quiz</button>
		<div class="title-bg">
			<!--<text class="title-txt"><strong>Q</strong>uiz<strong>M</strong>aker</text>-->
			<img src="../images/white_logo.png">
		</div>
		<button class="btn-options" style="background-color: #C042EC;">Next Question</button>
	</div>
	<div class="timer-cd">
		<span id="time">1:00</span>
	</div>

	<div class="question-div">
		<div class="question-left">
			<div class="number-div"><span class="question-no">1</span></div>
		</div>
		<div class="question-right">
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi faucibus ut magna non scelerisque. Proin a cursus odio. Suspendisse nibh lorem, fermentum semper justo a, sodales ullamcorper ante. </p>
		</div>
	</div>

	<div class="answer-box">
		<div class="multiple-choice" style="visibility: nn;">
			<button class="multiple-ans" style="background-color: #42CEEC;">Choice 1</button>
			<button class="multiple-ans" style="background-color: #7879F1;">Choice 2</button><br>
			<button class="multiple-ans" style="background-color: #9BDD59;">Choice 3</button>
			<button class="multiple-ans" style="background-color: #FE9B8E;">Choice 4</button>
		</div>
		<div class="fill-in-blank" style="visibility: nn;">
			<input class="fill-ans" placeholder="Type Your Answer Here"></input>
		</div>
		<div class="true-false">
			<button class="true-false-ans" style="background-color: #C042EC;">True</button>
			<button class="true-false-ans" style="background-color: #7879F1;">False </button>
		</div>
	</div>

</body>
</html>