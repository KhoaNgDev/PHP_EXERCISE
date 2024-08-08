<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">




		<h3 style="color:red">Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:</h3>
		<?php
		$number1 = 10;
		$number2 = 20;
		?>
		<p>
			<?php
			echo "Number 1 : " . $number1 . '<br>' . "Number 2 : " . $number2;
			?>
		</p>
		<h3 style="color:red">Step 2: Add the two variables and display the sum with echo:</h3>
		<?php
		$sum = $number1 + $number2;
		echo "The sum of $number1 and $number2 is: " . $sum;
		?>

		<h3 style="color:red">Step 3: Make 2 Arrays with the same values, one regular and the other associative:</h3>
		<?php
		$regularArray = array(10, 20, 30);
		$associativeArray = array("first" => 10, "second" => 20, "third" => 30);
		?>

		<h3 style="color:red">Step 4: Make an if Statement with elseif and else to finally display string saying, I love PHP:</h3>
		<?php
		$language = "PHP";

		if ($language == "Python") {
			echo "I love Python";
		} elseif ($language == "JavaScript") {
			echo "I love JavaScript";
		} else {
			echo "I love PHP";
		}
		?>

		<h3 style="color:red">Step 5: Make a for loop that displays 10 numbers:</h3>
		<?php
		for ($i = 1; $i <= 10; $i++) {
			echo $i . " ";
		}
		?>

		<h3 style="color:red">Step 6: Make a switch Statement that test against one condition with 5 cases:</h3>
		<?php
		$day = "Wednesday";

		switch ($day) {
			case "Monday":
				echo "Today is Monday";
				break;
			case "Tuesday":
				echo "Today is Tuesday";
				break;
			case "Wednesday":
				echo "Today is Wednesday";
				break;
			case "Thursday":
				echo "Today is Thursday";
				break;
			case "Friday":
				echo "Today is Friday";
				break;
			default:
				echo "It's the weekend!";
				break;
		}
		?>




	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>