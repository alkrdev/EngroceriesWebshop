<header>
    <h1>Engroceries</h1>
    <input type="text" name="search" id="search">
    <!-- <nav>
    </nav> -->
    <?php if ($_SESSION['is_auth'] == true) { ?>


  <div class="navcontainer">

       
        <div class="nav" type="submit" name="dashboard" id="dashboard" value="dashboard">
            <form action="<?= url('dashboard')?>" method="post">
                <button class="dashboard"  type="submit" name="dashboard" id="dashboard" value="dashboard">Dashboard</button>
            </form>
        </div>

        <div class="nav" type="submit" name="shop" id="shop" value="shop">
            <form action="<?= url('shop')?>" method="post">
                <button class="shop"  type="submit" name="shop" id="shop" value="shop">shop </button>
            </form>
        </div>

        <div id="profilebutton"><?= $_SESSION['name'] ?>            
            <form action="<?= url('logout')?>" method="post">
                <input type="submit" value="Log ud"></input>
            </form>
        </div>
    <?php } ?>
 </div>
</header>