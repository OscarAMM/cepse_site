<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<body class="d-flex flex-column h-100">
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="row d-flex justify-content-center my-5">
                <div class="col-md-8">
                    <h2 class="display-4 text-left">Unidad Estatal de Participación Social en la
                        Eduación</h2>
                    <p class="lead text-muted">Bienvenido a la página oficial de UEPSE</p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/right-img.jpg') ?>" alt="" srcset="" class="img-fluid">
                </div>
            </div>
            <!-- carousel --->
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 my-5">
                    <div id="carouselExampleIndicators" class="carousel slide shadow" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-secondary"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-secondary"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-secondary"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card">
                                    <div class="card-header border-0 bg-white">
                                        <h3 class="text-muted">Prueba de banner</h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing
                                            elit. Quos maxime ea porro dignissimos quod incidunt eos ullam veniam, neque
                                            unde quisquam cum laudantium, iste magni exercitationem obcaecati commodi?
                                            Enim, quo?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end carousel --->
            <!---- First section (General information) ---->
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 order-md-1">
                    <?php foreach ($data as $item): ?>
                    <h4 class="text-center text-muted"><?=$item->title_one?></h4>
                    <p class="text-left text-justify"><?=$item->paragraph_one?></p>
                    <?php endforeach;?>
                </div>
                <div class="col-md-4 order-md-2">
                    <div class="card shadow">
                        <div class="card-header border-0 bg-white">
                            <h4 class="text-muted text-center">Últimos avisos</h4>
                        </div>
                        <div class="card-body">
                            <div class="list-group">
                                <?php if (count($notices) > 0): ?>
                                <?php foreach ($notices as $notice): ?>

                                <a href="<?php echo base_url('welcome/show_announcement/' . $notice->notice_id) ?> "
                                    class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1"><?=$notice->notice_title?></h5>
                                    </div>
                                    <p class="mb-1">
                                        <?php echo substr($notice->notice_content, 0, 50) ?>
                                    </p>
                                    <small class="text-muted">Publicado: <i class="far fa-clock"></i>
                                        <?=$notice->time?></small>
                                </a>

                                <?php endforeach;?>
                                <?php else: ?>
                                <p class="text-muted">No se tiene ningún aviso aún <i class="fas fa-search"></i></p>
                                <?php endif?>
                            </div>
                        </div>
                        <div class="card-footer border-0 bg-white">
                            <div class="text-right">
                                <a href="<?php echo base_url('welcome/announcement') ?>"
                                    class="btn btn-primary btn-block">Ver más <i
                                        class="fas fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second section  (What they promove) --->
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 order-md-1">
                    <?php foreach ($data as $item): ?>
                    <h4 class="text-center text-muted"><?=$item->title_two?></h4>
                    <p class="text-left"><?=$item->paragraph_two?></p>
                    <?php endforeach;?>
                </div>
                <div class="col-md-4 order-md-2">
                    <div class="card shadow">
                        <div class="card-header border-0 bg-white">
                            <h4 class="text-muted text-center">
                                Trámites y servicios
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="list-group">
                                <?php if (count($services) > 0): ?>
                                <?php foreach ($services as $service): ?>
                                <a href="<?php echo base_url('welcome/show_service/'.$service->service_id); ?> "
                                    class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1"><?=$service->service_title?></h5>
                                    </div>
                                    <p class="mb-1">
                                        <?php echo substr($service->service_content, 0, 50) ?>
                                    </p>

                                </a>
                                <?php endforeach;?>
                                <?php else: ?>
                                <p class="text-muted">No se tiene ningún servicio y/o trámite <i
                                        class="fas fa-search"></i></p>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="card-footer border-0 bg-white">
                            <div class="text-right">
                                <a href="<?php echo base_url('welcome/services') ?>"
                                    class="btn btn-primary btn-block">Ver más <i
                                        class="fas fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fourth section ---->
            <div class="row d-flex justify-content-center my-2">

                <div class="col-md-8 order-md-1">
                    <?php foreach ($data as $item): ?>
                    <h4 class="text-center text-muted"><?=$item->title_three?></h4>
                    <p class="text-left"><?=$item->paragraph_three?></p>
                    <?php endforeach;?>
                </div>
                <div class="col-md-4 order-md-2">
                    <div class="card shadow">
                        <div class="card-header border-0 bg-white">
                            <h4 class="text-muted text-center">Contáctenos</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">Comunícate con nosotros para tener un trato directo con la UEPSE</p>
                            <a href="<?php echo base_url('welcome/contact')?>" class="btn btn-primary btn-block">Ver <i
                                    class="fas fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </main>
</body>

</html>