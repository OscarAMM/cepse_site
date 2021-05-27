<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"> </script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"> </script>
    <!---Fontawesome--->
    <script src="https://kit.fontawesome.com/8efbe29298.js" crossorigin="anonymous"></script>
    <title>UEPSE | About us</title>
</head>

<body>
    <main role="main" class="flex-shrink-0">
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