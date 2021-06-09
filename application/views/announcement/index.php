<div class="container">
    <div class="justify-content-center">
        <h4 class="text-muted my-3"><i class="fas fa-bullhorn" style="color:#603F8B;"></i> Avisos</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="<?php echo base_url('c_announcement/create')?>" class="btn btn-sm btn-primary my-3"><i
                                class="fas fa-folder-plus"></i> Crear aviso</a>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Título</th>
                                        <th scope="col">Contendio</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($data as $item): ?>
                                    <?php echo $this->load->view('announcement/modal/modal', array('item' => $item), true);?>
                                    <tr>
                                        <td><?= $item->notice_id ?></td>
                                        <td><?= $item->notice_title?></td>
                                        <td><p class="text-justify"> <?= $item->notice_content ?></p></td>
                                        <td>
                                            <a href="<?php echo base_url('c_announcement/edit/'.$item->notice_id)?>"
                                                class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                                data-target="#files-<?php echo $item->notice_id?>">
                                                <i class="fas fa-folder-open"></i>
                                            </button>
                                            <a href="#" class="btn btn-sm btn-danger"><i
                                                    class="fas fa-trash-alt"></i></a>
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
</div>