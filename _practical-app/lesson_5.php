<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

	<aside class="col-xs-4">
		<?php Navigation(); ?>
	</aside><!--SIDEBAR-->

	<article class="main-content col-xs-8">

		<?php
		// Bước 1: Sử dụng hàm toán học có sẵn và hiển thị kết quả
		echo '<h3 style="color: red;">Step 1: Use a pre-built math function here and echo it</h3>';
		$number = 9;
		echo "Căn bậc hai của $number là: " . sqrt($number) . "<br><br>";

		// Bước 2: Sử dụng hàm chuỗi có sẵn và hiển thị kết quả
		echo '<h3 style="color: red;">Step 2: Use a pre-built string function here and echo it</h3>';
		$string = "hello world";
		echo "Chuỗi viết hoa: " . strtoupper($string) . "<br><br>";

		// Bước 3: Sử dụng hàm mảng có sẵn và hiển thị kết quả
		echo '<h3 style="color: red;">Step 3: Use a pre-built Array function here and echo it</h3>';
		$array = ["apple", "banana", "cherry"];

		echo "Mảng bình thường: ";
		print_r($array);
		echo "<br>";
		echo "Mảng đảo ngược: ";
		print_r(array_reverse($array));
		echo "<br>";

		?>

	</article><!--MAIN CONTENT-->
	<?php include "includes/footer.php"; ?>