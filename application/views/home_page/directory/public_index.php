<body>
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="justify-content-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow-sm my-3">
                            <div class="card-header border-0 bg-white">
                                <h3 class="text-center text-muted">
                                    Directorio
                                </h3>
                            </div>
                            <div class="card-body">
                                <?php if(count($data) > 0): ?>
                                <div class="row">
                                    <?php foreach($data as $item): ?>
                                    <div class="col-md-3">
                                        <div class="card shadow my-2">
                                            <div class="card-body text-center">
                                                <i class="fas fa-user-tie fa-3x" style="color:#00A3A3"></i>
                                                <h5 class="mb-0 mt-3"><?= $item->employee_name ?></h5>
                                                <p class="mb-3 text-muted"><?= $item->employee_charge?></p>
                                                <div class="d-grid">
                                                    <p class="mb-3"><i class="fas fa-envelope-open-text"></i>
                                                        <?= $item->employee_email?></p>
                                                    <p class="mb-3"><i class="fas fa-phone-square-alt"></i>
                                                        <?= $item->employee_phone?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                                <?php else: ?>

                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>