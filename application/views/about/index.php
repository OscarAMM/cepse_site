<div class="container">
    <!-- Success message flashdata -->
    <?php if ($this->session->flashdata('msg')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $this->session->flashdata('msg') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <!-- End success message flashdata -->
    <?php endif;?>
    <h5 class="text-left text-muted my-3">Sobre nosotros</h5>
    <div class="justify-content-center">
        <div class="card my-3">
            <div class="card-body">
                <?php if (!count($data) > 0): ?>
                <a href="<?php echo base_url('about/create') ?>" class="btn btn-sm btn-primary"><i
                        class="fas fa-plus-circle"></i> Agregar contenido</a>
                <?php endif;?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card my-4 shadow">
                            <div class="card-body">
                                <?php foreach ($data as $item): ?>
                                <div class="text-right my-2">
                                    <a href="<?php echo base_url('about/edit/'.$item->about_id)?>"
                                        class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Editar
                                        contenido</a>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="text-muted text-center"><?=$item->objective_title?></h5>
                                        <p class="justify"><?=$item->objective_text?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="text-muted text-center"><?=$item->mission_title?></h5>
                                        <p class="justify"><?=$item->mission_text?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="text-muted text-center"><?=$item->vision_title?></h5>
                                        <p class="justify"><?=$item->vision_text?></p>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>