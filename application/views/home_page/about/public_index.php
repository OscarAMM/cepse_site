<body>
    <main role="main" class="flex-shrink-0 vh-100">
        <div class="container">
            <div class="justify-content-center my-4">
                <div class="card shadow-sm">
                    <div class="card-header border-0 bg-white">
                        <h2 class="text-muted text-center">Nosotros</h2>
                    </div>
                    <div class="card-body">
                        <?php foreach($data as $item): ?>
                        <div class="row">
                            <div class="col-sm-2 text-center">
                                <i class="fas fa-bullseye fa-3x my-2"></i>
                            </div>
                            <div class="col-sm-10">
                                <h4 class="text-muted"><?php echo $item->objective_title?></h4>
                                <p class="text-muted"><?= $item->objective_text ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 text-center">
                                <i class="fas fa-rocket fa-3x my-2"></i>
                            </div>
                            <div class="col-sm-10">
                                <h4 class="text-muted"><?php echo $item->mission_title?></h4>
                                <p class="text-muted"><?= $item->mission_text ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 text-center">
                                <i class="fas fa-lightbulb fa-3x my-2"></i>
                            </div>
                            <div class="col-sm-10">
                                <h4 class="text-muted"><?php echo $item->vision_title?></h4>
                                <p class="text-muted"><?= $item->vision_text ?></p>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>