
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar recurso</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="editar_back.php" method="POST">
            <input type="hidden" name="id_recurso" id="id_recurso">
            <div class="form-group">
                <label for="recurso_nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="recurso_nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="recurso_descripcion">Descripcion</label>
                <textarea class="form-control" name="descripcion" id="recurso_descripcion" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="recurso_imagen">Imagen</label>
                <input type="text" class="form-control" name="imagen" id="recurso_imagen">
            </div>
            <div class="form-group">
                <label for="recurso_archivo">Archivo</label>
                <input type="text" class="form-control" name="archivo" id="recurso_archivo">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" onclick="return confirm('¿Desea modificar el recurso?')" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
    </form>
  </div>
</div>
