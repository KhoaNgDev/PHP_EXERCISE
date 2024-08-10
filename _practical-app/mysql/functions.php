<?php

include "db.php";
?>

<?php
function showAllData() {
    global $CONNECTION;
    $query = "SELECT id, username FROM users";
    $result = mysqli_query($CONNECTION, $query);
    if (!$result) {
        die("MYSQL QUERY FAILED: " . mysqli_error($CONNECTION));
    }
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value=" . $row['id'] . ">" . $row['username']. "</option>";
    }
}


?>
