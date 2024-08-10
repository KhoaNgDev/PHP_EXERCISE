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

?>