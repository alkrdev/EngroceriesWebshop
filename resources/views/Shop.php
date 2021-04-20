<?php
/** @var array $params */
define('Products', $params);
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
            <section id="shop">
                <div class="filter-container">
                    <h1>Filter <h1>
                </div>

                <div class="productcontainer">
                    <?php
                    foreach (Products as $product) {
                        ?>
                        <div class="product" data-id="<?=$product['product_number']?>">
                            <img src="<?= '/images/' . $product['image'] ?>">
                            <div>
                                <h2> <?= $product['name'] ?> </h2>
                                <p><?= substr($product['description'], 0, 50)?>...</p>
                                <p class="price">Pris kr. <?= $product['price_per_unit'] ?>,- </p>
                                <p> Varenr: <?= $product['product_number'] ?> </p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                
                </div>
            </section>
        </main>
        <footer></footer>

<script src="/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="/js/main.js"></script>
</html>
