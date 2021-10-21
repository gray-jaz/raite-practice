$("#btn-submit").click(function(){
  $.post("action/teacher_signup.php",
    {
        username: $("#username").val(),
        pwd: $("#pwd").val(),
        fullname: $("#fullname").val()
    },
    function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });