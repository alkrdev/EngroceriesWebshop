
<!doctype html>
<html class="no-js" lang="da-DK">

<head>
  <meta charset="utf-8">
  <title>Engroceries Webshop</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="<?=asset('site.webmanifest')?>">
  <link rel="apple-touch-icon" href="<?=asset('icon.png')?>">
  <!-- Place favicon.ico in the root directory -->

  <!-- JQuery CDN -->
  <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>

  <link type="text/css" rel="stylesheet" href="<?=asset('css/normalize.css')?>">
  <link type="text/css" rel="stylesheet" href="<?=asset('css/main.css')?>">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
<header>
  <h1>Engroceries</h1>
  <nav>
    <a href="#register.html">Registrer</a>
    <a href="#login.html">Log Ind</a>
  </nav>
  <input type="text" name="search" id="search">
</header>
<main>
  <h1>Velkommen til Engroceries A/S</h1>
  <p>Vi kan tilbyde vores kunder de mest populære produkter på markedet, til de skarpeste priser.</p>
  <section>
    <article>
      <h2>Kunde Login</h2>
      <form>
        <input type="text" name="email" id="email" placeholder="Email">
        <span id="emailvalidate" class="hidden">Please enter a valid Email address</span>

        <input type="password" name="psw" id="psw" placeholder="Kode">

        <button type="submit">Log Ind</button>
      </form>
    </article>
    <aside>
      <h3>Jordens bedste råvarer leveret direkte til døren</h3>
      <p>Engroceries tilbyder sæsonens bedste råvarer til storkøkkener, kantiner og restauranter - leveret direkte til
        kundens dør</p>
      <p>Grøntsagerne dyrker vi i samarbejde med passionerede økologiske avlere herhjemme og i udlandet.</p>
      <button>Bliv Kunde</button>
    </aside>
  </section>
</main>
<footer></footer>

<script src="<?= asset('js/vendor/modernizr-3.11.2.min.js') ?>"></script>
<script src="<?= asset('js/main.js') ?>"></script>
</body>

</html>
