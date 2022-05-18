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
                  <a  href="compra.php">Mis Compras</a>
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
<section id="about-us">

  <div class="container p-1 p-sm-3">
    <div class="row">
      <div class="col-12 text-center">
        <H2>Mis compras</H2>
        <hr />

      </div>

      <div class="col-9">

            <table  class="table table-striped">
        <thead> 

      
          <tr style="background-color: gray;">
            <th scope="col" >#</th>
            <th scope="col">Dulce</th>
            <th scope="col">Cantidad</th>
            <th scope="col"></th>
          </tr> 

        </thead>
        <tbody>
        
            <?php 
            require_once '../Modelos/dulce.php';
            $dulce = new Dulces();
            $resultado = $dulce->obtenercompra();
            
            if(count($resultado)>0){
              foreach($resultado as $registro){
                ?>
                <tr>
                  <td><?php echo $registro['Id'] ?></td>
                  <td><?php echo $registro['Dulce'] ?></td>
                  <td><?php echo $registro['Cantidad'] ?></td>
                  
                </tr>
                <?php
              }
            }
            
            
            ?>  
        </tbody>
      </table>
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