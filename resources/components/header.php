<header>
    <h1>Engroceries</h1>
    <input type="text" name="search" id="search">
    <!-- <nav>
    </nav> -->
    <?php if ($_SESSION['is_auth'] == true) { ?>
        <div id="profilebutton"><?= $_SESSION['name'] ?>            
            <form action="<?= url('logout')?>" method="post">
                <input type="submit" value="Log ud"></input>
            </form>
        </div>
    <?php } ?>
</header>