@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">¿Quiénes somos?</div>
                  <div class="card-body">
                    <div class="jumbotron">
                      <h1 class="display-3">MagicDreams</h1>
                      <p class="lead">El lugar donde la magia se vuelve realidad...</p>
                      <hr class="m-y-md">
                      <p>MD es un servidor basado en el mundo magico de Harry Potter (WizardingWorld of Harry Potter), donde podras vivir tu propia aventura, estudiar en Hogwarts, quedar seleccionado en una de las casas, tener tu propia varita, conseguir nuevos amigos, volar en la escoba más velóz del mercado y muchas cosas más...</p>
                      <p>¿Qué estás esperando para entrar?</p>
                      <p class="lead">
                        IP: Play.MgDreamsMC.com     Version: 1.9 - 1.12
                      </p>
                    </div>
                    <h1>Staff</h1>
                    <div class="container">
                      <div class="row">
                        <!-- Ministro -->
                        <div class="col-md-3">
                          <div class="card mb-4">
                            <img class="card-img-top" src="img/staff/Ministro.jpeg" alt="Ministro">
                            <h5 class="card-header bg-info">Ministro - Garraro</h5>
                            <div class="card-body">
                              <p class="card-text text-justify">Garraro Smith, en su juventud uno de los mejores jugadores de Quidditch de todos los tiempos, fue un Hatstall y quedo en Hufflepuff, actual Ministro</p>
                            </div>
                            <div class="card-footer">
                              <button type="button" name="button" class="btn btn-outline-primary stretched-link">Perfil</button>
                            </div>
                          </div>
                        </div>
                        <!-- SubMinistro -->
                        <div class="col-md-3">
                          <div class="card mb-4">
                            <img class=" card-img-top" width="250" src="img/staff/SubMinistro.jpeg" alt="Ministro">
                            <h5 class="card-header bg-info">SubMinistra - Kidraro</h5>
                            <div class="card-body">
                              <p class="card-text text-justify">Kidraro Velia Tonks. Ex-estudiante de la casa de Slytherin, graduada con honores en astronomía y cuidado de criaturas mágicas. Actual Subministra.</p>
                            </div>
                            <div class="card-footer">
                              <button type="button" name="button" class="btn btn-outline-primary">Perfil</button>
                            </div>
                          </div>
                        </div>
                        <!-- Director -->
                        <div class="col-md-3">
                          <div class="card mb-4">
                            <img class=" card-img-top" width="250" src="img/staff/Director.jpeg" alt="Ministro">
                            <h5 class="card-header" style="background-color: #e227da">Director - Tauron114</h5>
                            <div class="card-body">
                              <p class="card-text text-justify">Apasionado por la magia, una vez graduado de Hogwarts estudió magizoologia, herbología y transformaciones. Trabajo de magizoologo en el ministerio y actualmente es Director de Hogwarts</p>
                            </div>
                            <div class="card-footer">
                              <button type="button" name="button" class="btn btn-outline-primary">Perfil</button>
                            </div>
                          </div>
                        </div>
                        <!-- SubDirector -->
                        <div class="col-md-3">
                          <div class="card mb-4">
                            <img class=" card-img-top" width="250" src="img/staff/SubDirector.jpeg" alt="Ministro">
                            <h5 class="card-header" style="background-color: #e227da">SubDirectora - Civivid</h5>
                            <div class="card-body">
                              <p class="card-text text-justify">Alice Blackwell, mestiza amante de las pociones, la escritura y las artes oscuras. Actual sub directora</p>
                            </div>
                            <div class="card-footer">
                              <button type="button" name="button" class="btn btn-outline-primary">Perfil</button>
                            </div>
                          </div>
                        </div>
                        <!-- JefeCasaR -->
                        <div class="col-md-3">
                          <div class="card mb-4">
                            <img class=" card-img-top" width="250" src="img/staff/JefeCasaR.jpeg" alt="Ministro">
                            <h5 class="card-header" style="background-color: #3c4de6">JefeCasaR - Agustiise</h5>
                            <div class="card-body">
                              <p class="card-text text-justify">Destacó en DCAO y Pociones. Viajó por todo el mundo para conocer todo tipo de artes oscuras y poder controlarlas. Profesor de DCAO y Jefe de Casa de Ravenclaw.</p>
                            </div>
                            <div class="card-footer">
                              <button type="button" name="button" class="btn btn-outline-primary">Perfil</button>
                            </div>
                          </div>
                        </div>
                        <!-- JefeCasaG -->
                        <div class="col-md-3">
                          <div class="card mb-4">
                            <img class=" card-img-top" width="250" src="img/staff/JefeCasaG.jpeg" alt="Ministro">
                            <h5 class="card-header bg-danger">JefeCasaG - SirJackald</h5>
                            <div class="card-body">
                              <p class="card-text text-justify">Mago gris, legítimo rey de los Ándalos y Primeros Hombres, Protector de los Siete Reinos, Padre de Dragones, el Khalessi del Gran Mar de Hierba, el que no arde, Rompedor de Cadenas, profesor de Herbologia y Jefe de Gryffindor</p>
                            </div>
                            <div class="card-footer">
                              <button type="button" name="button" class="btn btn-outline-primary">Perfil</button>
                            </div>
                          </div>
                        </div>
                        <!-- PrefectoH -->
                        <div class="col-md-3">
                          <div class="card mb-4">
                            <img class=" card-img-top" width="250" src="img/staff/PrefectoH.jpeg" alt="Ministro">
                            <h5 class="card-header bg-warning">PrefectoH - AngelTWD</h5>
                            <div class="card-body">
                              <p class="card-text text-justify">Angel James Grimes Grindelwald Martínez Scamander, sangre pura, jugador de quidditch y diestro en las artes oscuras, actual prefecto de Hufflepuff y futuro magizoologo.</p>
                            </div>
                            <div class="card-footer">
                              <button type="button" name="button" class="btn btn-outline-primary">Perfil</button>
                            </div>
                          </div>
                        </div>
                        <!-- PrefectoS -->
                        <div class="col-md-3">
                          <div class="card mb-4">
                            <img class=" card-img-top" width="250" src="img/staff/PrefectoS.jpeg" alt="Ministro">
                            <h5 class="card-header" style="background-color: #348548">PrefectoS - April_Wood</h5>
                            <div class="card-body">
                              <p class="card-text text-justify">April Riddle actual pefecta de Slytherin, sangre pura,futura profesora de CDCM.</p>
                            </div>
                            <div class="card-footer">
                              <button type="button" name="button" class="btn btn-outline-primary">Perfil</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
