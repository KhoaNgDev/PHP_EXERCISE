<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Read User</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Gọi hàm readRows() để in dữ liệu
                readRows();
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "includes/footer.php"; ?>
