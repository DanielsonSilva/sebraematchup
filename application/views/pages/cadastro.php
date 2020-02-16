<?php echo validation_errors(); ?>

<?php echo form_open('cadastro/cadastro'); ?>

<?php echo isset($message) ? $message : ""; ?>


<section class="caixa2">



<div class="formularioRB">
  
      <div class="col-xs-8"><!--inicio col-12-->

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

     <?php

    
     echo form_open("usuario/novo");
   
     ?>
   
      <div class="form-group">
          <?php
              echo form_label('Nome','formGrupNome');
              echo form_input(array(
                                    'name'=>'nome',
                                    'id'=>'formGroupNome',
                                    'class'=>'form-control',
                                    'placeholder'=>'Nome',
              ));
          ?>
      </div>
      



      <div class="form-group">
          <?php
            echo form_label('Endereço de email','exampleInputEmail1');
            echo form_input(array(
                                  'name'=>'email',
                                  'type'=>'email',
                                  'class'=>'form-control',
                                  'id'=> 'exampleInputEmail1',
                                  'aria-describedby'=>'emailHelp',
                                  'placeholder'=>'Seu email',
            ));
          ?>
            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
      
       </div>
  
      <div class="form-group">
           <?php
            echo form_label ('Senha','exampleInputPassword1');
            echo form_input (array(
                                    'name'=>'senha',
                                    'type'=>'password',
                                    'class'=>'form-control',
                                    'id'=>'exampleInputPassword1',
                                    'placeholder'=>'Senha',
            ));
          ?>
      </div>

      <div class="form-group">
        <?php
          echo form_label('Confirma Senha','exampleInputPassword2');
          echo form_input(array(
                            'name'=>'confirmaSenha',
                            'type'=>'password',
                            'class'=>'form-control',
                            'id'=>'exampleInputPassword2',
                            'placeholder'=>'Confirma Senha',
          ));
        ?>
       </div>

       <div class="form-row">
          <div class="form-group col-md-6">
            <?php
              echo form_label('Celular','inputCel');
              echo form_input(array(
                                    'name'=>'cel',
                                    'type'=>'tel',
                                    'class'=>'form-control',
                                    'id'=>'inputCel',
                                    'placeholder'=>'celular',
              ));
            ?>
          </div>
          <div class="form-group col-md-6">
            <?php
              echo form_label('Outro Contato','inputOutroContato');
              echo form_input(array(
                                    'name'=>'fone',
                                    'type'=>'tel',
                                    'class'=>'form-control',
                                    'id'=>'inputOutroContato',
                                    'placeholder'=>'Contato',
              ));
            ?>
            
          </div>
        </div>

        <div class="form-row">
           <div class="form-group col-md-4">
              <?php
                echo form_label('CPF', 'inputCPF');
                echo form_input(array(
                                      'name'=>'cpf',
                                      'type'=>'text',
                                      'pattern'=>'^\d{11}$',
                                      'type'=>'cpf',
                                      'class'=>'form-control',
                                      'id'=>'inputCPF',
                                      'placeholder'=>'123.456.789-22',
                ));
              ?>
           </div>

           <div class="form-group col-md-4">
              <?php
                echo form_label('RG','inputRG');
                echo form_input(array(
                                      'name'=>'rg',
                                      'type'=>'text',
                                      'class'=>'form-control',
                                      'id'=>'inputRG',
                                      'placeholder'=>'RG'
                ));
              ?>
            </div>
            
            <div class="form-group col-md-2">
                <?php
                    echo form_label('Orgao','inputCel');
                    echo form_input(array(
                                          'name'=>'orgaoRG',
                                          'type'=>'text',
                                          'class'=>'form-control',
                                          'id'=>'inputorgaoRG',
                                          'placeholder'=>'',
                    ));
                ?>
              </div>

          <div class="form-group col-md-2">
            <?php
              $optionsRG = array(
                                  'AC'=>'Acre',
                                  'AL'=>'Alagoas',
                                  'AP'=>'Amapá',
                                  'AM'=>'Amazonas',
                                  'BA'=>'Bahia',
                                  'CE'=>'Ceará',
                                  'DF'=>'Distrito Federal',
                                  'ES'=>'Espírito Santo',
                                  'GO'=>'Goiás',
                                  'MA'=>'Maranhão',
                                  'MT'=>'Mato Grosso',
                                  'MS'=>'Mato Grosso do Sul',
                                  'MG'=>'Minas Gerais',
                                  'PA'=>'Pará',
                                  'PB'=>'Paraíba',
                                  'PR'=>'Paraná',
                                  'PE'=>'Pernambuco',
                                  'PI'=>'Piauí',
                                  'RJ'=>'Rio de Janeiro',
                                  'RN'=>'Rio Grande do Norte',
                                  'RS'=>'Rio Grande do Sul',
                                  'RO'=>'Rondônia',
                                  'RR'=>'Roraima',
                                  'SC'=>'Santa Catarina',
                                  'SP'=>'São Paulo',
                                  'SE'=>'Sergipe',
                                  'TO'=>'Tocantins',
                                  'EX'=>'Estrangeiro',
              );
              echo form_label('Estado','inputEstadoRG','');
              $optionsRGinout = array('name'=>'estadoRG',
                                      'type'=>'text',
                                      'class'=>'form-control',
                                      'id'=>'inputEstadoRG',
                                      'placeholder',
                                    
                                    );
            echo form_dropdown('estadoRG', $optionsRG, $optionsRGinout); 
      
          ?>
         </div>
        </div>

        <div class="">
            <div class="form-group col-ml-6">
                <?php
                  echo form_label('Rua','inputAddress');
                  echo form_input(array(
                                        'name'=>'rua',
                                        'type'=>'text',
                                        'class'=>'form-control',
                                        'id'=>'inputAddress',
                                        'placeholder'=>'Rua, Av, log ...',
                      ));
                ?>
            </div>

            <div class="row">
              <div class="form-group col-3">
                <?php
                    echo form_label('numero', 'inputNumero');
                    echo form_input(array(
                                          'name'=>'numero',
                                          'type'=>'text',
                                          'class'=>'form-control',
                                          'id'=>'inputNumero',
                                          'placeholder'=>'numero',
                    ));
                    ?>
              </div>
          
              <div class="form-group col-5">
                  <?php
                    echo form_label('Complemento', 'inputcompremento');
                    echo form_input(array(
                                          'name'=>'compremento',
                                          'type'=>'text',
                                          'class'=>'form-control',
                                          'id'=>'inputCompremento',
                                          'placeholder'=>'Apartamento, hotel, casa, etc.',
                    ));
                    ?>
              </div>
              <div class="form-group col-4">
                  <?php
                    echo form_label('Bairro','inputBairro');
                    echo form_input(array(
                                          'name'=>'bairro',
                                          'type'=>'text',
                                          'class'=>'form-control',
                                          'id'=>'inputBairro',
                                          'placeholder'=>'Bairro',
                    ));
                    ?>
                </div>
            </div>
            </div>
           

            <div class="row">

               <div class="form-group col-md-8">
                <?php
                  echo form_label('Cidade','inputCity');
                  echo form_input(array(
                                        'name'=>'cidade',
                                        'type'=>'text',
                                        'class'=>'form-control',
                                        'id'=>'"inputCity',
                  ));
                  ?>
               </div>

            <div class="form-group col-md-2">
              <?php
                $optionsEstado = array(
                                    'AC'=>'Acre',
                                    'AL'=>'Alagoas',
                                    'AP'=>'Amapá',
                                    'AM'=>'Amazonas',
                                    'BA'=>'Bahia',
                                    'CE'=>'Ceará',
                                    'DF'=>'Distrito Federal',
                                    'ES'=>'Espírito Santo',
                                    'GO'=>'Goiás',
                                    'MA'=>'Maranhão',
                                    'MT'=>'Mato Grosso',
                                    'MS'=>'Mato Grosso do Sul',
                                    'MG'=>'Minas Gerais',
                                    'PA'=>'Pará',
                                    'PB'=>'Paraíba',
                                    'PR'=>'Paraná',
                                    'PE'=>'Pernambuco',
                                    'PI'=>'Piauí',
                                    'RJ'=>'Rio de Janeiro',
                                    'RN'=>'Rio Grande do Norte',
                                    'RS'=>'Rio Grande do Sul',
                                    'RO'=>'Rondônia',
                                    'RR'=>'Roraima',
                                    'SC'=>'Santa Catarina',
                                    'SP'=>'São Paulo',
                                    'SE'=>'Sergipe',
                                    'TO'=>'Tocantins',
                                    'EX'=>'Estrangeiro',
                );
                echo form_label('Estado','inputEstado','');
                $optionsEstadoinout = array('name'=>'estado',
                                        'type'=>'text',
                                        'class'=>'form-control',
                                        'id'=>'inputEstado',
                                        'placeholder',
                                      
                                      );
              echo form_dropdown('estado', $optionsEstado, $optionsEstadoinout); 
        
              ?>
            </div>

           <div class="form-group col-md-2">
            <?php
              echo form_label('CEP','inputCEP');
              echo form_input(array(
                                    'name' => 'cep',
                                    'type'=>'text',
                                    'class'=>'form-control',
                                    'id'=>'inputCEP',
              ));
              ?>
          </div>

        </div>




       </div>
       

      <?php
       echo form_button(array(
                              'type'=>'submit',
                              'class'=>'btn btn-primary mb-5',
                              'content'=>'Enviar',
       ));
       ?>
 
<?php
form_close();
?>



  
  
</section>
    