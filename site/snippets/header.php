<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="htmx-config" content='{"historyCacheSize": 0, "refreshOnHistoryMiss": false}'>

  <title>Kirby Vite Multi-Page</title>

  <!-- Include the shared js/css ... -->
  <?= vite()->js('index.js', ['defer' => true]) ?>
  <?= vite()->css('index.js') ?>

</head>