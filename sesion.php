<!-- Validacion de variables de sesion -->


<?php
session_start();
if(isset($_SESSION['usuario'])){
  $usuarioSesion=$_SESSION['usuario'];
  $tipoSesion=$_SESSION['tipo'];
}
else{
  $usuarioSesion='';
  $tipoSesion='';
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sesion</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mdb.min.css" />
  </head>
  <body>
    <!-- Start your project here-->

<header>
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#b10606;">
  <!-- Container wrapper -->
  <div class="container-fluid">

      <!-- Navbar brand -->
      <a class="navbar-brand" href="#">Dulceria Cañota

      <img
            src="img/logoheader.png"
            height="70"
            alt="MDB Logo"
            loading="lazy"
          />
      </a>

      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
          <div class="Alinear">
                  <!-- Collapsible wrapper -->
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <!-- Link -->
              <li class="nav-item">
                <a href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a  href="somos.php">¿Quiénes somos?</a>
              </li>
              <li class="nav-item">
                <a  href="galeria.php">Galeria</a>
              </li>
              <?php
                if($usuarioSesion<>'' && $tipoSesion ==2){  
              ?>
                <li class="nav-item">
                  <a  href="carritos/carrito.php">Mi Carrito</a>
                </li>
                <li class="nav-item">
                  <a  href="compras/compra.php">Mis Compras</a>
                </li>
              <?php
              }
              ?>

              <?php
                if($usuarioSesion<>'' && $tipoSesion ==1){  
              ?>
                <li class="nav-item">
                  <a  href="pedidos/pedido.php">Pedidos</a>
                </li>
                <li class="nav-item">
                  <a  href="catalogos/catalogo.php">Catálogo</a>
                </li>
              <?php
              }
              ?>

                  <li class="nav-item">
                  <?php 
                  if($usuarioSesion<>''){ //Si se cumple sesion trae valores
                    ?>
                    <FONT COLOR="yellow">
                    <label for ="" > <?php echo $usuarioSesion ?> </label>
                    <a href="logout.php" >Cerrar sesion </a>
                    </FONT>
                    <?php
                  }
                  else{
                    ?>
                    <a href="sesion.php"> Iniciar Sesion</a>
                    <?php
                  }
                  ?>
            </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
</header>

<section class="vh-100" style="background-color: #9A616D;">

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="img/iniciodulces.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form name="login" action="usuarios/validarUsuario.php" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Dulceria Cañota</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicia sesión con tu cuenta</h5>

                  <div  class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <input type="text" id="form3Example1c" class="form-control" 
                    placeholder="Usuario" name="Correo">
                    </div>


                    <div  class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <input type="password"  id="form3Example1c" class="form-control" 
                    placeholder="Contraseña" name="Password">
                    </div>
                    
                  <div class="pt-1 mb-4">
                    <input type="submit" value="Inicia sesión"
                  class="btn btn-dark btn-lg btn-block" name="login-btn">
                  </div>

                  <a class="small text-muted" href="#!">¿Olvidaste tu contraseña?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">¿No tienes cuenta? <a href="registrar.php"
                      style="color: #393f81;">Registrate aqui</a></p>
                  <a href="#!" class="small text-muted">Terminos de uso.</a>
                  <a href="#!" class="small text-muted">Política de privacidad</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class=" text-center text-white" style="background-color:#7c0909;">
  <!-- Grid container -->
  <div class="container p-4">

    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="https://www.facebook.com/profile.php?id=100081329554166"  role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee"  href="https://twitter.com/Dulceria_Canota" role="button"><i class="fab fa-twitter"></i></a>

      <!-- Google -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="https://www.google.com/" role="button"><i class="fab fa-google"></i></a>

      <!-- Instagram -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="https://www.instagram.com/dulceriacanota18/" role="button"><i class="fab fa-instagram"></i></a>

    </section>
    <!-- Section: Social media -->




    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="index.php" class="text-white">Inicio</a>
            </li>
            <li>
              <a href="somos.php" class="text-white">¿Quiénes somos?</a>
            </li>
            <li>
              <a href="galeria.php" class="text-white">Galeria</a>
            </li>
            <li>
              <a href="sesion.php" class="text-white">Iniciar Sesión</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contáctanos
          </h6>
          <p><i class="fas fa-home me-3"></i> Blvd. Belisario Domínguez 1081, Sin Nombre, La Lomita, 29000 Tuxtla Gutiérrez, Chis.</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            dulceriacanota@gmail.com.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 52 961 185 5635</p>
          <p><i class="fas fa-phone me-3"></i> + 52 961 290 1929</p>
        </div>
        <!-- Grid column -->

        
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->

  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2022 Copyright:
    <a class="text-white" href="http://dulceslacanota.epizy.com//">dulceslacanota.epizy.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>