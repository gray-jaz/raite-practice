$("#btn-submit").click(function() {
    $.post("action/teacher_login.php",
        {
            username: $("#username").val(),
            password: $("#pwd").val()
        },
        function(data, status) {
            var icon = data != "ok" ? "error" : "success";
            Swal.fire({
                icon: "'"+icon+"'",
                title: 'Oops...',
                text: data
              })
        }
    );

});