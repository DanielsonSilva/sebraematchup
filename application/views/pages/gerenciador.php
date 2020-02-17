<section class=caixa3>

   <div class="paginaprincipal">
         <div class="container">
            <div class="justify-center">
               <div class="row">
                  
                     <div class="col-sm-2">
                         <img id="imgPerfil" src="../../public/img/sebrae-logo-2.jpg" width="120px">
                     </div>
                     <div class="col-10">
                        <h2> <label for="Nome"> <?= $usuarioLogado->nome ?></label></h2>
                     </div>

                     <div class="col-sm-3 mt-2">
                     <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                           <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                           <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                           <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                           <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                         </div>
                           <div class="tab-content" id="v-pills-tabContent">
                           <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                           <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                           <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                           <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                           </div>

                     </div>

                     <div class="col-sm-6">

                              <!-- Card -->
                              <div class="card promoting-card">

                              <!-- Card content -->
                              <div class="card-body d-flex flex-row">

                              <!-- Avatar -->
                              <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">

                              <!-- Content -->
                              <div>

                                 <!-- Title -->
                                 <h4 class="card-title font-weight-bold mb-2">New spicy meals</h4>
                                 <!-- Subtitle -->
                                 <p class="card-text"><i class="far fa-clock pr-2"></i>07/24/2018</p>

                              </div>

                              </div>

                              <!-- Card image -->
                              <div class="view overlay">
                              <img class="card-img-top rounded-0" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/full page/2.jpg" alt="Card image cap">
                              <a href="#!">
                                 <div class="mask rgba-white-slight"></div>
                              </a>
                              </div>

                              <!-- Card content -->
                              <div class="card-body">

                              <div class="collapse-content">

                                 <!-- Text -->
                                 <p> Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Sapien in monti palavris qui num significa nadis i pareci latim. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo!</p>
                                 <p class="card-text collapse" id="collapseContent">Recently, we added several exotic new dishes to our restaurant menu. They come from countries such as Mexico, Argentina, and Spain. Come to us, have some delicious wine and enjoy our juicy meals from around the world.</p>
                                 <!-- Button -->
                                 <a class="btn btn-flat red-text p-1 my-1 mr-0 mml-1 collapsed" data-toggle="collapse" href="#collapseContent" aria-expanded="false" aria-controls="collapseContent"></a>
                                 <i class="fas fa-share-alt text-muted float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this post"></i>
                                 <i class="fas fa-heart text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>

                              </div>

                              </div>

                              </div>
                              <!-- Card -->

                     </div> 

                        <div class="col-sm-3"> <!-- Inicio Mapa -->
                       
   
                        <div id="map"></div>
                        <script>
                                 // Note: This example requires that you consent to location sharing when
                                 // prompted by your browser. If you see the error "The Geolocation service
                                 // failed.", it means you probably did not give permission for the browser to
                                 // locate you.
                                 var map, infoWindow;

                                 function initMap() {
                                 map = new google.maps.Map(document.getElementById('map'), {
                                    center: {lat: -34.397, lng: 150.644},
                                    zoom: 14
                                 });

                                 infoWindow = new google.maps.InfoWindow;

                                 // Try HTML5 geolocation.
                                 if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(function(position) {
                                       var pos = {
                                       lat: position.coords.latitude,
                                       lng: position.coords.longitude
                                       };

                                       infoWindow.setPosition(pos);
                                       infoWindow.setContent('Location found.');
                                       infoWindow.open(map);
                                       map.setCenter(pos);
                                    }, function() {
                                       handleLocationError(true, infoWindow, map.getCenter());
                                    });
                                 } else {
                                    // Browser doesn't support Geolocation
                                    handleLocationError(false, infoWindow, map.getCenter());
                                 }
                                 }

                                 function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                                 infoWindow.setPosition(pos);
                                 infoWindow.setContent(browserHasGeolocation ?
                                                         'Error: The Geolocation service failed.' :
                                                         'Error: Your browser doesn\'t support geolocation.');
                                 infoWindow.open(map);
                                 }
                              </script>
                              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAdcVFMm8hiDaGvEuj3959lQROSkF0yEs&callback=initMap"
                              async defer>
                         </script>
                      </div><!--Fim do Mapa-->

                        <div class="col-sm-3">
                        </div>


                      <div class="col-sm-6 mt-3">

                              <!-- Card -->
                              <div class="card promoting-card">

                              <!-- Card content -->
                              <div class="card-body d-flex flex-row">

                              <!-- Avatar -->
                              <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">

                              <!-- Content -->
                              <div>

                                 <!-- Title -->
                                 <h4 class="card-title font-weight-bold mb-2">New spicy meals</h4>
                                 <!-- Subtitle -->
                                 <p class="card-text"><i class="far fa-clock pr-2"></i>07/24/2018</p>

                              </div>

                              </div>

                              <!-- Card image -->
                              <div class="view overlay">
                              <img class="card-img-top rounded-0" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/full page/2.jpg" alt="Card image cap">
                              <a href="#!">
                                 <div class="mask rgba-white-slight"></div>
                              </a>
                              </div>

                              <!-- Card content -->
                              <div class="card-body">

                              <div class="collapse-content">

                                 <!-- Text -->
                                 <p> Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Sapien in monti palavris qui num significa nadis i pareci latim. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo!</p>
                                 <p class="card-text collapse" id="collapseContent">Recently, we added several exotic new dishes to our restaurant menu. They come from countries such as Mexico, Argentina, and Spain. Come to us, have some delicious wine and enjoy our juicy meals from around the world.</p>
                                 <!-- Button -->
                                 <a class="btn btn-flat red-text p-1 my-1 mr-0 mml-1 collapsed" data-toggle="collapse" href="#collapseContent" aria-expanded="false" aria-controls="collapseContent"></a>
                                 <i class="fas fa-share-alt text-muted float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this post"></i>
                                 <i class="fas fa-heart text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>

                              </div>

                              </div>

                              </div>
                              <!-- Card -->

                     </div>   
                     
                     <div class="col-sm-3">tesr
                        </div>

                        <div class="col-sm-3">
                        </div>

                 
                  </div>

               
            </div>


         </div>
   </div>



</section>



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
