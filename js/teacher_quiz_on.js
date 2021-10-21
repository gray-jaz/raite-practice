$(document).ready(function () {

    var isStart = false;

    $("#start-quiz").click(function () {
        isStart = true;

        if(isStart) {   
            setInterval(function() {
                $.get("../action/teacher_quiz_on.php",
                function (data, status) {
                    $("#div-questions").html(data);
                });
            }, 3000);
        }

    })
})