<body class="d-flex flex-column">
    <main role="main" class="flex-shrink-0 vh-100">
        <div class="container">
            <div class="justify-content-center">
                <h1 class="text-muted text-center">Servicios y Trámites</h1>
                <div class="row my-5">
                    <?php if(count($services) > 0): ?>
                    <?php foreach($services as $service): ?>
                    <div class="col-md-4">
                        <div class="card shadow my-5">
                            <div class="card-header border-0 bg-white text-center">
                                <span class="badge badge-info">Trámite</span>
                            </div>
                            <div class="card-body">
                                <h4 class="text-muted text-center"><?php echo $service->service_title?></h4>
                                <?php echo substr($service->service_content, 0, 100 )?>
                            </div>
                            <div class="card-footer border-0 bg-white">
                                <a href="<?php echo base_url('welcome/show_service/'.$service->service_id)?>"
                                    class="btn btn-primary  btn-block">Ver más <i
                                        class="fas fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <?php else: ?>
                    <h4 class="text-center text-muted">No se han registrado servicios. Vuelva más tarde. <i
                            class="fas fa-running"></i></h4>
                    <?php endif;?>
                </div>

            </div>
        </div>
    </main>
</body>