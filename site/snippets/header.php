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
    header('Strict-Transport-Security: max-age=63072000; includeSubDomains; preload');
    header('Cross-Origin-Embedder-Policy: require-corp');
    header('Cross-Origin-Resource-Policy: same-site');
    header('Cross-Origin-Opener-Policy: same-origin');
    header('Permissions-Policy: geolocation=(), camera=(), microphone=()');

    // csp alpine currently requires unsafe-eval workaround
    // also this does currently not work in the dev script so disable for dev
    header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-eval'; connect-src 'self'; img-src 'self'; frame-ancestors 'self'; form-action 'self'; style-src 'self';")
    ?>
  
  <title>Html Driven ❤️</title>
  <noscript>
    <!--<style>
        .no-script {display: none !important;}
    </style>-->
  </noscript>
</head>
<body :class="{ 'dark': $store.darkMode.on }" x-data>