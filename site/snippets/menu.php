<nav>
  <ul>
    <?php foreach($site->children() as $child): ?>
    <li>
      <a hx-boost="true" href="<?= $child->url() ?>"><?= $child->title() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>