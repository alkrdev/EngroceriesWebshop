<?php
/* @var array $params */
$product = $params;
var_dump($product);
?>

<!doctype html>
<html class="no-js" lang="da-DK">

<?php
include_once(component("head.php"));
?>
    <body>
        <?php 
            include_once(component("header.php"));
        ?> 
        <main>
            <section>
            </section>
        </main>
        <footer></footer>

        <script src="<?= asset('js/vendor/modernizr-3.11.2.min.js') ?>"></script>
        <script src="<?= asset('js/main.js') ?>"></script>
    </body>
</html>
