<div class="container">
    <!-- Success message flashdata -->
    <?php if ($this->session->flashdata('msg')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $this->session->flashdata('msg') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif;?>
    <!-- End success message flashdata -->
    <h5 class="text-left text-muted mt-4"><i class="fas fa-sitemap" style="color:#603F8B;"></i> Directorio</h5>
    <div class="justify-content-center">
        <div class="card my-3">
            <div class="card-body">
                <a href="<?php echo base_url('c_directory/create') ?>" class="btn btn-sm btn-primary"><i
                        class="fas fa-user-plus"></i> Agregar persona</a>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow mt-3">
                            <div class="card-header border-0 bg-white">
                                <h6 class="text-muted">Directorio principal</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Puesto</th>
                                                <th scope="col">Correo</th>
                                                <th scope="col">Teléfono</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $item): ?>
                                            <?php echo $this->load->view('directory/modal/delete', array('item' => $item), true); ?>
                                            <tr>
                                                <td><?=$item->directory_id?></td>
                                                <td><?=$item->employee_name?> </td>
                                                <td><?=$item->employee_charge?></td>
                                                <td><?=$item->employee_email?></td>
                                                <td><?=$item->employee_phone?></td>
                                                <td>
                                                    <a href="<?php echo base_url('c_directory/edit/' . $item->directory_id) ?>"
                                                        class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        data-toggle="modal"
                                                        data-target="#delete-<?php echo $item->directory_id?>">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>