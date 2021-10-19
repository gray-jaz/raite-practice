<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <form action="action/save_teacher.php" method="POST">
        <div class="form-group">
            <label for="email">Username</label>
            <input type="text" name="username" class="form-control" id="email" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Enter password">
        </div>
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter full name">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</body>

</html>