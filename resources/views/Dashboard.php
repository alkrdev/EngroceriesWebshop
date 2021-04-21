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
            <div class="dashboard-container">
            
                <div class="AdminBox" type="submit" name="Applications" id="Applications" value="Applications">
                    <a href="<?= url('show-applications')?>">
                        <button class="dashboard-icon">Ansøgninger</button>
                    </a>
                </div>

                <div class="AdminBox" type="submit" name="Storage" id="Storage" value="Storage">
                    <a href="<?= url('Storage')?>" >
                        <button class="dashboard-icon">Varelager</button>
                    </a>
                </div>

                <div class="AdminBox" type="submit" name="Orders" id="Orders" value="Orders">
                    <a href="<?= url('Orders')?>">
                        <button class="dashboard-icon">Ordre håndtering </button>
                    </a>
                </div>

                <div class="AdminBox" type="submit" name="create-product" id="create-product" value="create-product">
                    <a href="<?= url('show-create-product')?>">
                        <button class="dashboard-icon">Opret Produkt</button>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <footer></footer>

<script src="/js/main.js"></script>
<script src="/js/vendor/modernizr-3.11.2.min.js"></script>
</body>

</html>
