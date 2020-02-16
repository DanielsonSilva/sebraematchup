<section class="caixa1">
   <div class="container ">
      <div class="row">
         <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5" style="background-color: #58ACFA">
               <div class="card-body">
                  <h5 class="card-title text-center">Perfil</h5>
                  <div class="form-label-group">
                     <label for="Nome">Nome: <?= $usuarioLogado->nome ?></label><br />
                     <label for="Email">E-mail: <?= $usuarioLogado->email ?></label><br />
                     <label for="Celular">Celular: <?= $usuarioLogado->celular ?></label><br />
                     <label for="OutroContato">Outro Contato: <?= $usuarioLogado->outrocontato ?></label><br />
                     <label for="CPF">CPF: <?= $usuarioLogado->cpf ?></label><br />
                     <label for="RG">RG: <?= $usuarioLogado->rg ?></label><br />
                     <label for="Orgao">Órgão: <?= $usuarioLogado->orgao ?></label><br />
                     <label for="EstadoOrgao">Estado do Órgão: <?= $usuarioLogado->orgao_estado ?></label><br />
                     <label for="Endereco">Endereço: <?= $usuarioLogado->endereco ?></label><br />
                     <label for="NResidencia">Número: <?= $usuarioLogado->residencia ?></label><br />
                     <label for="Complemento">Complemento: <?= $usuarioLogado->enderecocomplemento ?></label><br />
                     <label for="Bairro">Bairro: <?= $usuarioLogado->enderecobairro ?></label><br />
                     <label for="Cidade">Cidade: <?= $usuarioLogado->cidade ?></label><br />
                     <label for="Estado">Estado: <?= $usuarioLogado->estado ?></label><br />
                     <label for="CEP">CEP: <?= $usuarioLogado->cep ?></label><br />
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
