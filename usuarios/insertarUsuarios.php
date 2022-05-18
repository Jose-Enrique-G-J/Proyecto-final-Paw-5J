<?php
    $Nombre=$_POST['Nombre'];
    $Paterno=$_POST['Paterno'];
    $Materno=$_POST['Materno'];
    $Correo=$_POST['Correo'];
    $Password=$_POST['Password'];

    if(!empty($Nombre) && !empty($Paterno) && !empty($Materno) && !empty($Correo) && !empty($Password)){
        require_once '../Modelos/Usuario.php';
        $usuario= new Usuario();
        if($Password=='Adm-2022'){
            $Tipo=1;
        }
        else{
          $Tipo=2;
        }
        $resultado=$usuario->InsertarUsuario($Nombre,$Paterno, $Materno, $Correo, $Password,$Tipo);
        if($resultado){
          header("Location:../sesion.php");
        }
        else{
          header("Location:../registrar.php");
    
        }
    }
    else{
      header("Location:../registrar.php");

    }

  ?>