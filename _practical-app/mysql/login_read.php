<?php


// Kết nối tới cơ sở dữ liệu
$CONNECTION = mysqli_connect('localhost', 'root', '', 'TEST_PHP_DB');
if (!$CONNECTION) {
    die("FAILED TO CONNECT TO THE MYSQL DATABASE: " . mysqli_connect_error());
}

// Chèn dữ liệu vào bảng
$query = "SELECT * FROM users";
$result = mysqli_query($CONNECTION, $query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER DATA</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="col-xs-6">
            <table class="table">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <pre>
                  <?php
                    print_r($row);
                 ?>
                 </pre>
                <?php
                }
                ?>

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</body>

</html>