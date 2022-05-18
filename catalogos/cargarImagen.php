<?php
// Recibo los datos de la imagen
$nombreImg = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];


//Si existe imagen y tiene un tamaño correcto
if (!empty($nombreImg) && ($_FILES['imagen']['size'] <= 200000)) 
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($_FILES["imagen"]["type"] == "image/gif")
   || ($_FILES["imagen"]["type"] == "image/jpeg")
   || ($_FILES["imagen"]["type"] == "image/jpg")
   || ($_FILES["imagen"]["type"] == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT'].'/img/Dulces/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombreImg);
      
      $nombreImagen='/img/Dulces/'.$nombreImg;
      require_once '../Modelos/dulce.php';
      $dulce = new Dulces();
      $resultado=$dulce->ModificarImagen($id,$nombreImagen);
      if($resultado)
      {
          header("Location:catalogo.php");
      }
      else{
          header("Location:imagenProducto.php");
      }

    } 
    else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
} 
else 
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombreImg == !NULL) echo "La imagen es demasiado grande "; 
}
?>