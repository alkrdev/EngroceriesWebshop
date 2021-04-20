<?php
/* @var array $params */
$error_message = $params['error_message'];

?>

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
            <form action="<?= url('register') ?>" method="post">
                <input type="text" name="name" id="name" placeholder="Navn" required>

                <input type="password" name="psw" id="pswregister" placeholder="Kode" required>
                <span><?php if (isset($error_message)) echo $error_message ?></span>
                <span class="validate">Koden skal indeholde følgende:
                        <br>- 8 tegn
                        <br>- mindst ét stort bogstav
                        <br>- mindst ét lille bogstav
                        <br>- mindst ét tal
                        <br>- mindst ét symbol</span>

                <input type="password" name="psw-repeat" id="pswregisterrepeat" placeholder="Kode igen" required>
                <span class="validate">Gentag koden præcist</span>

                <input type="number" maxlength="8" name="phone-number" id="phone-number" placeholder="Telefon" required>

                <input type="email" name="email" id="emailregister" placeholder="Email" required>
                <span class="validate">Venligst indtast en korrekt email</span>

                <input type="number" maxlength="4" name="zip-code" id="zip-code" placeholder="Post Nummer" required>

                <input type="text" name="address" id="address" placeholder="Addresse" required>

                <input type="text" name="cvr" id="cvrregister" placeholder="CVR Nummer" required>
                <span class="validate">CVR Nummeret skal være 8 cifre</span>

                <button type="submit" name="registration-submit" id="registration-submit" value="Register">Indsend Ansøgning</button>
            </form>
        </article>

        <aside>
            <h3>Jordens bedste råvarer leveret direkte til døren</h3>
            <p>Engroceries tilbyder sæsonens bedste råvarer til storkøkkener, kantiner og restauranter - leveret direkte
                til
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
