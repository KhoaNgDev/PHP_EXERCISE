<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">
		<?php Navigation(); ?>
	</aside><!--SIDEBAR-->

	<article class="main-content col-xs-8">

		<?php
		// Bước 1: Tạo 2 biến number1 và number2 với giá trị lần lượt là 10 và 20
		echo '<h3 style="color:red">Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:</h3>';

		$number1 = 10;
		$number2 = 20;

		echo "Number 1: " . $number1 . '<br>' . "Number 2: " . $number2 . "<br><br>";

		// Bước 2: Cộng hai biến và hiển thị tổng bằng echo
		echo '<h3 style="color:red">Step 2: Add the two variables and display the sum with echo:</h3>';

		$sum = $number1 + $number2;
		echo "The sum of $number1 and $number2 is: " . $sum . "<br><br>";

		// Bước 3: Tạo 2 mảng với cùng giá trị, một mảng thông thường và một mảng liên kết
		echo '<h3 style="color:red">Step 3: Make 2 Arrays with the same values, one regular and the other associative:</h3>';

		$regularArray = array(10, 20, 30);
		$associativeArray = array("first" => 10, "second" => 20, "third" => 30);

		echo "Regular Array: ";
		print_r($regularArray);
		echo "<br><br>";

		echo "Associative Array: ";
		print_r($associativeArray);
		?>

	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>