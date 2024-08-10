<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $CONNECTION = mysqli_connect('localhost', 'root', '', 'TEST_PHP_DB');
    if ($CONNECTION) {
        echo "CONNECTED TO THE MYSQL DATABASE";
    } else {
        die("FAILED TO CONNECT THE MYSQL DATABASE");
    }
    /*  if ($username && $password) {
        echo $username;
        echo $password;
    } else {
        echo "THIS FIELD CANNOT BE BLANK";
    } */
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PHP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="col-xs-6">
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="" placeholder="">
                </div>
                <div class="mb-3">
                    <input type="submit" name="submit" class="form-control btn btn-primary" id="" placeholder="">
                </div>

            </form>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</body>

</html>