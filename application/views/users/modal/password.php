<div class="modal fade" id="modal_password" tabindex="-1" aria-labelledby="modal_password" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_password"><i class="fas fa-lock" style="color:#603F8B;"></i> Actualizar contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('users/update_password/'.$this->session->user_id)?>" method="POST">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Nueva contraseña</label>
                        <div class="col-sm-9">
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="confirm_password" class="col-sm-3 col-form-label">Confirmar contraseña</label>
                        <div class="col-sm-9">
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                        </div>
                    </div>
                    <span id="message"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" id="update" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>