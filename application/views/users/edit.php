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
            <div class="card shadow-sm my-3">
                <div class="card-header border-0 bg-white text-center">
                    <h1><i class="fas fa-user-edit"></i>Edición de datos</h1>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('c_users/update/' . $user->user_id); ?>" method="post"
                        autocomplete="off">
                        <div class="form-group">
                            <label for="username">Nombre de usuario <small style="color:red;">*</small></label>
                            <input type="text" name="username" id="username" class="form-control" autocomplete="off"
                                value="<?php echo $user->username ?>">
                            <small style="color:red;"><?=form_error('username')?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo <small style="color:red;">*</small></label>
                            <input type="email" name="email" id="email" class="form-control" autocomplete="off"
                                value="<?php echo $user->email ?>" required>
                            <small style="color:red;"><?=form_error('email')?></small>
                        </div>
                        <div class="form-group">
                            <label for="range">Perfil <small style="color:red;">*</small></label>
                            <select name="range" id="range" class="form-control" required>
                                <option value="<?php echo $user->range ?>"><?php echo $user->range ?></option>
                                <?php if ($user->range === 'admin'): ?>
                                <option value="user">Usuario</option>
                                <?php else: ?>
                                <option value="admin">Administrador</option>
                                <?php endif?>
                            </select>
                            <small style="color:red;"><?=form_error('range')?></small>
                        </div>
                        <div class="form-group my-3">
                            <a href="<?php echo base_url('c_users/index') ?>" class="btn btn-secondary">Regresar</a>
                            <button type="submit" class="btn btn-success">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>