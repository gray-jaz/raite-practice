$(document).ready(function () {

  $("#btn-submit").click(function () {

    if ($("#username").val().trim() == "" || $("#pwd").val().trim() == "" || $("#fullname").val().trim() == "") {
      Swal.fire({
        icon: "error",
        title: "Please enter all fields!"
      })
    } else {
      $.post("../action/signup-teacher.php",
        {
          username: $("#username").val(),
          pwd: $("#pwd").val(),
          fullname: $("#fullname").val()
        },
        function (data, status) {

          if (status == "success") {
            if (data == "ok") {
              Swal.fire({
                icon: "success",
                title: "You've successfully signed up!",
                allowOutsideClick: false
              })
              .then(function(result){
                if (result.value) {
                  window.location = "welcome.php"
                }
              })
            } else {
              Swal.fire({
                icon: "error",
                title: data
              })
              
            }
          }
        });
    }

  });

})

