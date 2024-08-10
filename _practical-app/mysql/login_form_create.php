<?php
include "db.php";   
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Kiểm tra dữ liệu đầu vào
    if (empty($username) || empty($password)) {
        die('Please fill out both fields.');
    }

    $query = "INSERT INTO users(username, password)";
    $query .= "VALUES('$username', '$password')";
    $result = mysqli_query($CONNECTION, $query);

    if ($result) {
        echo "User registered successfully.";
    } else {
        die('QUERY FAILED: ' . mysqli_error($CONNECTION));
    }

    // Đóng kết nối
    mysqli_close($CONNECTION);
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
            <form action="login_form_create.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="">
                </div>
                <div class="mb-3">
                    <input type="submit" name="submit" class="form-control btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</body>

</html>