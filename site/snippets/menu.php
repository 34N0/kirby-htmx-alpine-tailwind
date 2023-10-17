<nav>
  <ul>
    <?php foreach($site->children() as $child): ?>
    <li class="list-inside list-disc">
      <a  hx-get="<?= $child->url() ?>"
          hx-target="body"
          hx-swap="innerHTML">
          <?= $child->title() ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>