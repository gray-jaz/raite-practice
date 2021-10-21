$(document).ready(function(){
    $("#btn-add-question").click(function(){
        var counter = $(".question").length + 1;
        $('#questions').append(
            "<div class='ui-state-default question'>" + 
                "<span class='ui-icon ui-icon-arrowthick-2-n-s'></span>"+
                "<span class='q-counter'>"+counter+"</span>" +
                "<div class='div-question-content'>" + 
                    "<input type='text' placeholder='Enter your question' name='question-text' class='form-text'>" + 
                    "<input type='number' placeholder='Points' name='points' class='form-text'>" +
                    "<div class='q-duration'>"+
                    "   <select name='duration'>"+
                    "       <option value='30000'>30 seconds</option>"+
                    "       <option value='60000'>1 minute</option>"+
                    "       <option value='120000'>2 minutes</option>"+
                    "   </select>"+
                    "</div>" +
                    "<div class='div-qtype'>Choose question type"+
                        "<button id='TypeA' class='btn btn-qtype' btn-qtype-selected>Multiple Choice</button>" +
                        "<button id='TypeB' class='btn btn-qtype'>Identification</button>" +
                        "<button id='TypeC'class='btn btn-qtype'>True or false</button>" +
                    "</div>" +
                    "<div class='div-multiplechoice div-answers'>" + 
                    "Choices (Do not forget to select the correct answer)" +
                    "<form>" +
                    "<div>"+ 
                            "<label>" +
                                "<input type='radio' name='choice' value='a' class='form-check-input'>"+
                                "<input type='text' name='choice-content'>" +
                            "</label>" +
                            "<label>" +
                                "<input type='radio' name='choice' value='b' class='form-check-input'>" +
                                "<input type='text' name='choice-content'> " +
                            "</label>" +
                        "</div>" +
                        "<div>" +
                            "<label>" +
                                "<input type='radio' name='choice' value='c' class='form-check-input' checked>" +
                                "<input type='text' name='choice-content'>" +
                            "</label>" +
                            "<label>" +
                                "<input type='radio' name='choice' value='d' class='form-check-input'>" + 
                                "<input type='text' name='choice-content'>" +
                            "</label>" +
                    "</div>" +
                    "</form>" +
                "</div>" +
                "</div>"+
                "<button class='btn-close'></button>"+
            "</div>"
            );
    });

    $("#questions").on("click", ".btn-qtype", function(){   
        $(this).parent().children(".btn-qtype").removeClass("btn-qtype-selected");
        $(this).parent().parent().children(".div-answers").remove();    
        $(this).addClass("btn-qtype-selected");

        
        switch($(this).attr("id")) {
            case "TypeA":
                $(this).closest(".div-question-content").append(
                "<div class='div-multiplechoice div-answers'>" + 
                    "Choices (Do not forget to select the correct answer)" +
                    "<form>" +
                    "<div>"+ 
                            "<label>" +
                                "<input type='radio' name='choice' value='a' class='form-check-input'>"+
                                "<input type='text' name='choice-content'>" +
                            "</label>" +
                            "<label>" +
                                "<input type='radio' name='choice' value='b' class='form-check-input'>" +
                                "<input type='text' name='choice-content'> " +
                            "</label>" +
                        "</div>" +
                        "<div>" +
                            "<label>" +
                                "<input type='radio' name='choice' value='c' class='form-check-input' checked>" +
                                "<input type='text' name='choice-content'>" +
                            "</label>" +
                            "<label>" +
                                "<input type='radio' name='choice' value='d' class='form-check-input'>" + 
                                "<input type='text' name='choice-content'>" +
                            "</label>" +
                    "</div>" +
                    "</form>" +
                "</div>");
                break;

            case "TypeB":
                $(this).closest(".div-question-content").append(
                "<div class='div-identification div-answers'>" +
                                    "<form><input type='text' name='solo-answer' placeholder='Enter the correct answer'></form>" +
                                "</div>");
                break;

            case "TypeC":
                $(this).closest(".div-question-content").append(
                "<div class='div-truefalse div-answers'>" + 
                    "<form>" +
                        "<label> " +
                            "<input type='radio' name='trueFalseAnswer' value='True' class='form-check-input'>True"+
                        "</label>" +
                        "<label>"+
                            "<input type='radio' name='trueFalseAnswer' value='False' class='form-check-input'>False"+
                        "</label>"+
                    "</form>"+
                "</div>");
                break;
        }
    });
    
    $("#questions").on("click", ".btn-close", function() {
        $(this).parent().remove();

        var counters = $(".q-counter");
        for (var i = 0; i < counters.length; i++) {
            $(counters[i]).html(i+1);
        }
    });

    $("#btn-save-quiz").click(function(){
        //ajax
        //iterate over .question then save into every array

        var questions = $(".question");
        var objects = [];

        for(let q of questions) {

            var question = {};
            question.text = $(q).find("input[name='question-text']").val();
            question.points = $(q).find("input[name='points']").val();
            question.dTime = $(q).find("select[name='duration'] option:selected").val();
            question.qType = $(q).find(".btn-qtype-selected").attr("id");
            question.choices = null;
            question.choicesAnswerKey = null;
            question.soloAnswer = null;
            question.trueFalseAnswer = null;

            switch(question.qType) {
                case "TypeA":
                    question.choices = [];
                    var elements = $(q).find(".div-multiplechoice");

                    for(let e of elements) {
                        var choice_content = $(e).find("input[name='choice-content']");
                        for (let c of choice_content) {
                            question.choices.push($(c).val());
                        }
                    }
                    
                    question.choicesAnswerKey = $(elements).find("input[name='choice']:checked").val();
                    break;

                case "TypeB":
                    question.soloAnswer = $(q).find("input[name='solo-answer']").val();
                    break;

                case "TypeC":
                    question.trueFalseAnswer = $(q).find("input[name='trueFalseAnswer']:checked").val();
                    break;
            }

            objects.push(question);
        }


        $.post("../action/create_quiz.php",
        {
            quiz: JSON.stringify(objects)
        },
        function(data, status){
            if (status == "success")
            Swal.fire(
                data,
                'The quiz is created, share the code to your students now!',
                'success'
              )
        });

    });
});