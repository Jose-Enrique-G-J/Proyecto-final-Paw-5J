<?php 
    $Correo=$_POST['Correo'];
    $Password=$_POST['Password'];
    require_once '../Modelos/Usuario.php';
    $usuario=new Usuario();
    $resultado=$usuario->AutentificarUsuario($Correo,$Password);
    if(count($resultado)>0){
    foreach($resultado as $registro){
        session_start();
        $_SESSION['idUsuario']=$registro['Id'];
        $_SESSION['usuario']=$registro['Correo'];
        $_SESSION['tipo']=$registro['TipoUsuario'];
        echo $registro ['Correo'];
        header("Location:../index.php");
    }
    }
    else{
        header("Location:../sesion.php");
    }
?>