<?php
echo $this->extend('layouts/default');
echo $this->section('content');
?>
<main role="main">
  <?php
  include  PARTIALS_PATH . 'registration_form.php';
  ?>
</main>
<?= $this->endSection() ?>
