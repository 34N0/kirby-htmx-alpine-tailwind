<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- htmx cache -->
  <meta name="htmx-config" content='{"historyCacheSize": 0, "refreshOnHistoryMiss": false}'>
  
  <!-- security headers according to owasp recommendations -->
  <?php 
    header('X-Frame-Options: DENY');
    header('X-XSS-Protection: 0');
    header('X-Content-Type-Options: nosniff');
    header('Referrer-Policy: strict-origin-when-cross-origin');
    header('Content-Type: text/html; charset=UTF-8');
    /*
    header('Strict-Transport-Security: max-age=63072000; includeSubDomains; preload');
    header('HTTP Cross-Origin-Opener-Policy: same-origin');
    header('Cross-Origin-Embedder-Policy: require-corp');
    header('Cross-Origin-Resource-Policy: same-site');
    header('Permissions-Policy: geolocation=(), camera=(), microphone=()');
    header('Server: webserver');

    // csp alpine currently requires unsafe-eval workaround
    header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-eval'; connect-src 'self'; img-src 'self'; style-src 'self'; frame-ancestors 'self'; form-action 'self';")
  */
    ?>
  
  <noscript>
    <style>
        .no-script {display: none !important;}
    </style>
  </noscript>

  <title>Html Driven ❤️</title>
</head>
<body :class="{ 'dark': $store.darkMode.on }" x-data>