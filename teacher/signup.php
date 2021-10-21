<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/master.css" type="text/css">
    <link rel="stylesheet" href="../css/form.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="div-container"> 
        <div class="div-left">
            <text class="page-title"><strong>Q</strong>uiz<strong>M</strong>aker!</text>
            <h3> Fun and the best quiz creator! </h3>
            <img src="../images/white_teaching.gif"/>
        </div>
        <div class="div-right">
            <h4> Create your account </h4>
            <h5> As a teacher, you need to create an account to create a quiz. 
                <br> Already have an account? <a href="login.php">Login now.</a>
            </h5>
        <!-- <form action="action/save_teacher.php" method="POST"> -->
            <div class="form-group">
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" style="border-radius: 25px; height: 50px;">
            </div>
            <div class="form-group">
                <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Enter password" style="border-radius: 25px; height: 50px;">
            </div>
            <div class="form-group">
                <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter full name" style="border-radius: 25px; height: 50px;">
            </div>
            <button type="submit" class="btn btn-default" id="btn-submit">Sign Up</button>
        <!-- </form> -->
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../js/teacher_signup.js"></script>
</body>

</html>