<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

    <aside class="col-xs-4">
        <?php Navigation(); ?>
    </aside><!--SIDEBAR-->

    <article class="main-content col-xs-8">
        <!--     <?php

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $submittedValue = $_POST['value'];
                        echo '<h3 style="color: red;">Form Submitted</h3>';
                        echo "Value submitted: " . htmlspecialchars($submittedValue);
                    }
                    ?> -->
        <?php

        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            echo 'Hello' . $username . '<br>';
            echo 'Your Password is : ' . $password;
        }
        ?>
        <!-- Bước 1: Tạo một form gửi một giá trị đến biến toàn cục POST -->
        <form method="post" action="lesson_6.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Please Fill The Input">
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Please Fill The Input">
            <br>
            <input name="submit" type="submit" value="Submit">
        </form>




    </article><!--MAIN CONTENT-->

    <?php include "includes/footer.php"; ?>