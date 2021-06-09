<div class="container">
    <div class="justify-content-center">
        <h4 class="text-muted my-3"><i class="fas fa-clipboard-list" style="color:#603F8B;"></i> Trámites y servicios
        </h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="<?php echo base_url('c_service/create') ?>" class="btn btn-sm btn-primary my-3"><i
                                class="fas fa-folder-plus"></i> Crear servicio</a>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Título</th>
                                        <th scope="col">Contendio</th>
                                        <th scope="col">Dirigido</th>
                                        <th scope="col">Requisitos</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($services as $service): ?>
                                    <tr>
                                        <td><?=$service->service_id?></td>
                                        <td><?=$service->service_title?></td>
                                        <td class="text-wrap text-break">
                                            <?=$service->service_content?>
                                        </td>
                                        <td><?=$service->service_directed?></td>
                                        <td><?=$service->service_requirements?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?php echo base_url('c_service/edit/' . $service->service_id) ?>"
                                                    class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i
                                                        class="fas fa-trash-alt"></i></a>
                                            </div>
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