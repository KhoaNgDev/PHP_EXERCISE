<?php
// Kết nối tới cơ sở dữ liệu
$CONNECTION = mysqli_connect('localhost', 'root', '', 'TEST_PHP_DB');
if (!$CONNECTION) {
    die("FAILED TO CONNECT TO THE MYSQL DATABASE: " . mysqli_connect_error());
}
