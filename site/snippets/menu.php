<nav>
  <ul>
    <?php foreach($site->children() as $child): ?>
    <li class="list-inside list-disc">
      <a href="<?= $child->url() ?>"><?= $child->title() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>