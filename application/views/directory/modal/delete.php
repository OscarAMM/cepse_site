<div class="modal fade" id="delete-<?php echo $item->directory_id ?>" tabindex="-1"
    aria-labelledby="delete-<?php echo $item->directory_id ?>-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delete-<?php echo $item->directory_id ?>-label">
                    Eliminar a <?= $item->employee_name?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Seguro que quiere eliminar el dato? Esta acción no se podrá revertir.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <a href="<?php echo base_url('c_directory/delete/'.$item->directory_id)?>" class="btn btn-danger">Aceptar</a>
            </div>
        </div>
    </div>
</div>