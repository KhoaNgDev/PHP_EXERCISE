<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
        <?php  
        // Step 1: Define a function to calculate the sum of two numbers
        echo '<h3 style="color: red;">Step 1: Define a function to calculate the sum of two numbers</h3>';

        function addNumbers($num1, $num2) {
            return $num1 + $num2;
        }

        // Example usage of the addNumbers function
        $sum = addNumbers(10, 20);
        echo "The sum of 10 and 20 is: " . $sum . "<br>";

        // Step 2: Define a function that multiplies two numbers
        echo '<h3 style="color: red;">Step 2: Define a function that multiplies two numbers</h3>';

        function multiplyNumbers($num1, $num2) {
            return $num1 * $num2;
        }

        // Call the multiplyNumbers function with parameters and display the result
        $product = multiplyNumbers(5, 10);
        echo "The result of the multiplication is: " . $product;
        ?>
    </article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>