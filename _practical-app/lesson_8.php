<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

    <aside class="col-xs-4">
        <?php Navigation(); ?>
    </aside><!--SIDEBAR-->

    <article class="main-content col-xs-8">
        <?php
        // ? $1$ = md5crypt ( MD5-based cryptography )
        $text = 'my_password';
        $salt = '$1$ma_hoa_ban_dau$'; 
        $encrypted_text = crypt($text, $salt);
        $encrypted_result = $encrypted_text;
        echo '<h3 style="color:red">Encrypted text: </h3>' . $encrypted_result;
        ?>
    </article><!--MAIN CONTENT-->

    <?php include "includes/footer.php"; ?>
</section>
