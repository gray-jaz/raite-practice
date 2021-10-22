$(document).ready(function(){
    getCurrentQuestion();
    setInterval(checkQuestion, 1000);
});

function getCurrentQuestion() {

    $.get("../action/get_active_question.php",
    function(data, result) {
        if (result == "success") {
            $("#question-container").html(data);
			var min = 30 * 1, display = document.querySelector('#time');
            startTimer(min, display);
        }
    });
}

function checkQuestion() {
    console.log("test");
    $.get("../action/check_active_question.php",
    function(data, result) {
        if (result == "success") {
            if (data == "1") {
                console.log("test2");
            } else {
                console.log("test3");
                getCurrentQuestion();
            }
        }
    });
}


function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 30, 10);
        seconds = parseInt(timer % 30, 10);

        seconds = seconds < 10 ? "0" + seconds : seconds;
        display.textContent = seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

function answer() {
    
}