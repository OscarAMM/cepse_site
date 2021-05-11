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
    <title>UEPSE | Registro</title>
</head>

<body>
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm my-3">
                        <div class="card-header border-0 bg-white text-center">
                            <h1><i class="fas fa-user-plus"></i> Registro</h1>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('Register/store'); ?>" method="post">
                                <div class="form-group">
                                    <label for="username">Nombre de usuario</label>
                                    <input type="text" name="username" id="username" class="form-control"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo</label>
                                    <input type="email" name="email" id="email" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="password_c">Confirmar contraseña</label>
                                    <input type="password" name="password_c" id="password_c" class="form-control"
                                        autocomplete="off">
                                </div>
                                <a href="<?php echo base_url('Register/index')?>" class="btn btn-secondary">Regresar</a>
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>