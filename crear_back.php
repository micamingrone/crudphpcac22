<?php 
session_start();
if(!isset($_POST['nombre']) && !isset($_POST['imagen'])){
    $_SESSION['error'] = 'Por favor introduzca los campos nombre e imagen';
} else {
    include_once('Conexion.php');

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $imagen = $_POST['imagen'];
    $archivo = $_POST['archivo'];

    $conectar = new Conexion();

    $recurso = $conectar->ejecutar("INSERT INTO `recursos`(`nombre`, `descripcion`, `imagen`, `archivo`) VALUES ('$nombre','$descripcion','$imagen','$archivo')");

    if($recurso != null){
        $_SESSION['mensaje'] ='Registro insertado correctamente';
        header('Location: panel.php');
    }
}

?>