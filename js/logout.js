$(document).ready(function(){

    $("#logout").click(function(){

        Swal.fire({
            title: 'Are you sure you want to logout?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                  window.location = "logout.php"
              )
            }
          })
    })

})