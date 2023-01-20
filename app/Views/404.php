<?php
echo $this->extend('layouts/default');
echo $this->section('content');
?>

<main>
  <section class='container not-found pure-u-1 pure-u-sm-2-3 pure-u-lg-1-2'>
    <h1>404 - Página não encontrada</h1>
    <p>Verifique se o endereço <strong>"<?= $url ?>"</strong> está correto e tente novamente.</p>
  </section>
</main>

<?= $this->endSection() ?>
