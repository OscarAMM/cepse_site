<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <!---Fontawesome--->
    <script src="https://kit.fontawesome.com/8efbe29298.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg shadow-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo base_url(); ?>Welcome/index">UEPSE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url();?>Welcome/index">Inicio</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid my-4">
            <img src="<?php echo base_url();?>assets/img/logo_segey.jpeg" alt="logo segey" class="img-fluid"
                width="450px">
            <div class="row justify-content-center">
                <div class="card shadow mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <img src="<?php echo base_url();?>assets/img/banner_login.jpg"  width="540px;" class="img-fluid" alt="banner_side">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h4 class="card-title">Iniciar sesión</h4>
                                <h5 class="card-title text-monospace">Unidad Estatal de Participación Social en la
                                    Educación</h5>
                                <div>
                                    <form action="<?php echo base_url();?>auth/login" method="post">
                                        <div class="form-group">
                                            <label for="user">Usuario</label>
                                            <input type="text" name="identity" id="username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>
                                        <div class="form-group">

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>