<?php
/* @var array $params */
$product = $params[0];
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
            <section id="product-section">

                <article id="product-article">
                <div id="product-image">
                        <img src="<?= '/images/' . $product['image']  ?>"> </img>
                </div>
                </article>

                <aside id="product-aside">
                    <h1><?=$product['name']?></h1>
                    <p>VareNr. <?=$product['product_number']?></p>
                    <h4>Pris kr. <?=$product['price_per_unit']?>,-</h3>
                    <p>Beskrivelse: <?=$product['description']?></p>
                    <form action="/action_page.php">
                        <label for="quantity"> Vælg antal :</label>
                            <input type="number" id="quantity" name="quantity" min="1" max="5">
                        <button class="bestil" type="submit"> Bestil </button>
                    </form>
                </aside>
            </section>
        </main>
        <footer></footer>

<script src="/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="/js/main.js"></script>
</html>
