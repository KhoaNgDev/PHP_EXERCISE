<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>


<section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>


    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">



        <?php
        function readRow()
        {
            // Kết nối tới cơ sở dữ liệu
            $CONNECTION = mysqli_connect('localhost', 'root', '', 'TEST_PHP_DB');
            if (!$CONNECTION) {
                die("FAILED TO CONNECT TO THE MYSQL DATABASE: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM users";

            // Thực hiện truy vấn
            $result = mysqli_query($CONNECTION, $query);

            // Kiểm tra xem truy vấn có thành công không
            if (!$result) {
                die("MYSQL QUERY FAILED: " . mysqli_error($CONNECTION));
            }

            // Duyệt qua từng hàng dữ liệu và in ra dưới dạng HTML
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $username = $row['username'];
                $password = $row['password'];

                // In hàng dữ liệu dưới dạng hàng trong bảng HTML
                echo "<tr>";
                echo "<th scope='row'>{$id}</th>";
                echo "<td>{$username}</td>";
                echo "<td>{$password}</td>";     
                echo "</tr>";
            }
        }
        ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                     
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        readRow();
                        ?>
                    </tbody>
                </table>
      


    </article><!--MAIN CONTENT-->

    <?php include "includes/footer.php"; ?>