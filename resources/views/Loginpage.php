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
            <h1>Velkommen til Engroceries A/S</h1>
            <p>Vi kan tilbyde vores kunder de mest populære produkter på markedet, til de skarpeste priser.</p>
            <section>
                <?php if ($_SESSION['is_auth'] != true) { ?>
                    <article>
                        <h2>Kunde Login</h2>
                        <span class="loginerror"><?php if (ISSET($_SESSION['error'])) { echo $_SESSION['error']; } ?></span>
                        <form action="<?= url('login')?>" method="post">
                            <input type="text" name="email" id="email" placeholder="Email">
                            <span id="emailvalidate" class="hidden">Please enter a valid Email address</span>

                            <input type="password" name="psw" id="psw" placeholder="Kode">

                            <button type="submit" name="login-submit" id="login-submit" value="Login">Log Ind</button>
                        </form>
                    </article>
                    
                    <aside>
                        <h3>Jordens bedste råvarer leveret direkte til døren</h3>
                        <p>Engroceries tilbyder sæsonens bedste råvarer til storkøkkener, kantiner og restauranter - leveret direkte til
                            kundens dør</p>
                        <p>Grøntsagerne dyrker vi i samarbejde med passionerede økologiske avlere herhjemme og i udlandet.</p>
                        <button>Bliv Kunde</button>
                    </aside>
                <?php } ?>
            </section>
        </main>
        <footer></footer>

        <script src="<?= asset('js/vendor/modernizr-3.11.2.min.js') ?>"></script>
        <script src="<?= asset('js/main.js') ?>"></script>
    </body>
</html>
