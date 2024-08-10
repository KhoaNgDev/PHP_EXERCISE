<?php
include "db.php";
include "functions.php";

// Kiểm tra nếu form đã được gửi
if (isset($_POST['submit'])) {
   deleteRows();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER DELETE DATA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="col-xs-6">
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>

</html>