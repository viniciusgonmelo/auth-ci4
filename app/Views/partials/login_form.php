<section class="form-container pure-u-1 pure-u-sm-1-2 pure-u-md-14 pure-u-lg-1-5">
  <form class='pure-form pure-form-stacked' action="/login" method="post" novalidate>
    <?= csrf_field() ?>
    <fieldset>
      <legend>
        Login
      </legend>
      <label for='username'>Nome de usuário/email*</label>
      <?php if (isset($_SESSION['validation_errors']['username'])) : ?>
        <input id='username' type="text" placeholder="Insira seu nome de usuário" value="<?= old('username') ?>" name="username" id="username" required='' />
        <span class="pure-form-message error">
          <?= $_SESSION['validation_errors']['username'] ?>
        </span>
      <?php else : ?>
        <input id='username' type="text" placeholder="Insira seu nome de usuário" name="username" id="username" />
      <?php endif ?>
      <label for='password'>Senha*</label>
      <?php if (isset($_SESSION['validation_errors']['password'])) : ?>
        <input type="password" placeholder="Insira sua senha" value="<?= old('password') ?>" name="password" id="password" required='' />
        <span class="pure-form-message error">
          <?= $_SESSION['validation_errors']['password'] ?>
        </span>
      <?php else : ?>
        <input type="password" placeholder="Insira sua senha" name="password" id="password" />
      <?php endif ?>
      <input type="submit" class="pure-button pure-button-primary" value="Login" />
      <span class="pure-form-message form-footer-message">Não possui cadastro? <a href="<?= base_url('/cadastro') ?>">Cadastre-se.</a></span>
    </fieldset>
  </form>
</section>
