<?php
include "db.php";
include "functions.php";

// Kiểm tra nếu form đã được gửi
if (isset($_POST['submit'])) {
   updateTable();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER UPDATE DATA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
</head>

<body>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>

</html>