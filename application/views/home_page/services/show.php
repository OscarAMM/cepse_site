<body>
    <main>
        <div class="container">
            <div class="justify-content-center my-5">
                <div class="card shadow-sm">
                    <div class="card-header border-0 bg-white">
                        <h3 class="text-muted text-center"> <?php echo $service->service_title?></h3>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="text-left text-muted">
                                        Dirigido
                                    </h5>
                                    <p class="text-justify"><?php echo $service->service_directed?> </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="text-left text-muted">Descripción</h5>
                                    <p class="text-justify"><?php echo $service->service_content?> </p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="tex-left text-muted">Requisitos</h5>
                                    <p class="text-justify"><?php echo $service->service_requirements?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>