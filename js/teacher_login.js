$("#btn-submit").click(function () {
    $.post("../action/login-teacher.php",
        {
            username: $("#username").val(),
            password: $("#pwd").val()
        },
        function (data, status) {

            if (status == "success") {
                if (data == "ok") {
                    Swal.fire({
                        icon: "success",
                        title: "Login successfully",
                        allowOutsideClick: false
                    })
                        .then(function (result) {
                            if (result.value) {
                                window.location = "welcome.php";
                            }
                        });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Unable to login",
                        text: "Please make sure that all fields are entered correctly.",
                    })
                }
            }
        }
    );

});