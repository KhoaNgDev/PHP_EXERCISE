<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

    <aside class="col-xs-4">
        <?php Navigation(); ?>
    </aside><!--SIDEBAR-->

    <article class="main-content col-xs-8">
        <?php
        // Kiểm tra nếu form đã được gửi
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Lấy giá trị từ form
            $submittedValue = $_POST['value'];
            echo '<h3 style="color: red;">Form Submitted</h3>';
            echo "Value submitted: " . htmlspecialchars($submittedValue);
        }
        ?>

        <!-- Bước 1: Tạo một form gửi một giá trị đến biến toàn cục POST -->
        <form method="post" action="">
            <label for="value">Enter a value:</label>
            <input type="text" id="value" name="value" required>
            <input type="submit" value="Submit">
        </form>
    </article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
