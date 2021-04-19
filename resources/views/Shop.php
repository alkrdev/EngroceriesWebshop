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
                <div id="toolbar">
                        <h2>Sotere efter:</h2>
                        <button class="price-sort"  type="submit" name="Orders" id="Orders" value="Orders">Pris: Høj til lav</button>
                        <button class="price-sort"  type="submit" name="Orders" id="Orders" value="Orders">Pris: Lav til Høj</button>
                        <button class="price-sort"  type="submit" name="Orders" id="Orders" value="Orders">Alfabetisk</button>
                        <button class="price-sort"  type="submit" name="Orders" id="Orders" value="Orders">Varenumre</button>
                </div>

                <div class="filter-container">
                    <h1>Filter <h1>
                </div>
                
                <div class="productcontainer">
                    <?php
                    foreach (Products as $product) {
                        ?>
                        <div class="product" data-id="<?=$product['product_number']?>">
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

        <script src="<?= asset('/js/vendor/modernizr-3.11.2.min.js') ?>"></script>
        <script src="<?= asset('/js/main.js') ?>"></script>
    </body>
</html>
