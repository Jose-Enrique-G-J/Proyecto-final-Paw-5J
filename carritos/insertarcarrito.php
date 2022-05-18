<?php
    $Dulce=$_POST['Dulce'];
    $Descripcion=$_POST['Descripcion'];
    $Precio=$_POST['Precio'];
    $Origen=$_POST['Municipio'];


if(!empty($Dulce) && !empty($Descripcion) && !empty($Precio) && !empty($Origen)  ){
    require_once '../Modelos/dulce.php';
    $Dulces= new Dulces();
    $resultado=$Dulces->insertarCarrito( $Dulce,$Descripcion, $Precio,   $Origen);
    if($resultado){
      header("Location: carrito.php");
    }
    else{
      header("Location: carrito.php");

    }
}
else{
    header("Location: insertarcarrito.php");

}



  ?>