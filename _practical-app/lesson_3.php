<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<h3 style="color:red">Step 1: Make an if Statement with elseif and else to finally display string saying, I love PHP:</h3>
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

		<h3 style="color:red">Step 2: Make a for loop that displays 10 numbers:</h3>
		<?php
		for ($i = 1; $i <= 10; $i++) {
			echo $i . " ";
		}
		?>

		<h3 style="color:red">Step 3: Make a switch Statement that test against one condition with 5 cases:</h3>
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