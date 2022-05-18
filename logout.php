<?php //Codigo para cerra la sesion 
session_start();
if(session_destroy()){
    header('Location: index.php');
}
?>