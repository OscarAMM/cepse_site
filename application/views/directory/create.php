<div class="container">
<!-- error --->
<?php if (validation_errors()): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h1 class="alert-heading">¡Error!</h1>
        <p>Parece que tienes algunos errores:</p>
        <?php echo validation_errors(); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif?>
    <!---- end error --->
    <div class="justify-content-center">
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow my-3">
                    <div class="card-header border-0 bg-white">
                        <h4 class="text-muted"><i class="fas fa-user-plus fa-2x" style="color:#603F8B;"></i> Agregar
                            persona</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('c_directory/store');?>" method="post">
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" name="employee_name" id="name" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="charge" class="col-sm-2 col-form-label">Cargo</label>
                                <div class="col-sm-10">
                                    <input type="text" name="employee_charge" id="charge" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Correo de contacto</label>
                                <div class="col-sm-10">
                                    <input type="text" name="employee_email" id="email" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="employee_phone" class="col-sm-2 col-form-label">Teléfono de contacto</label>
                                <div class="col-sm-10">
                                    <input type="text" name="employee_phone" id="phone" class="form-control" maxlength="10" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>