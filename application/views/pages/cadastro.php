<?php echo validation_errors(); ?>

<?php echo form_open('cadastro/cadastro'); ?>

<?php echo isset($message) ? $message : ""; ?>

  <div>
      <label for="username">Nome do usuário:</label>
      <input type="text" id="username" name="username" required>
  </div>

  <div>
      <label for="pass">Crie sua senha (mínimo de 8 caracteres):</label>
      <input type="password" id="pass" name="password" minlength="8" required>
  </div>

    <input type="submit" name="submit" value="Finalizar Cadastro" />

</form>
