<?php

// TODO Hàm để tạo navigation (thanh điều hướng)
function Navigation()
{
    $activePage = basename($_SERVER['PHP_SELF']);
    $rows = file('includes/navigation.txt');
    // Bắt đầu tạo danh sách không có thứ tự (unordered list) với lớp CSS 'nav'
    echo "<ul class='nav'>";

    // Duyệt qua từng dòng trong mảng $rows
    foreach ($rows as $row) {
        // Tách mỗi dòng thành mảng con $nav bằng dấu ":"
        $nav = explode(":", $row);
        $page = trim($nav[0]);
        $link = trim($nav[1]);

        // Kiểm tra nếu liên kết hiện tại trùng với trang đang được mở
        if ($link  == $activePage) {
            // Nếu trùng, thêm lớp 'activeLink' để đánh dấu liên kết đang hoạt động
            echo "<li class='activeLink'><a href='{$link}'>" . $page . "</a></li>";
        } else {
            // Nếu không trùng, tạo liên kết bình thường
            echo  "<li><a href='" . $link . "'>" . $page . "</a></li>";
        }
    }

    // Kết thúc danh sách không có thứ tự
    echo "</ul>";
}

// Hàm để lấy tiêu đề trang
function getTitle()
{
    // Lấy tên tệp hiện tại từ URL
    $activePage = basename($_SERVER['PHP_SELF']);
    // Đọc nội dung của tệp 'navigation.txt' và lưu từng dòng vào mảng $rows
    $rows = file('includes/navigation.txt');

    // Duyệt qua từng dòng trong mảng $rows
    foreach ($rows as $row) {
        // Tách mỗi dòng thành mảng con $nav bằng dấu ":"
        $nav = explode(":", $row);
        // Lấy tên trang (page) và liên kết (link) từ mảng $nav, loại bỏ khoảng trắng thừa
        $page = trim($nav[0]);
        $link = trim($nav[1]);

        // Kiểm tra nếu liên kết hiện tại trùng với trang đang được mở
        if ($link  == $activePage) {
            // Nếu trùng, hiển thị tên trang
            echo $page;
        } else {
            // Nếu không trùng, không làm gì cả
        }
    }
}
?>
