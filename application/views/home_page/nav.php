<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url('welcome/index')?>">UEPSE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('welcome/index')?>">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('welcome/announcement')?>">Avisos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('welcome/survey')?>">Encuesta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Comité de Salud</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Información
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a href="<?php echo base_url('welcome/aboutus'); ?>" class="dropdown-item"><i
                            class="fas fa-info-circle"></i> Nosotros</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-clipboard-list"></i> Programas</a>
                    <a class="dropdown-item" href="<?php echo base_url('welcome/directory') ?>"><i
                            class="fas fa-users"></i> Directorio</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="nav_services" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Más servicios
                </a>
                <div class="dropdown-menu" aria-labelledby="nav_services">
                    <a class="dropdown-item" href="<?php echo base_url('welcome/services')?>">Trámites y servicios</a>
                    <a class="dropdown-item" href="#">Contáctenos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Marco jurídico</a>
                </div>
            </li>
        </ul>
    </div>
</nav>