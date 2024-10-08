<!DOCTYPE html>
<html lang="es-mx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="icon" href="favicon.ico">
  <link rel="manifest" href="/site.webmanifest">
  <title>Desacortador de URLs</title>
  <link rel="stylesheet" href="./css/light.min.css">
  <meta name="description" content="Esta página te permite convertir URLs cortas y desconocidas a direcciones web largas y completas.">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4564255988687880" crossorigin="anonymous"></script>
</head>

<body>

  <img src="desacortador.webp" alt="Desacortador Logo" width="50" height="51">

  <h1>Desacortador de URLs</h1>

  <form action="index.php" method="post">
    <input type="text" name="url" placeholder="URL a desacortar">
    <input type="submit" value="Desacortar">
  </form>

  <?php

  // Recibimos la URL a desacortar
  $url = $_POST['url'];
  echo '<h2>Resultado</h2>';
  echo '<pre>';
  echo unshorten_url($url);
  echo '</pre>';

  echo '<h2>Resultado del header</h2>';
  echo '<pre>';
  echo return_headers($url);
  echo '</pre>';

  /**
   * @link http://jonathonhill.net/2012-05-18/unshorten-urls-with-php-and-curl/
   */
  function unshorten_url($url)
  {
    $ch = curl_init($url);
    curl_setopt_array($ch, array(
      CURLOPT_FOLLOWLOCATION => TRUE,  // the magic sauce
      CURLOPT_RETURNTRANSFER => TRUE,
      CURLOPT_SSL_VERIFYHOST => FALSE, // suppress certain SSL errors
      CURLOPT_SSL_VERIFYPEER => FALSE,
      CURLOPT_NOBODY => TRUE
    ));
    curl_exec($ch);
    $url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
    curl_close($ch);
    return $url;
  }

  function return_headers($url)
  {
    $ch = curl_init($url);
    curl_setopt_array($ch, array(
      CURLOPT_RETURNTRANSFER => TRUE,
      CURLOPT_SSL_VERIFYHOST => FALSE, // suppress certain SSL errors
      CURLOPT_SSL_VERIFYPEER => FALSE,
      CURLOPT_NOBODY => TRUE
    ));
    curl_exec($ch);
    $headers = curl_getinfo($ch);
    curl_close($ch);

    return $headers["redirect_url"];
  }

  ?>
  <hr>
  <p>Esta página te permite convertir URLs cortas y desconocidas a direcciones web largas y completas.</p>
  <p>Esto te ayudará a saber a dónde dirigen las URLs cortas, evitar que caigas en engaños y aumentar tu seguridad en línea.</b>
  </p>
  <p>Si usas Linux también puedes intentarlo desde la terminal.</p>
  <code>
    curl --head "url_acortado" | grep location
  </code>
  <!-- Footer -->
  <footer class="container">
    <small>
      <p>Gracias a <a href="https://compwright.com/2012-05-18/unshorten-urls-with-php-and-curl/">Jonathon Hill</a> por su código para desacortar URLs con PHP y cURL.</p>
      <p>Visita <a href="https://linuxmanr4.com">linuxmanr4.com</a>, haz ejercicio, come frutas y verduras.</p>
      <p>Built with <a href="https://watercss.kognise.dev/">Water</a></p>
    </small>
  </footer>

</body>
<!-- SCRIPTS -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GB0GBEDRBH"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-GB0GBEDRBH');
</script>
</html>