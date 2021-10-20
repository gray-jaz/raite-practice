$(document).ready(function(){
    $("#btn-add-question").click(function(){

        var counter = $(".question").length + 1;

        $('#questions').append(
        "<div class='ui-state-default question'>" + 
            "<span class='ui-icon ui-icon-arrowthick-2-n-s'></span>"+
            "<span class='q-counter'>"+counter+"</span>" +
            "<div class='div-question-content'>" + 
                "<input type='text' placeholder='Enter your question' class='form-text'>" + 
                "<div class='div-qtype'>Choose question type"+
                    "<button class='btn btn-qtype btn-qtype-selected' data-toggle='button'"+
                        "aria-pressed='true'>Multiple Choice</button>" +
                    "<button class='btn btn-qtype'>Identification</button>" +
                    "<button class='btn btn-qtype'>True or false</button>" +
                "</div>" +
                "<div class='div-multiplechoice'>" + 
                    "Choices (Do not forget to select the correct answer)" +
                    "<div>" +
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
                            "<input type='radio' name='choice' value='c' class='form-check-input'>" +
                            "<input type='text' name='choice-content'>" +
                        "</label>" +
                        "<label>" +
                            "<input type='radio' name='choice' value='d' class='form-check-input'>" + 
                            "<input type='text' name='choice-content'>" +
                        "</label>" +
                    "</div>" +
                "</div>" +
                "<div class='div-identification'>" +
                    "<input type='text' name='solo-answer' placeholder='Enter the correct answer'>" +
                "</div>" +
                "<div class='div-truefalse'>" + 
                    "<div>" +
                        "<label> " +
                            "<input type='radio' name='choice' value='True' class='form-check-input'>True"+
                        "</label>" +
                        "<label>"+
                            "<input type='radio' name='choice' value='False' class='form-check-input'>False"+
                        "</label>"+
                    "</div>"+
                "</div>"+
            "</div>"+
            "<button class='btn-close'></button>"+
        "</div>"
        )
    });

    
    $("#questions").on("click", ".btn-close", function() {
        $(this).parent().remove();

        var counters = $(".q-counter");
        for (var i = 0; i < counters.length; i++) {
            $(counters[i]).html(i+1);
        }
    });
});
