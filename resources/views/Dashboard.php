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
            
                <div class="AdminBox" type="submit" name="Adminpanel" id="Adminpanel" value="Adminpanel">
                    <a href="<?= url('Adminpanel')?>">
                        <button class="dashboard-icon">Brugeradministration</button>
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
            </div>
        </section>
    </main>
    <footer></footer>

<script src="/js/main.js"></script>
<script src="/js/vendor/modernizr-3.11.2.min.js"></script>
</body>

</html>
