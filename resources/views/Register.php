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
            <section id="register">            
                <article>
                    <h2>Registrering</h2>
                    <form action="<?= url('login')?>" method="post">
                        <input type="text" name="name" id="name" placeholder="Navn">

                        <input type="password" name="psw" id="pswregister" placeholder="Kode">
                        <span class="validate">Koden skal indeholde følgende: 
                        <br>- 8 tegn
                        <br>- mindst ét stort bogstav
                        <br>- mindst ét lille bogstav
                        <br>- mindst ét tal
                        <br>- mindst ét symbol</span>

                        <input type="password" name="psw" id="pswregisterrepeat" placeholder="Kode igen">
                        <span class="validate">Gentag koden præcist</span>

                        <input type="email" name="email" id="emailregister" placeholder="Email">
                        <span class="validate">Venligst indtast en korrekt email</span>

                        <input type="text" name="cvr" id="cvrregister" placeholder="CVR Nummer">
                        <span class="validate">CVR Nummeret skal være 8 cifre</span>

                        <button type="submit" name="login-submit" id="login-submit" value="Login">Indsend ansøgning</button>
                    </form>
                </article>
                
                <aside>
                    <h3>Jordens bedste råvarer leveret direkte til døren</h3>
                    <p>Engroceries tilbyder sæsonens bedste råvarer til storkøkkener, kantiner og restauranter - leveret direkte til
                        kundens dør</p>
                    <p>Grøntsagerne dyrker vi i samarbejde med passionerede økologiske avlere herhjemme og i udlandet.</p>
                </aside>
            </section>
        </main>
        <footer></footer>

        <script src="/js/vendor/modernizr-3.11.2.min.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
