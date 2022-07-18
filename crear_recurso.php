
<div class="modal fade" id="modal_crear" tabindex="-1" aria-labelledby="modal_crearLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_crearLabel">Crear recurso</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="crear_back.php" method="POST">
            <div class="form-group">
                <label for="recurso_nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="recurso_nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="recurso_descripcion">Descripcion</label>
                <textarea class="form-control" name="descripcion" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="recurso_imagen">Imagen</label>
                <input type="text" name="imagen" class="form-control">
            </div>
            <div class="form-group">
                <label for="recurso_archivo">Archivo</label>
                <input type="text" name="archivo" class="form-control">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
      </div>
      </form>
    </div>
  </div>
</div>