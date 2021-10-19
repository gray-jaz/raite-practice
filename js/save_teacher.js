$("#btn-submit").click(function(){
    // alert("hello!"); 
  $.post("action/save_teacher.php",
    {
        username: "" + $("#username").val() + "",
        pwd: "" + $("#pwd").val() + "",
        fullname: "" + $("#fullname").val() + ""
    },
    function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });