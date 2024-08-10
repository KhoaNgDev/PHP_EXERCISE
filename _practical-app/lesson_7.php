<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>


<section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>


    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">



        <?php
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password = password_hash($password, PASSWORD_DEFAULT);

            // Kiểm tra dữ liệu đầu vào
            if (empty($username) || empty($password)) {
                die('Please fill out both fields.');
            }

            // Kết nối tới cơ sở dữ liệu
            $CONNECTION = mysqli_connect('localhost', 'root', '', 'TEST_PHP_DB');
            if (!$CONNECTION) {
                die("FAILED TO CONNECT TO THE MYSQL DATABASE: " . mysqli_connect_error());
            }

            // Chèn dữ liệu vào bảng
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

        <form action="lesson_7.php" method="post">
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



    </article><!--MAIN CONTENT-->

    <?php include "includes/footer.php"; ?>