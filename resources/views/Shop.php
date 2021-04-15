<?php
/** @var array $params */
define('Products', $params);
?>
<!doctype html>
<html class="no-js" lang="da-DK">


<head>
    <meta charset="utf-8">

    <title>Engroceries Webshop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="<?= asset('site.webmanifest') ?>">
    <link rel="apple-touch-icon" href="<?= asset('icon.png') ?>">
    <!-- Place favicon.ico in the root directory -->

    <link type="text/css" rel="stylesheet" href="<?= asset('css/normalize.css') ?>">
    <link type="text/css" rel="stylesheet" href="<?= asset('css/main.css') ?>">
    <link type="text/css" rel="stylesheet" href="<?= asset('css/shop.css') ?>">

    <meta name="theme-color" content="#fafafa">
</head>

<body>
<header>
    <h1>Engroceries</h1>
    <nav>

    </nav>
    <input type="text" name="search" id="search">
</header>
<main>
    <section>
        <div class="filter-container">
            <h1>Filter <h1>


        </div>

        <div class="productcontainer">
            <?php
            foreach (Products as $product) {
                ?>
                <div class="product">
                    <img src="<?= '/images/' . $product['image'] ?>"
                         style="width: 140px;">
                    <h2> <?= $product['name'] ?> </h2>
                    <p><?= $product['description'] ?></p>
                    <p class="price">Pris kr. <?= $product['price_per_unit'] ?>,- </p>
                    <p> Varenr: <?= $product['product_number'] ?> </p>
                </div>
                <?php
            }
            ?>
          
        </div>
    </section>
</main>
<footer></footer>

<script src="<?= asset('js/vendor/modernizr-3.11.2.min.js') ?>"></script>
<script src="<?= asset('js/main.js') ?>"></script>
</body>

</html>
