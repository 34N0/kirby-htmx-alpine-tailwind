</body>
<footer>
  <!-- Include the shared js/css ... -->
  <?= vite()->js('index.js', ['defer' => true]) ?>
  <?= vite()->css('index.css') ?>
  
  <!-- ... and the template's js/css (if it exists) -->
  <?= vite()->js("templates/{{ page.template }}.js", ['defer' => true], try: true) ?>
  <?= vite()->css("templates/{{ page.template }}.css", try: true) ?>
</footer>
</html>