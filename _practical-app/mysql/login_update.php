<?php
include "db.php";
include "functions.php";

// Kiểm tra nếu form đã được gửi
if (isset($_POST['submit'])) {
   updateTable();
}
?>
<?php include "includes/header.php" ?>
    <div class="container">
        <div class="col-xs-6">
        <h1 class="text-center">Update User</h1>
            <form action="login_update.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="" required>
                </div>
                <div class="mb-3">
                    <label for="id" class="form-label">Select User ID</label>
                    <select name="id" id="id" class="form-control" required>
                        <?php
                        showAllData();
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="submit" name="submit" class="form-control btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>
<?php include "includes/footer.php" ?>