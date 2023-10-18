<nav>
  <ul>
    <?php foreach($site->children() as $child): ?>
    <li class="list-inside list-disc">
      <a hx-boost="true" href="<?= $child->url() ?>">
        <?= $child->title() ?>
      </a>
    </li>
    <?php endforeach ?>
    <li class="
      list-inside
      text-2xl
      cursor-pointer
      select-none
      no-script" 
      :class="{ 'inline-block': true }"
      @click="$store.darkMode.toggle()"
      >Darkmode</li>
  </ul>
</nav>