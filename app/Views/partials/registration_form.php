    <section class="form-container">
      <form action="/cadastro" method="post" novalidate>
        <h1>Cadastre-se</h1>
        <section>
          <p>
            <?= csrf_field() ?>
            <label for='name'>Nome*</label>
            <?php if (isset($_SESSION['validation_errors']['name'])) : ?>
              <input class="input-error" type='text' id='name' name='name' value="<?= old('name') ?>" placeholder='Insira seu nome' />
          <div class="validation-error">
            <?= $_SESSION['validation_errors']['name'] ?>
          </div>
        <?php else : ?>
          <input type='text' id='name' name='name' value="<?= old('name') ?>" placeholder='Seu nome' />
        <?php endif ?>
        </p>
        <p>
          <label for='email'>Email*</label>
          <?php if (isset($_SESSION['validation_errors']['email'])) : ?>
            <input type='email' class='input-error' id='email' name='email' value="<?= old('email') ?>" placeholder='Insira seu email' />
        <div class="validation-error">
          <?= $_SESSION['validation_errors']['email'] ?>
        </div>
      <?php else : ?>
        <input type='email' id='email' name='email' value="<?= old('email') ?>" placeholder='Insira seu email' />
      <?php endif ?>
      </p>
      <p>
        <label for='password'>Senha*</label>
        <?php if (isset($_SESSION['validation_errors']['password'])) : ?>
          <input type='password' class='input-error' id='password' name='password' value="<?= old('password') ?>" placeholder='Insira sua senha' />
      <div class="validation-error">
        <?= $_SESSION['validation_errors']['password'] ?>
      </div>
    <?php else : ?>
      <input type='password' id='password' name='password' value="<?= old('password') ?>" placeholder='Insira sua senha' />
    <?php endif ?>
    </p>
    <p>
      <label for='password_conf'>Confirmação de senha*</label>
      <?php if (isset($_SESSION['validation_errors']['password_conf'])) : ?>
        <input type='password' class='input-error' id='password_conf' name='password_conf' value="<?= old('password_conf') ?>" placeholder='Insira sua senha' />
    <div class="validation-error">
      <?= $_SESSION['validation_errors']['password_conf'] ?>
    </div>
    <?php else : ?>
      <input type='password' id='password_conf' name='password_conf' value="<?= old('password_conf') ?>" placeholder='Insira sua senha' />
    <?php endif ?>
    </p>
        </section>
        <section>
          <p>
            <input type="submit" id="submit" value="Enviar" />
          </p>
          <p>
            <span>Já possui cadastro? <a href="<?= base_url('login') ?>">Faça login.</a></span>
          </p>
        </section>
      </form>
    </section>
