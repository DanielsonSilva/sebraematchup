<?php echo validation_errors(); ?>

<?php echo form_open('login/entrar'); ?>

  <div>
      <label for="username">Login:</label>
      <input type="text" id="username" name="username">
  </div>

  <div>
      <label for="pass">Password (mínimo de 8 caracteres):</label>
      <input type="password" id="pass" name="password" minlength="8" required>
  </div>

    <input type="submit" name="submit" value="Entrar" />

</form>
