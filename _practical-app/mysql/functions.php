<?php

include "db.php";
?>

<?php
function showAllData()
{
    global $CONNECTION;
    $query = "SELECT id, username FROM users";
    $result = mysqli_query($CONNECTION, $query);
    if (!$result) {
        die("MYSQL QUERY FAILED: " . mysqli_error($CONNECTION));
    }
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value=" . $row['id'] . ">" . $row['username'] . "</option>";
    }
}
function updateTable()
{
    global $CONNECTION;

    // Kiểm tra sự tồn tại của các trường trong mảng $_POST
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['id'])) {
        $username = mysqli_real_escape_string($CONNECTION, $_POST['username']);
        $password = mysqli_real_escape_string($CONNECTION, $_POST['password']);
        $id = mysqli_real_escape_string($CONNECTION, $_POST['id']);

        // Mã hóa mật khẩu
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Câu lệnh SQL
        $query = "UPDATE users SET ";
        $query .= "username = '" . mysqli_real_escape_string($CONNECTION, $username) . "', ";
        $query .= "password = '" . mysqli_real_escape_string($CONNECTION, $password) . "' ";
        $query .= "WHERE id = '" . mysqli_real_escape_string($CONNECTION, $id) . "'";
        $result = mysqli_query($CONNECTION, $query);

        if (!$result) {
            die("MYSQL QUERY FAILED: " . mysqli_error($CONNECTION));
        } else {
            echo "User updated successfully.";
        }
    } else {
        echo "Please fill in all fields.";
    }
}
function deleteRows()
{
    global $CONNECTION;

    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Câu lệnh SQL
        $query = "DELETE FROM users ";
        $query .= "WHERE id = '$id'";

        $result = mysqli_query($CONNECTION, $query);

        if (!$result) {
            die("MYSQL QUERY FAILED: " . mysqli_error($CONNECTION));
        } else {
            echo "User Deleted Successfully.";
        }
    } else {
        echo "Please fill in all fields.";
    }
}

function createRows()
{
    global $CONNECTION;
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Kiểm tra dữ liệu đầu vào
        if (empty($username) || empty($password)) {
            die('Please fill out both fields.');
        }

        $query = "INSERT INTO users(username, password)";
        $query .= "VALUES('$username', '$password')";
        $result = mysqli_query($CONNECTION, $query);

        if ($result) {
            echo "User registered successfully.";
        } else {
            die('QUERY FAILED: ' . mysqli_error($CONNECTION));
        }

        // Đóng kết nối
        mysqli_close($CONNECTION);
    }
}
function readRows() {
    global $CONNECTION;
    
    // Câu truy vấn SQL để lấy tất cả các dữ liệu từ bảng 'users'
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
        echo "<td><a href='login_update.php?id={$id}'>Edit</a></td>";
        echo "</tr>";
    }
}
