<div class="container mt-5">
    <div class="justify-content-center">
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title"><i class="fas fa-user-astronaut fa-2x" style="color:#603F8B;"></i> Mi
                            perfil</h4>
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="username" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" name="username" id="username"
                                        value="<?php echo $this->session->username?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" id="email"
                                        value="<?php echo $this->session->email?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                        data-target="#modal_password">
                                        Actualizar contraseña
                                    </button>
                                    <?php $this->load->view('users/modal/password'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-10">
                                    <?php if($this->session->status === 'activo'):?>
                                    <p class="mt-2"><i class="fas fa-check-circle" style="color:green;"></i> Activo</p>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="range" class="col-sm-2 col-form-label">Perfil</label>
                                <div class="col-sm-10">
                                    <?php if($this->session->range === 'admin'): ?>
                                    <p class="mt-1">Administrador</p>
                                    <?php else: ?>
                                    <p class="mt-1">Usuario</p>
                                    <?php endif?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>