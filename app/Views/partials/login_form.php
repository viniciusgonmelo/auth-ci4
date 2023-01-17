    <section class="form-container">
      <form class='form' action="/login" method="post" novalidate>
        <?= csrf_field() ?>
        <h1>Faça login</h1>
        <section>
          <p>
            <label for='username'>Nome de usuário/email*</label>
            <?php if (isset($_SESSION['validation_errors']['username'])) : ?>
              <input class="input-error" type="text" placeholder="Insira seu nome de usuário" value="<?= old('username') ?>" name="username" id="username" />
          <div class="validation-error">
            <?= $_SESSION['validation_errors']['username'] ?>
          </div>
        <?php else : ?>
          <input type="text" placeholder="Insira seu nome de usuário" name="username" id="username" />
        <?php endif ?>
        </p>
        <p>
          <label for='password'>Senha*</label>
          <?php if (isset($_SESSION['validation_errors']['password'])) : ?>
            <input class="input-error" type="password" placeholder="Insira sua senha" value="<?= old('password') ?>" name="password" id="password" />
        <div class="validation-error">
          <?= $_SESSION['validation_errors']['password'] ?>
        </div>
      <?php else : ?>
        <input type="password" placeholder="Insira sua senha" name="password" id="password" />
      <?php endif ?>
      </p>
        </section>

        <section>
          <p>
            <input type="submit" id="submit" value="Login" />
          </p>
          <p>
            <span>Não possui cadastro? <a href="<?= base_url('/cadastro') ?>">Cadastre-se.</a></span>
          </p>
        </section>
      </form>
    </section>
