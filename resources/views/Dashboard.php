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
            <form action="<?= url('Adminpanel')?>" method="post">
                <button class="dashboard-icon"  type="submit" name="Adminpanel" id="Adminpanel" value="Adminpanel">Brugeradministration</button>
            </form>
        </div>

        <div class="AdminBox" type="submit" name="Storage" id="Storage" value="Storage">
            <form action="<?= url('Storage')?>" method="post">
                <button class="dashboard-icon"  type="submit" name="Storage" id="Storage" value="Storage">Varelager</button>
            </form>
        </div>

        <div class="AdminBox" type="submit" name="Orders" id="Orders" value="Orders">
            <form action="<?= url('Orders')?>" method="post">
                <button class="dashboard-icon"  type="submit" name="Orders" id="Orders" value="Orders">Ordre håndtering </button>
            </form>
        </div>
    
    </div>



    </section>
</main>
<footer></footer>

<script src="<?= asset('js/vendor/modernizr-3.11.2.min.js') ?>"></script>
<script src="<?= asset('js/main.js') ?>"></script>
</body>

</html>
