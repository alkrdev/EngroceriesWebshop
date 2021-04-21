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
            <section>

                <article>
                    <div>
                        <img src="<?= '/images/' . $product['image'] ?>"
                    </div>
                </article>

                <aside>
                    <h1><?=$product['name']?></h1>
                    <p>VareNr. <?=$product['product_number']?></p>
                    <h3>Pris kr. <?=$product['price_per_unit']?>,-</h3>
                    <h2>Beskrivelse: <?=$product['description']?></h2>
                    <form>
                        <div>
                            
                            <button type="submit">Bestil</button>
                        </div>
                    </form>

                </aside>
            </section>
        </main>
        <footer></footer>

<script src="/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="/js/main.js"></script>
</html>
