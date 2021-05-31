<?php 
defined('BASEPATH') or exit('No direct script access allowed');
?>


<body>
    <main role="main" class="flex-shrink-0">
        <div class="jumbotron text-center mb-3">
            <h1 class="font-weight-bold text-uppercase">Unidad Estatal De Participación Social en la Educación</h1>
        </div>
        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="col">
                    <h3 class="text-center text-monospace border-top border-bottom my-2">Bienvenidos a la página de la
                        Unidad Estatal de Participación
                        Escolar en la Eduación.</h3>
                </div>
            </div>
            <!---- First section (General information) ---->
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 order-md-1">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 order-md-2">
                <?php foreach($data as $item): ?>
                    <h4 class="text-center"><?= $item->title_one?></h4>
                    <p class="text-center"><?= $item->paragraph_one?></p>
                <?php endforeach;?>
                </div>
            </div>
            <!-- Second section  (What they promove) --->
            <div class="row d-flex justify-content-center my-2">
                <div class="col-md-4 order-md-2">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 order-md-1">
                <?php foreach($data as $item): ?>
                    <h4 class="text-center"><?= $item->title_two?></h4>
                    <p class="text-center"><?= $item->paragraph_two?></p>
                <?php endforeach;?>
                </div>
            </div>
            <!-- Fourth section ---->
            <div class="row d-flex justify-content-center my-2">
                <div class="col-md-4 order-md-1">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 order-md-2">
                <?php foreach($data as $item): ?>
                    <h4 class="text-center"><?= $item->title_three?></h4>
                    <p class="text-center"><?= $item->paragraph_three?></p>
                <?php endforeach;?>
                </div>
            </div>
            <hr>
        </div>
    </main>
</body>

</html>