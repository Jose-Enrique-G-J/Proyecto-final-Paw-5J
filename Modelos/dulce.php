<?php
    class Dulces{
        public function obtenerdulces(){
            include '../conexion.php';
            $conectar= new Conexion ();
            $consulta ="SELECT * FROM dulces";
            $query=$conectar->prepare($consulta);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            return  $query->fetchAll();
        } 

        public function obtenercarrito(){
            include '../conexion.php';
            $conectar= new Conexion ();
            $consulta ="SELECT * FROM carrito";
            $query=$conectar->prepare($consulta);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            return  $query->fetchAll();
        } 

        public function obtenercompra(){
            include '../conexion.php';
            $conectar= new Conexion ();
            $consulta ="SELECT * FROM Pedidos";
            $query=$conectar->prepare($consulta);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            return  $query->fetchAll();
        } 

        public function Eliminardulce($id){
            include '../conexion.php';
            $conectar= new Conexion ();
            $consulta=$conectar->prepare("DELETE FROM dulces WHERE Id=:id");
            $consulta->bindParam(":id",$id,PDO::PARAM_STR);
            $consulta->execute();
            return  true;
        } 

        public function Eliminarcarrito($id){
            include '../conexion.php';
            $conectar= new Conexion ();
            $consulta=$conectar->prepare("DELETE FROM carrito WHERE Id=:id");
            $consulta->bindParam(":id",$id,PDO::PARAM_STR);
            $consulta->execute();
            return  true;
        } 



        public function insertarDulces( $Dulce, $Descripcion,$Precio,   $Origen,  $Existencia,$Imagen){

            try {
                include '../conexion.php';
                $conectar= new Conexion ();
                $consulta=$conectar->prepare("INSERT INTO dulces (Dulce, Descripcion, Precio,Origen,Existencia,Imagen) 
                VALUES(:Dulce,:Descripcion, :Precio,   :Origen,  :Existencia,:Imagen)");
                $consulta->bindParam(":Dulce",$Dulce,PDO::PARAM_STR);
                $consulta->bindParam(":Descripcion",$Descripcion,PDO::PARAM_STR);
                $consulta->bindParam(":Precio",$Precio,PDO::PARAM_STR);
                $consulta->bindParam(":Origen",$Origen,PDO::PARAM_STR);
                $consulta->bindParam(":Existencia",$Existencia,PDO::PARAM_STR);
                 $consulta->bindParam(":Imagen",$Imagen,PDO::PARAM_STR);
                $consulta->execute();
                return  true;
            } catch (Exception $e) {
                return  false;
            }

        } 

        public function Insertarcompra( $Usuario,$Estado,$Municipio,$Localidad,$Direccion,$Telefono,$Clave,$Dulce,$Cantidad){

            try {
                include '../conexion.php';
                $conectar= new Conexion ();
                $consulta=$conectar->prepare("INSERT INTO Pedidos (Usuario,Estado,Municipio,Localidad,Direccion,Telefono,Clave,Dulce,Cantidad) 
                VALUES(:Usuario,:Estado,:Municipio,:Localidad,:Direccion,:Telefono,:Clave,:Dulce,:Cantidad)");
                $consulta->bindParam(":Usuario",$Usuario,PDO::PARAM_STR);
                $consulta->bindParam(":Estado",$Estado,PDO::PARAM_STR);
                $consulta->bindParam(":Municipio",$Municipio,PDO::PARAM_STR);
                $consulta->bindParam(":Localidad",$Localidad,PDO::PARAM_STR);
                $consulta->bindParam(":Direccion",$Direccion,PDO::PARAM_STR);
                $consulta->bindParam(":Telefono",$Telefono,PDO::PARAM_STR);
                $consulta->bindParam(":Clave",$Clave,PDO::PARAM_STR);
                $consulta->bindParam(":Dulce",$Dulce,PDO::PARAM_STR);
                $consulta->bindParam(":Cantidad",$Cantidad,PDO::PARAM_INT);
                $consulta->execute();
                return  true;
            } catch (Exception $e) {
                return  false;
            }

        } 

        public function insertarCarrito( $Dulce, $Descripcion,$Precio,   $Origen){

            try {
                include '../conexion.php';
                $conectar= new Conexion ();
                $consulta=$conectar->prepare("INSERT INTO carrito (Dulce, Descripcion, Precio,Origen) 
                VALUES(:Dulce,:Descripcion, :Precio,   :Origen)");
                $consulta->bindParam(":Dulce",$Dulce,PDO::PARAM_STR);
                $consulta->bindParam(":Descripcion",$Descripcion,PDO::PARAM_STR);
                $consulta->bindParam(":Precio",$Precio,PDO::PARAM_STR);
                $consulta->bindParam(":Origen",$Origen,PDO::PARAM_STR);
                $consulta->execute();
                return  true;
            } catch (Exception $e) {
                return  false;
            }

        } 

        public function ModificarDulce($id, $Dulce, $Descripcion, $Precio,   $Origen,  $Existencia){
            include '../conexion.php';
            $conectar= new Conexion ();
            $consulta=$conectar->prepare("UPDATE dulces SET Dulce=:Dulce, Descripcion=:Descripcion, Precio=:Precio,Origen=:Origen,Existencia=:Existencia WHERE Id=:id");
            $consulta->bindParam(":id",$id,PDO::PARAM_INT);
            $consulta->bindParam(":Dulce",$Dulce,PDO::PARAM_STR);
            $consulta->bindParam(":Descripcion",$Descripcion,PDO::PARAM_STR);
            $consulta->bindParam(":Precio",$Precio,PDO::PARAM_STR);
            $consulta->bindParam(":Origen",$Origen,PDO::PARAM_STR);
            $consulta->bindParam(":Existencia",$Existencia,PDO::PARAM_INT);
            $consulta->execute();
            return  true;

        } 


        

        public function ObtenerDulceId($id) 
        {   include '../conexion.php';
            $conectar= new Conexion();
            $consulta = $conectar->prepare("SELECT * FROM dulces WHERE Id=:id");
            $consulta->bindParam(":id",$id,PDO::PARAM_INT);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return  $consulta->fetchAll();
        }

          public function ModificarImagen($id,$nombreImagen){
            include '../conexion.php';
            $conexion=new Conexion();
      
            $consulta=$conexion->prepare("UPDATE productos SET Imagen=:nombreImagen
                       WHERE Id=:id"); //: asociacion
            $consulta->bindParam(":id",$id,PDO::PARAM_STR);
            $consulta->bindParam(":nombreImagen",$nombreImagen,PDO::PARAM_STR);
            $consulta->execute();   
            return true;
          }

}
  ?>