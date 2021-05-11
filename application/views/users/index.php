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
    <title>UEPSE</title>
</head>

<body>
    <main role="main" class="flex-shrink-0">
        <div class="jumbotron text-center">
            <h1 class="display-4 text-monospace text-uppercase">Usuarios</h1>
            <p class="lead">Se listan los usuarios del sitio de la Unidad Estatal de Participación Social en la Eduación
            </p>
        </div>
        <div class="container">
            <div class="btn-group">
                <a href="<?php echo base_url('Welcome')?>" class="btn btn-sm btn-secondary">Regresar</a>
                <a href="<?php echo base_url('Register/create')?>" class="btn btn-sm btn-primary"><i
                        class="fas fa-user-plus"></i> Crear
                    usuario</a>
            </div>
            <div class="row justify-content-center my-3">
                <div class="col-md-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h3>Usuarios registrados</h3>
                            <div class="table-responsive">
                                <table class="table table-sm text-center">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre usuario</th>
                                            <th>Correo</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>