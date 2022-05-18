<?php 
$id=$_GET['idEliminar'];
include_once '../Modelos/dulce.php';
$dulce = new Dulces();
$resultado=$dulce->Eliminardulce($id);
if($resultado)
{
    header("Location:catalogo.php");
}
else{
    header("Location:catalogo.php");
}
?>