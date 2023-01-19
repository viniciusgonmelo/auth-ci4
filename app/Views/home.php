<?php
echo $this->extend('layouts/default');
echo $this->section('content');
helper('get_greeting');
$greeting = get_greeting();
?>

<header>
  <nav class="pure-menu pure-menu-horizontal">
    <span class="pure-menu-heading"><?= ucfirst($greeting) ?>, <?= esc($user['name']) ?></span>
    <ul class="pure-menu-list">
      <li class="pure-menu-item">
        <a class="pure-menu-link" href="<?= base_url('/logout') ?>">
          Sair
        </a>
      </li>
    </ul>
  </nav>
</header>

<?= $this->endSection() ?>
