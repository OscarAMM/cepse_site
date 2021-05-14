<div class="jumbotron text-center">
    <h1 class="display-4 text-monospace text-uppercase">Usuarios</h1>
    <p class="lead">Se listan los usuarios del sitio de la Unidad Estatal de Participación Social en la Eduación
    </p>
</div>
<div class="container">
    <div class="btn-group">
        <a href="<?php echo base_url('Welcome')?>" class="btn btn-sm btn-secondary">Regresar</a>
        <a href="<?php echo base_url('users/create')?>" class="btn btn-sm btn-primary"><i class="fas fa-user-plus"></i>
            Crear
            usuario</a>
    </div>
    <!-- Success message flashdata -->
    <?php  if($this->session->flashdata('msg')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $this->session->flashdata('msg') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <!-- End success message flashdata -->
    <?php endif; ?>
    <div class="row justify-content-center my-3">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>Usuarios registrados</h3>
                    <div class="table-responsive">
                        <table class="table table-sm text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre usuario</th>
                                    <th>Correo</th>
                                    <th>Perfil</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data as $item): ?>
                                <tr>
                                    <td><?= $item->user_id ?></td>
                                    <td><?= $item->username?></td>
                                    <td><?= $item->email?></td>
                                    <td><?= $item->range?></td>
                                    <td col="3">
                                        <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-warning" title="Editar"><i class="fas fa-user-edit"></i></a>
                                        <a href="#" class="btn btn-sm btn-danger" title="Eliminar"><i class="fas fa-user-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>