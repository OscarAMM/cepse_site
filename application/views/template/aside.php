<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse vh-100">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link dashboard-link href=" #"><span
                        data-feather="home"></span>Inicio<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Información</span><a class="d-flex align-items-center text-muted" href="#"
                aria-label="Add a new report"><span data-feather="plus-circle"></span></a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link dashboard-link" data-toggle="collapse" href="#user_collapse" role="button"
                    aria-expanded="false" aria-controls="user_collapse">
                    <i class="fas fa-id-badge"></i> Mi cuenta <i class="fas fa-caret-down mt-1 float-right"></i>
                </a>
                <div class="collapse" id="user_collapse">
                    <ul class="list-unstyled">
                        <li class="nav-item">
                            <a href="#" class="nav-link dashboard-link ml-3"><i class="fas fa-user"></i>
                                <?= $this->session->username ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dashboard-link ml-3">
                                <i class="fas fa-id-card"></i> <?= $this->session->range?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('login/logout')?>" class="nav-link dashboard-link ml-3"><i
                                    class="fas fa-sign-out-alt"></i>Cerrar sesión</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>