<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>


    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">

        <?php

        echo '<h3 style="color:red">Global Variable</h3>';

        $outside_var = "outside"; //global

        function convert()
        {
            global $outside_var;
            $outside_var = "inside"; //local
        }

        echo $outside_var;
        echo "<br>";
        convert();

        echo $outside_var;
        echo "<br>";
        echo $outside_var;


        echo '<h3 style="color:red">Constant Variable</h3>';
        $number = 10;
        echo $number . '<br>';
        define("NAME", 1000);
        echo NAME;
        ?>
    </article>
    <!--MAIN CONTENT-->

    <?php include "includes/footer.php"; ?>