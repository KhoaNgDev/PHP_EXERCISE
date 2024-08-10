<?php
include "db.php";
include "functions.php";

// Kiểm tra nếu form đã được gửi
if (isset($_POST['submit'])) {
    deleteRows();
}
?>
<?php include "includes/header.php" ?>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Delete User</h1>
        <form action="login_delete.php" method="post">

            <div class="mb-3">
                <label for="id" class="form-label">Select User ID</label>
                <select name="id" id="id" class="form-control" required>
                    <?php
                    showAllData();
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <input type="submit" name="submit" class="form-control btn btn-primary" value="DELETE">
            </div>
        </form>
    </div>
</div>
<?php include "includes/footer.php" ?>