<?php
    class Municipio{
        public function obtenerMunicipio(){
            include '../conexion.php';
            $conectar= new Conexion ();
            $consulta ="SELECT * FROM municipio";
            $query=$conectar->prepare($consulta);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            return  $query->fetchAll();
        }
  
}
  ?>