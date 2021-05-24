<div class="container mt-5">
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
    
    <!--- password update view --->
    <?php $this->load->view('users/modal/password');?>
    <!--- end password view --->
    <!-- Success message flashdata -->
    <?php  if($this->session->flashdata('msg')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $this->session->flashdata('msg') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif;?>
    <!-- End success message flashdata -->

    <div class="justify-content-center">
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title"><i class="fas fa-user-astronaut fa-2x" style="color:#603F8B;"></i> Mi
                            perfil</h4>
                        <form action="<?php echo base_url('users/update_profile/'.$user->user_id); ?>"
                            method="POST">
                            <div class="form-group row">
                                <label for="username" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" name="username" id="username"
                                        value="<?php echo $user->username ?>" class="form-control">
                                    <span id="message_username"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" id="email"
                                        value="<?php echo $user->email ?>" class="form-control">
                                    <span id="message_email"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                        data-target="#modal_password">
                                        Actualizar contraseña
                                    </button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-10">
                                    <?php if ($this->session->status === 'activo'): ?>
                                    <p class="mt-2"><i class="fas fa-check-circle" style="color:green;"></i> Activo</p>
                                    <?php endif?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="range" class="col-sm-2 col-form-label">Perfil</label>
                                <div class="col-sm-10">
                                    <?php if ($this->session->range === 'admin'): ?>
                                    <p class="mt-1">Administrador</p>
                                    <?php else: ?>
                                    <p class="mt-1">Usuario</p>
                                    <?php endif?>
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <a href="<?php echo base_url('users/index') ?>" class="btn btn-secondary">Regresar</a>
                                <input type="submit" value="Actualizar datos" class="btn btn-primary"
                                    id="update_profile">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/js/password.js') ?>"></script>
<script src="<?php echo base_url('assets/js/profile.js')?>"></script>