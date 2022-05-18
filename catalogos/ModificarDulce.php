<?php
    $Id=$_POST['Id'];
    $Dulce=$_POST['Dulce'];
    $Descripcion=$_POST['Descripcion'];
    $Precio=$_POST['Precio'];
    $Origen=$_POST['Municipio'];
    $Existencia=$_POST['Existencia'];


if(!empty($Dulce) && !empty($Descripcion) && !empty($Precio) && !empty($Origen) && !empty($Existencia) ){
    require_once '../Modelos/dulce.php';
    $Dulces= new Dulces();
    $resultado=$Dulces->ModificarDulce($Id, $Dulce,$Descripcion, $Precio,   $Origen,  $Existencia);
    if($resultado){
      header("Location: catalogo.php");
    }
    else{
      header("Location: EditarDulce.php");

    }
}
else{
    header("Location: EditarDulce.php");

}




  ?>