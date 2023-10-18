<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="htmx-config" content='{"historyCacheSize": 0, "refreshOnHistoryMiss": false}'>
  <noscript>
    <style>
        .no-script {display: none !important;}
    </style>
  </noscript>
  <title>Kirby Vite Multi-Page</title>
</head>
<body :class="{ 'dark': $store.darkMode.on }" x-data>