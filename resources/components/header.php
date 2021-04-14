<header>
    <h1>Engroceries</h1>
    <input type="text" name="search" id="search">
    <!-- <nav>
    </nav> -->
    <?php if ($_SESSION['is_auth'] == true) { ?>
        <div><?= $_SESSION['name'] ?>
            <ul>
                <li>Log ud</li>
            </ul>
        </div>
    <?php } ?>
</header>