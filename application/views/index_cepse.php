<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CEPSE</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"> </script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"> </script>
    <!---Fontawesome--->
    <script src="https://kit.fontawesome.com/8efbe29298.js" crossorigin="anonymous"></script>

</head>

<body class="d-flex flex-column h-100">
    <main role="main" class="flex-shrink-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">UEPSE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Avisos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Encuesta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Comité de Salud</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nosotros
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Programas</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-users"></i> Directorio</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="nav_services" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Más servicios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="nav_services">
                            <a class="dropdown-item" href="#">Trámites y servicios</a>
                            <a class="dropdown-item" href="#">Contáctenos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Marco jurídico</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="jumbotron text-center my-4">
                <h1 class="font-weight-bold text-uppercase">Unidad Estatal De Participación Social en la Educación</h1>
            </div>
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
                    <h4 class="text-center">Something</h4>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vel tenetur
                        explicabo consequatur, quod temporibus deserunt rerum laudantium laboriosam error corporis,
                        fugit quo sequi mollitia cupiditate itaque suscipit veritatis! Dolorum.</p>
                </div>
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
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="text-center">Something</h4>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vel tenetur
                    explicabo consequatur, quod temporibus deserunt rerum laudantium laboriosam error corporis,
                    fugit quo sequi mollitia cupiditate itaque suscipit veritatis! Dolorum.</p>
            </div>
        </div>
        <!-- third section (CPEE) --->
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
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-8 order-md-2">
                <h4 class="text-center">Something</h4>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vel tenetur
                    explicabo consequatur, quod temporibus deserunt rerum laudantium laboriosam error corporis,
                    fugit quo sequi mollitia cupiditate itaque suscipit veritatis! Dolorum.</p>
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
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-8 order-md-2">
                <h4 class="text-center">Something</h4>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vel tenetur
                    explicabo consequatur, quod temporibus deserunt rerum laudantium laboriosam error corporis,
                    fugit quo sequi mollitia cupiditate itaque suscipit veritatis! Dolorum.</p>
            </div>
        </div>
        <hr>
    </main>
    <footer>
        <div class="footer mt-auto py-3">
            <div class="row">
                <div class="col">
                    <h4 class="text-center">CONTÁCTENOS</h4>
                    <p class="text-center"><i class="fas fa-phone-square-alt"></i> 9-42-71-70 Ext. 56026,56230</p>
                </div>
                <div class="col">
                    <h4 class="text-center">UBICACIÓN</h4>
                    <p class="text-center"><i class="fas fa-map-marker-alt"></i> Calle 11 s/n x 4 y 8, Fracc. Prado
                        Norte</p>
                </div>
                <div class="col text-center">
                    <h4 class="text-center">Google Maps</h4>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7449.393681913465!2d-89.597781!3d21.004786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8c06d4770745b183!2sCentro%20de%20Evaluaci%C3%B3n%20Educativa%20del%20Estado%20de%20Yucat%C3%A1n%20Edificio%20Paulo%20Freire!5e0!3m2!1ses-419!2sus!4v1618332236250!5m2!1ses-419!2sus"
                        width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div>
            </div>
        </div>
    </footer>
</body>

</html>