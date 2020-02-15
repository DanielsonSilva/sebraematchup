<?php echo validation_errors(); ?>

<?php echo form_open('login/entrar'); ?>

<?php echo isset($message) ? $message : ""; ?>

  <div>
      <label for="username">Usuário:</label>
      <input type="text" id="username" name="username" required>
  </div>

  <div>
      <label for="pass">Senha (mínimo de 8 caracteres):</label>
      <input type="password" id="pass" name="password" minlength="8" required>
  </div>

    <input type="submit" name="submit" value="Entrar" />

</form>
