<?php
session_start();
require_once('Conexion.php');

$recursos = new Conexion();
$recursos = $recursos->consultar("SELECT * FROM recursos");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador de archivos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3ee2d30d4e.js" crossorigin="anonymous"></script>
  </head>
  <body>
      <!--Navbar-->
      <nav class="navbar" style="background-color: #DCD0CF;">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Biblioteca de recursos docentes</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">¡Bienvenido!</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Salir</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      </nav>

      <!--Commienzo del form de subida de archivos-->
    <div class="container">
    <div class="row">
    <div>
        <button type="button" 
        data-bs-toggle="modal"
        data-bs-target="#modal_crear"
        class="btn btn-primary mt-5">Crear recurso</button>
    </div>
  <!--Tabla con los archivos ordenados que vendran de la BD-->
   </div>
   <?php if(isset($_SESSION['mensaje'])){ ?>
   <div class="alert alert-success" role="alert">
      <?=$_SESSION['mensaje'];?>
    </div>
    <?php } ?>
   <div class="col-sm-12 mt-5">
    <table class="table table-light">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Imagen</th>
            <th scope="col">Archivo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($recursos as $recurso){ ?>
          <tr>
            <th scope="row"><?=$recurso['id'];?></th>
            <td><?=$recurso['nombre'];?></td>
            <td><?=$recurso['descripcion'];?></td>
            <td><?=$recurso['imagen'];?></td>
            <td><?=$recurso['archivo'];?></td>
            <td>
                <div class="btn-group">
                    <button type="button"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    data-id="<?=$recurso['id'];?>" 
                    data-nombre="<?=$recurso['nombre'];?>"
                    data-desc="<?=$recurso['descripcion'];?>" 
                    data-imagen="<?=$recurso['imagen'];?>"
                    data-archivo="<?=$recurso['archivo'];?>"
                    class="btn btn-primary"><i class="fa-solid fa-pen"></i></button>
                    <form action="delete.php" method="POST">
                      <input type="hidden" name="id" value="<?=$recurso['id'];?>">
                    <button type="submit" onclick="return confirm('¿Desea eliminar el recurso?')" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </div>
          
            </td>
          </tr>
          <?php } ?>
          </tbody>
      </table>
   </div>
    </div>
    </div>


  <?php include_once('editar_recurso.php'); ?>
  <?php include_once('crear_recurso.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
     
const exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', event => {
  const button = event.relatedTarget
  let id = button.getAttribute('data-id');
  let nombre = button.getAttribute('data-nombre');
  let desc = button.getAttribute('data-desc');
  let imagen = button.getAttribute('data-imagen');
  let archivo = button.getAttribute('data-archivo');

  exampleModal.querySelector('.modal-body #id_recurso').value = id;
  exampleModal.querySelector('.modal-body #recurso_nombre').value = nombre;
  exampleModal.querySelector('.modal-body #recurso_descripcion').value = desc;
  exampleModal.querySelector('.modal-body #recurso_imagen').value = imagen;
  exampleModal.querySelector('.modal-body #recurso_archivo').value = archivo;

  modalTitle.textContent = `New message to ${recipient}`

})

    </script>
  </body>
</html>
