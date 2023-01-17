<?php
echo $this->extend('layouts/default');
echo $this->section('content');
helper('get_greeting');
$greeting = get_greeting();
?>

<header>
  <nav>
    <span><?= ucfirst($greeting) ?>, <?= esc($user['name']) ?></span>
    <ul>
      <li>
        <a href="<?= base_url('/logout') ?>">
          Sair
        </a>
      </li>
    </ul>
  </nav>
</header>

<?= $this->endSection() ?>
