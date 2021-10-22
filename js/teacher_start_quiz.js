var alreadyStarted = false;

$(document).ready(function () {

    $("#btn-start-stop").click(function () {
        if ($("#btn-start-stop").html() == "Stop Quiz") {
            Swal.fire({
                title: 'Are you sure want to stop the quiz?',
                text: 'You cannot start the quiz again as this is a one quiz code only.',
                showDenyButton: true,
                confirmButtonText: 'Yes',
                denyButtonText: `Cancel`,
            }).then((result) => {
                stopQuiz();
            })
        } else {
            startQuiz();

        }

        $("#btn-start-stop").html("Stop Quiz")
    });

    $("#btn-next").click(function () {
        nextQuestion();
    });

})

function startQuiz() {
    Swal.fire({
        icon: 'success',
        title: 'The quiz will now start!',
        text: 'Close this alert for the quiz to start.',
        confirmButtonText: 'Ok'
    }).then((result) => {
        //ajax
        $.get("../action/teacher_start_quiz.php",
            function (data, result) {
                if (result == "success") {
                    $("#question-container").html(data);
                    alreadyStarted = true;
                    var min = 30 * 1, display = document.querySelector('#time');
                    startTimer(min, display);
                }
            });

        // Swal.fire('The quiz has started!', '', 'success');
    });

}

function nextQuestion() {
    if (alreadyStarted) {
        //ajax
        $.get("../action/set_active_question.php",
            function (data, result) {
                if (result == "success") {

                    if (data == "end") {
                        Swal.fire({
                            title: 'The quiz has ended!',
                            icon: 'success',
                            confirmButtonText: 'Ok',
                            allowOutsideClick: false
                        }).then((result) => {
                            $("#btn-start-stop").hide();
                            // this is where we will display the leaderboard, next page na dito
                        });
                    } else {
                        $("#question-container").html(data);
                    }
                }

            }
        );
    }

}

function stopQuiz() {


    $.get("../action/stop_quiz.php",
        function (data, result) {
            if (result == "success") {
                if (data == "end") {
                    Swal.fire({
                        icon: 'success',
                        title: 'The quiz has ended!',
                        confirmButtonText: 'Ok',
                        allowOutsideClick: false
                    }).then((result) => {
                        // this is where we will display the leaderboard, next page na dito

                    })

                } else {
                    $("#question-container").html(data);
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

setInterval(nextQuestion, 30000);