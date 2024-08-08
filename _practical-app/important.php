<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>



<section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>


    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">
        <p>Now is possible to create a constant using the keyword "const" but it does not work the same as the define() function but it is very similar.

            From PHP.net = https://www.php.net/manual/en/language.constants.syntax.php

            When using the const keyword, only scalar data (boolean, integer, float and string) can be contained in constants prior to PHP 5.6. From PHP 5.6 onwards, it is possible to define a constant as a scalar expression, and it is also possible to define an array constant. It is possible to define constants as a resource, but it should be avoided, as it can cause unexpected results.



            const CONSTANT = 'Hello World';



            It is possible to assign an array with this method like so.



            const ANIMALS = array('dog', 'cat', 'bird');
        </p>


        <?php
        // Works as of PHP 5.3.0

        const CONSTANT = 'Hello World';


        echo CONSTANT;


        // Works as of PHP 5.6.0

        const ANOTHER_CONST = '<br>' . CONSTANT . '; Goodbye World' . '<br>';

        echo ANOTHER_CONST;


        const ANIMALS = array('dog', 'cat', 'bird');

        echo ANIMALS[1] . '<br>'; // outputs "cat"


        // Works as of PHP 7
        define('ANIMALSs', array(

            'dog',

            'cat',

            'bird'

        ));


        echo ANIMALSs[2]; // outputs "cat"


        ?>

    </article><!--MAIN CONTENT-->
    <?php include "includes/footer.php"; ?>