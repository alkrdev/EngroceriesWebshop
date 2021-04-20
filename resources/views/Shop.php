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
                <!-- Filter Toolbar begins -->
                <div id="toolbar">
                    <h2>Sotere efter:</h2>
                    <!-- Order by High price button  -->
                    <form id="order-by" action="<?= url('highPrice')?>" method="post">
                        <button class="price-sort"  type="submit" name="shophigh" id="shophigh" value="shophigh">Pris: Høj til lav</button>
                    </form>
                    <!-- Order by low price button  -->
                    <form id="order-by" action="<?= url('lowPrice')?>" method="post">
                        <button class="price-sort"  type="submit" name="lowPrice" id="lowPrice" value="lowPrice" >Pris: Lav til Høj </button>
                    </form>
                    <!-- alphabetical order az button -->
                    <form id="order-by" action="<?= url('az')?>" method="post">
                        <button class="price-sort"  type="submit" name="az" id="az" value="az">A-Z</button>
                    </form>
                    <!-- alphabetical order za button -->
                    <form id="order-by" action="<?= url('za')?>" method="post">
                        <button class="price-sort"  type="submit" name="az" id="az" value="az">Z-A</button>
                    </form>
                </div>
                <!-- Filter Toolbar ends here -->
            
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
