<body class="d-flex flex-column h-100">
    <main role="main" class="flex-shrink-0 vh-100">
        <div class="container">
            <div class="justify-content-center">
                <h1 class="text-muted text-center my-5 display-4 ">Avisos</h1>
                <div class="row my-5">
                    <?php if(count($data) > 0):?>
                    <?php foreach($data as $notice):?>
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-header border-0 bg-white">
                                <h4 class="text-muted text-center"><?= $notice->notice_title?></h4>
                            </div>
                            <div class="card-body">
                                <?php echo substr($notice->notice_content, 0, 100)?>

                            </div>
                            <div class="card-footer bg-white border-0">
                                <a href="#" class="btn btn-primary text-uppercase mb-3">Leer más</a>
                                <p class="small text-muted"><i class="far fa-clock"></i> Publicado: <?= $notice->time ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <?php else: ?>
                    <div class="col-md-12">
                        <h4 class="text-center text-monospace">Aún no hay avisos <i class="fas fa-search"></i></h4>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
</body>