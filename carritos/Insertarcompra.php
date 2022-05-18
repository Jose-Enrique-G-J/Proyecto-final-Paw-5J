<?php
    $Usuario=$_POST['Usuario'];
    $Estado=$_POST['Estado'];
    $Municipio=$_POST['Municipio'];
    $Localidad=$_POST['Localidad'];
    $Direccion=$_POST['Direccion'];
    $Telefono=$_POST['Telefono'];
    $Clave=$_POST['Clave'];
    $Dulce=$_POST['Dulce'];
    $Cantidad=$_POST['Cantidad'];


if(!empty($Usuario) && !empty($Estado) && !empty($Municipio) && !empty($Localidad)  && !empty($Direccion) && !empty( $Telefono)
&& !empty($Clave) && !empty($Dulce) && !empty($Cantidad) ){
    require_once '../Modelos/dulce.php';
    $Dulces= new Dulces();
    $resultado=$Dulces->Insertarcompra( $Usuario,$Estado,$Municipio,$Localidad,$Direccion,$Telefono,$Clave,$Dulce,$Cantidad);
    if($resultado){
      header("Location: ../compras/compra.php");
    }
    else{
      header("Location: ../compras/compra.php");

    }
}
else{
    header("Location: Insertarcompra.php");

}



  ?>