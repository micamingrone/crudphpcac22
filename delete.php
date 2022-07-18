<?php 
session_start();
if(!isset($_POST['id'])){
    $_SESSION['error'] = 'No se encuentra el campo id';
} else {
    include_once('Conexion.php');

    $id = $_POST['id'];
    

    $conectar = new Conexion();

    $recurso = $conectar->ejecutar("delete from recursos where id=$id");

    if($recurso != null){
        $_SESSION['mensaje'] ='Registro eliminado correctamente';
        header('Location: panel.php');
    }
}

?>