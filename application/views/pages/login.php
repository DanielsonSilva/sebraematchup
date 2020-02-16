


<?php echo validation_errors(); ?>

<?php echo form_open('login/entrar'); ?>

<?php echo isset($message) ? $message : ""; ?>




    
      <section class="caixa1">

         <div class="container ">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto" style="text-align: center;">
            <!--<img src="img/rbchapel.png" width="200px">-->
          </div>
    <div class="row">
       <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5" style="background-color: #58ACFA">
          <div class="card-body">
            <h5 class="card-title text-center">Entrar</h5>
            <form class="form-signin" action="../Controller/valida_login.php" method="post">
              <div class="form-label-group">
                <input type="email" id="username" name="username" class="form-control" step="any"  placeholder="Email address">
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="pass" name="password" minlength="8" step="any" class="form-control" placeholder="Password">
                <label for="pass">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <?php

                 if(isset($_GET['login']) && $_GET['login'] == 'erro'){
              ?>
                <h3 class="text-danger"> Senha ou usuario incorreto</h3>

              <?php
                 }if(isset($_GET['login']) && $_GET['login'] == 'erro2'){
              ?>
                 <h3 class="text-danger"> primeiro é preciso logar</h3>

                <?php
                }
                ?>

              <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit" name="submit" value="Entrar">Sign in</button>
              <button class="btn btn-lg btn-warning btn-block text-uppercase"  type="submit" name="cadastro" value="Cadastrar">Cadastro</button>
              <hr class="my-4">
              <a href="./cadastroRB.php" class="btn btn-lg btn-google btn-block text-uppercase btn-primary" type="button"><i class="mr-2"></i> Acesse pelo facebook</a>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase btn-danger" type="button"><i class=" mr-2"></i> Acesso google</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  

        
        

</section>

