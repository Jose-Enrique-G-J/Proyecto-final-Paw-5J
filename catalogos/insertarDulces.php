<?php
    $Dulce=$_POST['Dulce'];
    $Descripcion=$_POST['Descripcion'];
    $Precio=$_POST['Precio'];
    $Origen=$_POST['Municipio'];
    $Existencia=$_POST['Existencia'];
    $Ruta=$_POST['Imagen'];
    $Extencion=$_POST['Extencion'];
    $Imagen= 'img/Dulces/'.$Ruta. $Extencion;

if(!empty($Dulce) && !empty($Descripcion) && !empty($Precio) && !empty($Origen) && !empty($Existencia)  && !empty($Imagen)  ){
    require_once '../Modelos/dulce.php';
    $Dulces= new Dulces();
    $resultado=$Dulces->insertarDulces( $Dulce,$Descripcion, $Precio,   $Origen,  $Existencia, $Imagen);
    if($resultado){
      header("Location: catalogo.php");
    }
    else{
      header("Location: AgregarDulces.php");

    }
}
else{
    header("Location: AgregarDulces.php");

}



  ?>