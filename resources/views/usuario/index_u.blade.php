<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="cs/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <div class="logo">
          <a href=""><img src="img/sorteo.png" alt="#"></a>
        </div>
        <nav>
            <a class="h" href="/index_u">Inicio</a>
            <a class="h" href="/sorteos">Sorteos</a>
            <a class="h" href="/ganadores">Ganadores</a>
            <a class="h" href="/perfil_usu">Perfil Usuario</a>
            <a href="{{ route('login.destroy') }}" class="h">Cerrar Sesión</a>
        </nav>
     </header>
     <br>
     <br>
     <br>
<!-- Content -->
<div class="banner">
  <div class="banner-body">
      <h3 class="text-uppercase">Bienvenido a Rifas Peinado</h3>
      <p> Juega desde cualquier lugar</p>
      <a href="menu.html" class="btn btn-warning"><i class="fas fa-coffee fa-fw"></i> &nbsp; Ir a Sorteos</a>
  </div>
</div>

<div class="container container-web-page">
  <h3 class="text-center text-uppercase poppins-regular font-weight-bold">Nuestros servicios</h3>
  <br>
  <div class="row">
      <div class="col-12 col-sm-6 col-md-4">
          <p class="text-center"><i class="fas fa-shipping-fast fa-5x"></i></p>
          <h5 class="text-center text-uppercase poppins-regular font-weight-bold">Envíos a domicilio</h5>
          <p class="text-center">Contamos con un exelente servicio a domicilio ¡Contactenos!</p>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
          <p class="text-center"><i class="fas fa-utensils fa-5x"></i></p>
          <h5 class="text-center text-uppercase poppins-regular font-weight-bold">Ventas por mayoreo</h5>
          <p class="text-center">En la compra de tu 4to cafe te regalaremos 1 totalmente GRATIS!</p>
      </div>
      <div class="col-12 col-sm-6 col-md-4">
          <p class="text-center"><i class="fas fa-store-alt fa-5x"></i></p>
          <h5 class="text-center text-uppercase poppins-regular font-weight-bold">Reservaciones</h5>
          <p class="text-center">¿Evento importante? Contactanos!</p>
      </div>
  </div>
</div>

<hr>

<div class="container-fluid container-web-page">
  <h3 class="text-center text-uppercase poppins-regular font-weight-bold">Nuestros cafes en oferta</h3>
  <div class="container-cards full-box">

      <div class="card shadow-1-strong">
          <img class="card-img-top" src="../img/mazda.png" alt="nombre_platillo">
          <div class="card-body text-center">
              <h5 class="card-title font-weight-bold">Mazda</h5>
              <p class="card-text lead"><span class="badge bg-secondary">Boleto: $1500.00 MXN</span></p>
          </div>
          <div class="card-body text-center">
              <button type="button" class="btn btn-success btn-sm"><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
              &nbsp; &nbsp;
              <a href="details.html" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
          </div>
      </div>

      <div class="card shadow-1-strong">
          <img class="card-img-top" src="../img/ipad.png" alt="nombre_platillo">
          <div class="card-body text-center">
              <h5 class="card-title font-weight-bold">iPad 2021</h5>
              <p class="card-text lead"><span class="badge bg-secondary">Boleto: $300.00 MXN</span></p>
          </div>
          <div class="card-body text-center">
              <button type="button" class="btn btn-success btn-sm"><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
              &nbsp; &nbsp;
              <a href="details.html" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
          </div>
      </div>

      <div class="card shadow-1-strong">
          <img class="card-img-top" src="../img/laptop.png" alt="nombre_platillo">
          <div class="card-body text-center">
              <h5 class="card-title font-weight-bold">Laptop Dell</h5>
              <p class="card-text lead"><span class="badge bg-secondary">Boleto: $200.00 MXN</span></p>
          </div>
          <div class="card-body text-center">
              <button type="button" class="btn btn-success btn-sm"><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
              &nbsp; &nbsp;
              <a href="details.html" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
          </div>
      </div>

  </div>
  <br>
  <p class="text-center"><a href="menu.html" class="btn btn-primary"><i class="fas fa-coffee fa-fw"></i> &nbsp; Ver mas sorteos</a></p>
</div>

<!-- Footer -->
<footer class="footer">
  <div class="container">
      <div class="row">
          <div class="col-12 col-md-4">
              <ul class="list-unstyled" >
                  <li><h5 class="font-weight-bold" ><i class="far fa-copyright"></i> Alexis Peinado</h5></li>
                  <li> Todos los derechos reservados </li>
              </ul>
          </div>
          <div class="col-12 col-md-4">
              <ul class="list-unstyled" >
                  <li><h5 class="font-weight-bold" >Mexico</h5></li>
                  <li><i class="fas fa-map-marker-alt fa-fw"></i>Mexico, Norte America </li>
              </ul>
          </div>
          <div class="col-12 col-md-4">
              <ul class="list-unstyled" >
                  <li><h5 class="font-weight-bold" >Siguenos en:</h5> </li>
                  <li>
                      <a href="https://www.facebook.com/alexis.peinado.79" class="footer-link" target="_blank" >
                          <i class="fab fa-facebook fa-fw"></i> Facebook
                      </a>
                  </li>

                  <li>
                      <a href="" class="footer-link" target="_blank" >
                          <i class="fab fa-Whats'App fa-fw"></i>
                              What's App
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
</footer>


<!-- MDBootstrap V5 -->
<script src="./js/mdb.min.js" ></script>

<!-- General scripts -->
<script src="./js/main.js" ></script>
</body>
</html>