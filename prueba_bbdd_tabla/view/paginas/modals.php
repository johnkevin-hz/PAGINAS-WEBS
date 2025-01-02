<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DATOS DEL TRABAJADOR</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post">
      <div class="modal-body">
          <div class="mb-3 d-none">
            <input name="reg" id="recipient-name" type="text" class="form-control" value="reg">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">NOMBRES</label>
            <input name="nom" id="recipient-name" type="text" class="form-control">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">APELLIDO PATERNO:</label>
            <input name="apa" id="recipient-name" type="text" class="form-control">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">APELLIDO MATERNO:</label>
            <input name="ama" id="recipient-name" type="text" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
        <button type="submit" class="btn btn-primary">AGREGAR</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php foreach ($usuarios as $key => $value): ?>
  <div class="modal fade" id="exampleModal<?php echo  $value["tra_cod"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DATOS DEL TRABAJADOR</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post">
        <div class="modal-body">
            <div class="mb-3 d-none">
              <input name="edit" id="recipient-name" type="text" class="form-control" value="edit">
            </div>
            <div class="mb-3 d-none">
              <input name="cod" id="recipient-name" type="text" class="form-control" value="<?php echo  $value["tra_cod"];?>">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">NOMBRES</label>
              <input name="nom" id="recipient-name" type="text" class="form-control" value="<?php echo  $value["tra_nom"];?>">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">APELLIDO PATERNO:</label>
              <input name="apa" id="recipient-name" type="text" class="form-control" value="<?php echo  $value["tra_pat"];?>">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">APELLIDO MATERNO:</label>
              <input name="ama" id="recipient-name" type="text" class="form-control" value="<?php echo  $value["tra_mat"];?>">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
          <button type="submit" class="btn btn-primary">AGREGAR</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach ?>


<?php foreach ($usuarios as $key => $value): ?>
  <div class="modal fade" id="exampleModaleli<?php echo  $value["tra_cod"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">DATOS DEL TRABAJADOR</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post">
        <div class="modal-body">
          ¿Está seguro de eliminar a <strong><?php echo  $value["tra_nom"];?>, <?php echo  $value["tra_pat"];?> <?php echo  $value["tra_mat"];?></strong>?
            <div class="mb-3 d-none">
              <input name="eli" id="recipient-name" type="text" class="form-control" value="eli">
            </div>
            <div class="mb-3 d-none">
              <input name="cod" id="recipient-name" type="text" class="form-control" value="<?php echo  $value["tra_cod"];?>">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
          <button type="submit" class="btn btn-primary">SI</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach ?>