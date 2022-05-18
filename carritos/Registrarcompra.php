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
    <title>Mis compras</title>
    <!-- MDB icon -->
    <link rel="icon" href="../img/mdb-favicon.ico" type="image/x-icon" />
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mdb.min.css" />
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
          src="../img/logoheader.png"
          height="70"
          alt="MDB Logo"
          loading="lazy"
        />
    </a>
    <div class="Alinear">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <!-- Link -->
              <li class="nav-item">
                <a href="../index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a  href="../somos.php">¿Quiénes somos?</a>
              </li>
              <li class="nav-item">
                <a  href="../galeria.php">Galeria</a>
              </li>
              <?php
                if($usuarioSesion<>'' && $tipoSesion ==2){  
              ?>
                <li class="nav-item">
                  <a  href="../carritos/carrito.php">Mi Carrito</a>
                </li>
                <li class="nav-item">
                  <a  href="../compras/compra.php">Mis Compras</a>
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
                    <a href="../logout.php" >Cerrar sesion </a>
                    </FONT>
                    <?php
                  }
                  else{
                    ?>
                    <a href="../sesion.php"> Iniciar Sesion</a>
                    <?php
                  }
                  ?>
            </li>      
</ul>
      <!-- Icons -->
      <ul class="navbar-nav d-flex flex-row me-1">
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="www.facebook.com"><i class="fab fa-facebook"></i></a>
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
<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h3 fw-bold mb-5 mx-1 mx-md-4 mt-4">Datos para solicitar su pedido</p>

                <?php 
            require_once '../Modelos/dulce.php';
            $dulce = new Dulces();
            $resultado = $dulce->obtenerdulces();
            
            if(count($resultado)>0){
              foreach($resultado as $registro){
                $Dulce=$registro['Dulce'];
      
                ?>

              

                <?php
              }
            }
            
            
            ?> 


                <form name="login" action="Insertarcompra.php" method="post">
                    
                    <div  class="d-flex flex-row align-items-center mb-1">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <input type="text" id="form3Example1c" class="form-control" 
                    placeholder="Correo" name="Usuario" >
                    </div>
                    <div  class="d-flex flex-row align-items-center mb-1">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <input type="text" id="form3Example1c" class="form-control" 
                    placeholder="Estado" name="Estado">
                    </div>

                    <div  class="d-flex flex-row align-items-center mb-1">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <input type="text" id="form3Example1c" class="form-control" 
                    placeholder="Municipio" name="Municipio">
                    </div>

                    <div  class="d-flex flex-row align-items-center mb-1">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <input type="text" id="form3Example1c" class="form-control" 
                    placeholder="Localidad" name="Localidad">
                    </div>

                    <div  class="d-flex flex-row align-items-center mb-1">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <input type="text" id="form3Example1c" class="form-control" 
                    placeholder="Direccion" name="Direccion">
                    </div>

                    <div  class="d-flex flex-row align-items-center mb-1">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <input type="text" id="form3Example1c" class="form-control" 
                    placeholder="Telefono" name="Telefono">
                    </div>

                    <div  class="d-flex flex-row align-items-center mb-1">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <input type="text" id="form3Example1c" class="form-control" 
                    placeholder="Clave interbancaria" name="Clave">
                    </div>
                    <div  class="d-flex flex-row align-items-center mb-1">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <input type="text" id="form3Example1c" class="form-control" 
                    placeholder="Dulce" name="Dulce"  readonly value="<?php echo $Dulce?>">
                    </div>
                    <div  class="d-flex flex-row align-items-center mb-1">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <input type="text" id="form3Example1c" class="form-control" 
                    placeholder="Cantidad de pedidos" name="Cantidad">
                    </div>                    
       
                    <div class="d-flex flex-row align-items-center mb-1">
                      <input type="submit" value="Confirmar"
                      class="btn btn-dark btn-lg btn-block" name="login-btn">
                    </div>     
            </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
             <img src="../img/registrarcompra.jpeg" class="img-fluid" alt="Sample image">

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
      <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="https://www.facebook.com/"  role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee"  href="https://twitter.com/?lang=es" role="button"><i class="fab fa-twitter"></i></a>

      <!-- Google -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="https://www.google.com/" role="button"><i class="fab fa-google"></i></a>

      <!-- Instagram -->
      <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="https://www.instagram.com/" role="button"><i class="fab fa-instagram"></i></a>

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
              <a href="catalogo.php" class="text-white">Catálogo</a>
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
    <a class="text-white" href="https://mdbootstrap.com/">Dulceriacanota.com</a>
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
