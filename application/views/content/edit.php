<div class="container">
    <!-- error --->
    <?php if (validation_errors()): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h1 class="alert-heading">¡Error!</h1>
        <p>Parece que tienes algunos errores:</p>
        <?php echo validation_errors(); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif?>
    <!---- end error --->
    <!-- Success message flashdata -->
    <?php if ($this->session->flashdata('msg')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo $this->session->flashdata('error_msg') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <!-- End success message flashdata -->
    <?php endif;?>
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="card shadow-sm mt-5">
                <div class="card-header border-0 bg-white">
                    <h5 class="text-muted"> <i class="fas fa-edit" style="color:#603F8B;"></i> Editar contenido
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('content/update/' . $data->content_id) ?>" method="POST">
                        <h6 class="card-title border-bottom"><i class="fas fa-bookmark" style="color:#CDC252;"></i>
                            Primera sección</h6>
                        <div class="form-group row">
                            <label for="first_title" class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <input type="text" name="title_one" id="first_title"
                                    value="<?php echo $data->title_one ?>" class="form-control">
                                <span id="one"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="paragraph_one" class="col-sm-2 col-form-label">Párrafo</label>
                            <div class="col-sm-10">
                                <textarea name="paragraph_one" id="paragraph_one" cols="30" rows="10"
                                    class="form-control"><?php echo $data->paragraph_one ?></textarea>
                                <span id="one_p"></span>
                            </div>
                        </div>
                        <h6 class="card-title border-bottom"><i class="fas fa-bookmark" style="color:#CDC252;"></i>
                            Segunda sección</h6>
                        <div class="form-group row">
                            <label for="second_title" class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <input type="text" name="title_two" value="<?php echo $data->title_two ?>"
                                    id="second_title" class="form-control">
                                    <span id="two"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="second_paragraph" class="col-sm-2 col-form-label">Párrafo</label>
                            <div class="col-sm-10">
                                <textarea name="paragraph_two" id="second_paragraph" cols="30" rows="10"
                                    class="form-control"><?php echo $data->paragraph_two ?></textarea>
                                    <span id="two_p"></span>
                            </div>
                        </div>
                        <h6 class="card-title border-bottom"><i class="fas fa-bookmark" style="color:#CDC252;"></i>
                            Tercera sección</h6>
                        <div class="form-group row">
                            <label for="third_title" class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <input type="text" name="title_three" value="<?php echo $data->title_three ?>"
                                    id="third_title" class="form-control">
                                    <span id="three"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="third_paragraph" class="col-sm-2 col-form-label">Párrafo</label>
                            <div class="col-sm-10">
                                <textarea name="paragraph_three" id="third_paragraph" cols="30" rows="10"
                                    class="form-control"><?php echo $data->paragraph_three ?></textarea>
                                    <span id="three_p"></span>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" id="update" class="btn btn-sm btn-primary font-weight-bold">Actualizar
                                datos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/js/content.js') ?>"></script>