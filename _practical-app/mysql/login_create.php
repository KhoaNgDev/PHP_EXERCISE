<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php
createRows();
?>
<?php include "includes/header.php" ?>
    <div class="container">
        <div class="col-xs-6">
            <h1 class="text-center">Create User</h1>
            <form action="login_create.php" method="post">
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
   <?php include "includes/footer.php" ?>
