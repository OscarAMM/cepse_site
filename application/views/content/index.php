<div class="container">
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
    <h5 class="text-left text-muted my-3">Contenido principal</h5>
    <div class="justify-content-center">
        <div class="card">
            <div class="card-body">
                <?php if(count($data) == 0):?>
                <a href="<?php echo base_url('content/create')?>" class="btn btn-sm btn-primary my-3"><i
                        class="fas fa-plus-circle"></i> Agregar contenido</a>
                <?php else: ?>
                <a href="#" class="btn btn-sm btn-warning mb-3">Editar contenido</a>
                <?php endif;?>
                <div class="row">
                    <?php foreach($data as $item):?>
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-header border-0 text-muted bg-white">
                                <h6 class="h6">Primera sección</h6>
                            </div>
                            <div class="card-body">
                                <h5 class="h5 card-title"><?= $item->title_one?></h5>
                                <p class="card-text text-justify"><?= $item->paragraph_one?></p>
                                <h6 class="h6 text-muted">Segunda sección</h6>
                                <h5 class="h5 card-title"><?= $item->title_two?></h5>
                                <p class="card-text text-justify"><?= $item->paragraph_two?></p>
                                <h6 class="h6 text-muted">Tercera sección</h6>
                                <h5 class="h5 card-title"><?= $item->title_three?></h5>
                                <p class="card-text text-justify"><?= $item->paragraph_three?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>