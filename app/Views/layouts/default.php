<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?= $page_title ?></title>
  <link rel="stylesheet" href="/assets/styles.css" type="text/css" media="all">

<body>
  <?php if (isset($_SESSION['messages'])) : ?>
    <div id="messages" class='messages-container'>
      <?php foreach ($_SESSION['messages'] as $message) : ?>
        <?php if ($message['type'] == 'error') : ?>
          <div class='message failure'>
            <span><?= $message['content'] ?></span>
          </div>
        <?php elseif ($message['type'] = 'success') : ?>
          <div class='message success'>
            <span><?= $message['content'] ?></span>
          </div>
        <?php endif ?>
      <?php endforeach ?>
    </div>
  <?php endif ?>
  <?= $this->renderSection('content') ?>
  <script src='/assets/main.js'></script>
</body>

</html>
