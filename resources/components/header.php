

<header>
    <div id="logo">
        <img src="http://engrocerieswebshop.test/img/long.png" width="230px"> </img>
    </div>
    <?php if ($_SERVER["REQUEST_URI"] != "/login") { ?>
        <input type="text" name="search" id="search">    
    <?php } ?>
    <!-- <nav>
    </nav> -->
    <?php if ($_SESSION['is_auth'] == true) { ?>


  <div class="navcontainer">
        <div class="nav" type="submit" name="dashboard" id="dashboard" value="dashboard">
            <a href="<?= url('dashboard')?>">
                <button class="dashboard">Dashboard</button>
            </a>
        </div>

        <div class="nav" type="submit" name="shop" id="shop" value="shop">
            <a href="<?= url('shop')?>">
                <button class="shop">shop </button>
            </a>
        </div>

        <div id="profilebutton"><?= $_SESSION['name'] ?>            
            <form action="<?= url('logout')?>" method="post">
                <input type="submit" value="Log ud"/>
            </form>
        </div>
    <?php } ?>
 </div>
</header>