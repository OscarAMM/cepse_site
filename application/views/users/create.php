<div class="container">
    <!-- error --->
    <?php if(validation_errors()):?>
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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm mt-5">
                <div class="card-header border-0 bg-white text-center">
                    <h1 class="h1 text-muted">Registro</h1>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('users/store'); ?>" method="post" autocomplete="off">
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Nombre<small
                                    style="color:red;">*</small></label>
                            <div class="col-sm-10">
                                <input type="text" name="username" id="username" class="form-control" autocomplete="off"
                                    value="<?= set_value('username') ?>" required>
                                <small style="color:red;"><?=form_error('username')?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Correo <small
                                    style="color:red;">*</small></label>
                            <div class="col-sm-10">
                                <input type="email" name="email" id="email" class="form-control" autocomplete="off"
                                    value="<?= set_value('email') ?>" required>
                                <small style="color:red;"><?= form_error('email')?></small>
                            </div>
                        </div>
                        <div class="form-group row">

                            <label for="password" class="col-sm-2 col-form-label">Contraseña <small
                                    style="color:red;"></small></label>
                            <div class="col-sm-10">
                                <input type="password" name="password" id="password" class="form-control"
                                    autocomplete="off" required>
                                <small style="color:red;"><?= form_error('password')?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password_c" class="col-sm-2 col-form-label">Confirmar contraseña <small
                                    style="color:red;">*</small></label>
                            <div class="col-sm-10">
                                <input type="password" name="password_c" id="password_c" class="form-control"
                                    autocomplete="off" required>
                                <small style="color:red;"><?= form_error('password_c')?></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="range" class="col-sm-2 col-form-label">Perfil <small
                                    style="color:red;">*</small></label>
                            <div class="col-sm-10">
                                <select name="range" id="range" class="form-control" required>
                                    <option value="">Seleccione un perfil</option>
                                    <option <?= set_value('range') == 'admin' ? 'selected' :''; ?> value="admin">
                                        Administrador</option>
                                    <option <?= set_value('range') == 'user' ? 'selected' :''; ?> value="user">Usuario
                                    </option>
                                </select>
                                <small style="color:red;"><?= form_error('range')?></small>
                            </div>
                        </div>
                        <div class="form-group my-3 text-right">
                            <button type="submit" class="btn btn-sm btn-primary font-weight-bold">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>