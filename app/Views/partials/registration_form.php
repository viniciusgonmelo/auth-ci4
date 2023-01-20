  <section class="container form pure-u-1 pure-u-sm-1-2 pure-u-md-1-4 pure-u-lg-1-5">
    <form class="pure-form pure-form-stacked" action="/cadastro" method="post" novalidate>
      <?= csrf_field() ?>
      <fieldset>
        <legend>Cadastre-se</legend>
        <label for='name'>Nome*</label>
        <?php if (isset($_SESSION['validation_errors']['name'])) : ?>
          <input type='text' id='name' name='name' value="<?= old('name') ?>" placeholder='Insira seu nome' required='' />
          <span class="pure-form-message error">
            <?= $_SESSION['validation_errors']['name'] ?>
          </span>
        <?php else : ?>
          <input type='text' id='name' name='name' value="<?= old('name') ?>" placeholder='Seu nome' />
        <?php endif ?>
        <label for='email'>Email*</label>
        <?php if (isset($_SESSION['validation_errors']['email'])) : ?>
          <input type='text' id='email' name='email' value="<?= old('email') ?>" placeholder='Insira seu email' required='' />
          <span class="pure-form-message error">
            <?= $_SESSION['validation_errors']['email'] ?>
          </span>
        <?php else : ?>
          <input type='text' id='email' name='email' value="<?= old('email') ?>" placeholder='Insira seu email' />
        <?php endif ?>
        <label for='password'>Senha*</label>
        <?php if (isset($_SESSION['validation_errors']['password'])) : ?>
          <input type='password' id='password' name='password' value="<?= old('password') ?>" placeholder='Insira sua senha' required='' />
          <span class="pure-form-message error">
            <?= $_SESSION['validation_errors']['password'] ?>
          </span>
        <?php else : ?>
          <input type='password' id='password' name='password' value="<?= old('password') ?>" placeholder='Insira sua senha' />
        <?php endif ?>
        <label for='password_conf'>Confirmação de senha*</label>
        <?php if (isset($_SESSION['validation_errors']['password_conf'])) : ?>
          <input type='password' class='input-error' id='password_conf' name='password_conf' value="<?= old('password_conf') ?>" placeholder='Insira sua senha' required='' />
          <span class="pure-form-message error">
            <?= $_SESSION['validation_errors']['password_conf'] ?>
          </span>
        <?php else : ?>
          <input type='password' id='password_conf' name='password_conf' value="<?= old('password_conf') ?>" placeholder='Insira sua senha' />
        <?php endif ?>
        <input class="pure-button pure-button-primary" type="submit" id="submit" value="Enviar" />
        <span class="pure-form-message form-footer-message">Já possui cadastro? <a href="<?= base_url('login') ?>">Faça login.</a></p>
    </form>
  </section>
