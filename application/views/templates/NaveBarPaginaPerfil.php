<body>
   <header><!-- inicio Cabeçario-->

      <nav id="barranav" class="navbar navbar-expand-sm navbar-light" >

         <div class="container" >
            <div id="img-logo">
               <img src="../../public/img/sebrae-logo-2.jpg" width="70px">
            </div>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
               <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav-principal" >
               <div id="caixa-nave">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="http://localhost/index.php/gerenciador/index">Perfil</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="http://localhost/index.php/about">Dicas Sebrae</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="http://localhost/index.php/contato">Fale com o especialista sebrae</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="http://localhost/index.php/contato">Preciso de ajuda</a>
                     </li>
                     <li class="nav-item">
                     <button class="btn-warning">
                        <?= anchor('Logout', 'Logout', array('class' => 'nav-link')); ?>
                     </button>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
   </header>
   <div>
      <h1 id="tituloPg"><?php echo $title; ?></h1>
   </div>
</body>
