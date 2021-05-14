<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm my-3">
                <div class="card-header border-0 bg-white text-center">
                    <h1><i class="fas fa-user-plus"></i> Registro</h1>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('users/store'); ?>" method="post" autocomplete="off">
                        <div class="form-group">
                            <label for="username">Nombre de usuario <small style="color:red;">*</small></label>
                            <input type="text" name="username" id="username" class="form-control" autocomplete="off"
                                value="<?= set_value('username') ?>" required>
                            <small style="color:red;"><?=form_error('username')?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo <small style="color:red;">*</small></label>
                            <input type="email" name="email" id="email" class="form-control" autocomplete="off"
                                value="<?= set_value('email') ?>" required>
                            <small style="color:red;"><?= form_error('email')?></small>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="password">Contraseña <small style="color:red;"></small></label>
                                <input type="password" name="password" id="password" class="form-control"
                                    autocomplete="off" required>
                                <small style="color:red;"><?= form_error('password')?></small>
                            </div>
                            <div class="col">
                                <label for="password_c">Confirmar contraseña <small style="color:red;">*</small></label>
                                <input type="password" name="password_c" id="password_c" class="form-control"
                                    autocomplete="off" required>
                                <small style="color:red;"><?= form_error('password_c')?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="range">Perfil <small style="color:red;">*</small></label>
                            <select name="range" id="range" class="form-control" required>
                                <option value="">Seleccione un perfil</option>
                                <option <?= set_value('range') == 'admin' ? 'selected' :''; ?> value="admin">
                                    Administrador</option>
                                <option <?= set_value('range') == 'user' ? 'selected' :''; ?> value="user">Usuario
                                </option>
                            </select>
                            <small style="color:red;"><?= form_error('range')?></small>
                        </div>
                        <div class="form-group my-3">
                            <a href="<?php echo base_url('register/index') ?>" class="btn btn-secondary">Regresar</a>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>