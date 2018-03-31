<?php require('head.php');
      require('navbar.php') ?>
  <body>

<div class="main-container container-fluid">

  <div class="row">
    <div class="col-md-12 col-lg-2 col-sm-12 sec-container">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Principal</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Perfil</a>
        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Mensajes</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Configuracion</a>
      </div>
    </div>
    <div class="col-md-12 col-lg-10">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <hr>
          <h5>Estado de tu plan</h5>

              <div class="alert alert-primary text-dark col-md-10" role="alert">
                <i class="fa fa-exclamation-circle"></i><span> Tu periodo de prueba empezo el 10/10/2017 y termina el 10/11/2017</span>
                  <button type="button" name="button" class="col-md-12 offset-lg-3 col-lg-1 col-xl-1 btn btn-outline-primary ">Pagar</button>
            </div>
            <div class="alert alert-dark text-dark col-md-8" role="alert">
              <i class="fa fa-exclamation-circle"></i><span class=""> Recorda que pasados los 40 dias tu chatbot se <strong>dará de baja</strong>.</span>
          </div>
          <h5>Informacion de tu plan</h5>
          <div class="card col-md-6">
            <div class="card-body">
              <span><strong>Comienzo del periodo:</strong>10/10/2017</span><br>
              <span><strong>Vencimiento del periodo:</strong>10/11/2017</span><p></p>
                  <span><strong>Plan:</strong> Prueba gratis</span><br>
                    <button type="button" name="button" class="btn btn-outline-dark col-md-5 col-lg-3">Elegir plan</button><p></p>
                  <span><strong>Conversaciones:</strong> Prueba gratis</span><br>
                    <button type="button" name="button" class="btn btn-outline-dark col-md-5 col-lg-3">Elegir plan</button><p></p>
                  <span><strong>Periodo:</strong> 30 dias</span><br>
                    <button type="button" name="button" class="btn btn-outline-dark col-md-5 col-lg-3">Elegir plan</button><p></p>
                  <span><strong>Medio de pago:</strong> Aca veras tu medio de pago</span><br>
                    <button type="button" name="button" class="btn btn-outline-dark col-md-5 col-lg-3">Pagar</button>
            </div>
          </div>

        </div>
        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><hr>

          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Library</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>


<div class="container main-container">

<h3>Elegi y proba tu plan ahora</h3>
<h4><small>Tu plan va a empezar una vez qeu finalice tu prueba gratis de 30 dias</small></h4>

          <div class="row text-center">
            <div class="card col-md-3 selCard">
              <div class="card-body" >
                <h4>Basico</h4>
                <p>Para tiendas con menos de 10.000 visitas/mes</p>
                <h4>U$29 <small>/mes</small></h4>
                <p><strong>150 conversaciones</strong></p>
                <hr>
                <p>+U$50 /mo per 100extra</p>
                <button type="button" name="button" class="btn btn-primary btn-sm" id="boton">Elegir plan</button>
            </div>
          </div>
            <div class="card col-md-3 selCard">
            <div class="card-body">
              <h4>Pro</h4>
              <p>Para tiendas con menos de 10.000 visitas/mes</p>
              <h4>U$29 <small>/mes</small></h4>
              <p><strong>400 conversaciones</strong></p>
              <hr>
              <p>+U$50 /mo per 100extra</p>
              <button type="button" name="button" class="btn btn-primary btn-sm" id="boton">Elegir plan</button>
          </div>
          <div class="card-text alert alert-info fade show">
            <span><strong>Mas popular</strong></span>
          </div>
        </div>
          <div class="card col-md-3 selCard">
          <div class="card-body">
            <h4>Premium</h4>
            <p>Para tiendas con menos de 10.000 visitas/mes</p>
            <h4>U$29 <small>/mes</small></h4>
            <p><strong>400 conversaciones</strong></p>
            <hr>
            <p>+U$50 /mo per 100extra</p>
            <button type="button" name="button" class="btn btn-primary btn-sm">Elegir plan</button>
        </div>
      </div>
          <div class="card col-md-3 selCard">
        <div class="card-body">
          <h4>Elite</h4>
          <p>Para tiendas con menos de 10.000 visitas/mes</p>
          <h4>U$29 <small>/mes</small></h4>
          <p><strong>400 conversaciones</strong></p>
          <hr>
          <p>+U$50 /mo per 100extra</p>
          <button type="button" name="button" class="btn btn-primary btn-sm">Elegir plan</button>
          </div>
        </div>
      </div>
        <br><br>
      <div class="offset-md-11">
        <button class="btn btn-md btn-primary" type="button" name="button">Seleccionar</button>
      </div>
    </div>
</div>



<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list"><hr>

<div class="container-fluid">
  <h4>¿Cuantas conversaciones queres agregar?</h4>
  <p>Podes agregar conversaciones en cualquier momento</p><br><br>
    <div class="row">
      <div class="col-md-12" id="slidecontainer">
        <input type="range" min="0" max="4000" value="50" class="slider" id="myRange">
      </div><br><br>
    <div class="card col-md-5 offset-md-7">
      <div class="card-body">
        <p><strong>Plan: </strong>Básico</p>
        <p><strong>Conversaciones: </strong><span id="demo"></span></p>
        <h4>Total: U$59/mes</h4>
        <button class="btn btn-lg btn-primary offset-md-7 col-md-5" type="button" name="button">Siguiente</button>
      </div>
    </div>

    </div>
  </div>



        </div>
        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"><hr>...</div>
      </div>
    </div>
  </div>
</div>



<?php require('footer.php'); ?>
