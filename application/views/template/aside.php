<style>
.sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    z-index: 100;
    /* Behind the navbar */
    padding: 48px 0 0;
    /* Height of navbar */
    box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

.sidebar-sticky {
    position: relative;
    top: 0;
    height: calc(100vh - 48px);
    padding-top: .5rem;
    overflow-x: hidden;
    overflow-y: auto;
    /* Scrollable contents if viewport is shorter than content. */
}
</style>
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse ">
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Secciones</span><a class="d-flex align-items-center text-muted" href="#"
            aria-label="Add a new report"><span data-feather="plus-circle"></span></a>
    </h6>
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link dashboard-link" href="<?php echo base_url('welcome') ?>"><span
                        data-feather="home"></span><i class="fas fa-home"></i> Inicio<span
                        class="sr-only">(current)</span></a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Información</span><a class="d-flex align-items-center text-muted" href="#"
                aria-label="Add a new report"><span data-feather="plus-circle"></span></a>
        </h6>
        <ul class="nav flex-column mb-2">
            <?php if ($this->session->range === 'admin'): ?>
            <!--- content --->
            <li class="nav-item">
                <a class="nav-link dashboard-link" data-toggle="collapse" href="#content_collapse" role="button"
                    aria-expanded="false" aria-controls="content_collapse">
                    <i class="fas fa-folder"></i> Contenido <i class="fas fa-caret-down mt-1 float-right"></i>
                </a>
                <div class="collapse" id="content_collapse">
                    <ul class="list-unstyled">
                        <li class="nav-item">
                            <a href="<?php echo base_url('content/index')?>" class="nav-link dashboard-link ml-3"><i
                                    class="fas fa-cog"></i> Gestionar contenido principal</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('about/index')?>" class="nav-link dashboard-link ml-3"><i class="fas fa-question-circle"></i> Gestionar nosotros</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--- users --->
            <li class="nav-item">
                <a class="nav-link dashboard-link" data-toggle="collapse" href="#users_list_collapse" role="button"
                    aria-expanded="false" aria-controls="users_list_collapse">
                    <i class="fas fa-users"></i> Usuarios <i class="fas fa-caret-down mt-1 float-right"></i>
                </a>
                <div class="collapse" id="users_list_collapse">
                    <ul class="list-unstyled">
                        <li class="nav-item">
                            <a href="<?php echo base_url('users/index')?>" class="nav-link dashboard-link ml-3"><i
                                    class="fas fa-users-cog"></i> Gestionar usuarios</a>
                        </li>
                    </ul>
                </div>
            </li>
            <?php endif?>
            <li class="nav-item">
                <a class="nav-link dashboard-link" data-toggle="collapse" href="#user_collapse" role="button"
                    aria-expanded="false" aria-controls="user_collapse">
                    <i class="fas fa-id-badge"></i> Mi cuenta <i class="fas fa-caret-down mt-1 float-right"></i>
                </a>
                <div class="collapse" id="user_collapse">
                    <ul class="list-unstyled">
                        <li class="nav-item">
                            <a href="<?php echo base_url('users/profile/'. $this->session->user_id)?>"
                                class="nav-link dashboard-link ml-3"><i class="fas fa-user"></i>
                                <?=$this->session->username?></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dashboard-link ml-3">
                                <i class="fas fa-id-card"></i> <?=$this->session->range?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('login/logout') ?>" class="nav-link dashboard-link ml-3"><i
                                    class="fas fa-sign-out-alt"></i>Cerrar sesión</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>