<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>


    </aside><!--SIDEBAR-->

    <article class="main-content col-xs-8">


        <?php

        echo '<h3 style="color: red">Math Functions</h3>';
        $number_1 = 2;
        $number_2 = 8;
        echo "Number 1 : " . $number_1 . "<br>" . "Number 2 : " . $number_2 . "<br>";
        echo "pow($number_1, $number_2)" . ' = ' . pow($number_1, $number_2) . "<br>";
        echo "rand($number_1, $number_2)" . ' = ' . rand($number_1, $number_2) . '<br>';
        echo "sqrt($number_1)" . ' = ' . sqrt($number_1) . '<br>';
        echo "ceil(4.6)" . ' = ' . ceil(4.6) . '<br>';

      
      
      ?>





    </article><!--MAIN CONTENT-->

    <?php include "includes/footer.php"; ?>