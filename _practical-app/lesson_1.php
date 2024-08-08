<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>


    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">

        <?php

        echo '<h3 style="color:red"> Step 1: Use the Echo Function to say hello with html h3 tags embedded inside php.</h3>';

        // Tạo biến $title để tạo chuỗi 
        $title = "Say Hello";
        //    Echo tên biến $title để tạo ra chuỗi 
        echo $title;
        echo '<h3 style="color:red"> Step 2: Write a comment above the echo function and explain
            what that function is doing.</h3>';



        ?>
    </article>
    <!--MAIN CONTENT-->

    <?php include "includes/footer.php"; ?>