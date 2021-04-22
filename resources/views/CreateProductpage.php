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
    <section id="create-product">
        <article>
            <form enctype="multipart/form-data" method="post" action="<?=url('create-product')?>">
                <div>
                    <label for="image">Vælg et billede</label>
                    <input type="file" name="image" id="image" accept="image/jpeg,image/png">
                </div>
                <div>
                    <label>
                        VareNummer
                    </label>
                    <input type="number" maxlength="8" name="product_number">
                    <label>
                        Navn på produktet
                    </label>
                    <input type="text" name="product_name">
                    <label>
                        Produkt Beskrivelse
                    </label>
                    <input class="description-box" type="text" name="description">
                    <label>
                        Pris per enhed
                    </label>
                    <input type="number" step=".01" name="price_per_unit">

                    <button type="submit">Opret Produkt</button>
                </div>
            </form>
        </article>
    </section>
</main>
<footer></footer>

<script src="/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
