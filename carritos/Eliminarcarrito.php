<?php 
$id=$_GET['idEliminar'];
include_once '../Modelos/dulce.php';
$dulce = new Dulces();
$resultado=$dulce->Eliminarcarrito($id);
if($resultado)
{
    header("Location:carrito.php");
}
else{
    header("Location:carrito.php");
}
?>