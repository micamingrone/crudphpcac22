<?php 
session_start();
if(!isset($_POST['nombre']) && !isset($_POST['imagen']) && !isset($_POST['id_recurso'])){
    $_SESSION['error'] = 'Por favor introduzca los campos nombre e imagen';
} else {
    include_once('Conexion.php');
    $id = $_POST['id_recurso'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $imagen = $_POST['imagen'];
    $archivo = $_POST['archivo'];

    $conectar = new Conexion();

    $recurso = $conectar->ejecutar("UPDATE recursos SET nombre='$nombre',descripcion='$descripcion',imagen='$imagen',archivo='$archivo' WHERE id=$id");

    if($recurso != null){
        $_SESSION['mensaje'] ='Registro actualizado correctamente';
        header('Location: panel.php');
    }
}

?>