<body>
    <main role="main" class="flex-shrink-0 vh-100">
        <div class="jumbotron"
            style="background-image: url(<?php echo base_url('assets/img/contact_banner.jpg') ?>); opacity: 0.8; ">
            <h2 class="text-center" style="color:black;">¡Estamos para ayudar!</h2>
            <p class="lead text-muted"></p>
        </div>
        <div class="container d-flex justify-content-center my-2">
            <div class="col-md-4 text-center">
                <h6 class="text-uppercase text-muted">¡Llámenos!</h6>
                <p class="lead"><i class="fas fa-phone-square-alt"></i> 9 42 71 70
                    ext. 56026, 56230</p>
            </div>
            <div class="col-md-4 text-center">
                <h6 class="text-uppercase text-muted">Ubicación</h6>
                <p class="lead"><i class="fas fa-map-marker-alt"></i> Calle 11 s/n x 4 y 8, Fracc. Prado Norte</p>
            </div>
            <div class="col-md-4 text-center">
                <h6 class="text-muted text-uppercase">Google Maps</h6>
                <a href="https://goo.gl/maps/FdAW4LYfAPz6P5HP8" class="btn btn-primary" target="_blank"><i
                        class="fas fa-map-marked-alt"></i> Ver mapa</a>
            </div>
        </div>
        <div class="container d-flex justify-content-center my-2">
            <div class="col-md-12">
                <h4 class="text-center">¡Permítanos ayudarle!</h4>
                <p class="text-muted text-center">Para nosotros es imporante tú opinión </p>
            </div>
        </div>
        <div class="container justify-content-center my-2">
            <form action="#" method="post">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="name">Nombre</label>
                        <input type="text" name="" id="" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="col-md-6">
                        <label for="email">Correo</label>
                        <input type="email" name="" id="" class="form-control" placeholder="micorreo@ejemplo.com">
                    </div>
                    <div class="col-md-12">
                        <label for="help">¿Cómo podemos ayudarte?</label>
                        <textarea name="help" id="" cols="30" rows="10" class="form-control" placeholder="¿Cómo podemos ayudarte?"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Enviar <i class="fas fa-paper-plane"></i></button>
            </form>
        </div>
    </main>
</body>