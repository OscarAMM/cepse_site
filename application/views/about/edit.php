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
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="card shadow-sm mt-5">
                <div class="card-header border-0 bg-white">
                    <h5 class="text-muted"><i class="fas fa-pen-square" style="color:#603F8B;"></i> Actualizar contenido
                        'Sobre nosotros'
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('about/update/'.$data->about_id) ?>" method="POST">
                        <div class="form-group row">
                            <label for="objective" class="col-sm-2 col-form-label">Título uno</label>
                            <div class="col-sm-10">
                                <input type="text" name="objective_title" value="<?php echo $data->objective_title?> "
                                    id="objective" placeholder="p.ej. Objetivo" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="objective_text" class="col-sm-2 col-form-label">Descripción uno</label>
                            <div class="col-sm-10">
                                <textarea name="objective_text" id="objective_text" cols="30" rows="10"
                                    class="form-control"><?php echo $data->objective_text ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title_two" class="col-sm-2 col-form-label">Título dos</label>
                            <div class="col-sm-10">
                                <input type="text" name="mission_title" value="<?php echo $data->mission_title?>" id="title_two" class="form-control"
                                    placeholder="p.ej. Misión">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text_two" class="col-sm-2 col-form-label">Descripción dos</label>
                            <div class="col-sm-10">
                                <textarea name="mission_text" id="text_two" cols="30" rows="10"
                                    class="form-control"><?php echo $data->mission_text ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="vision" class="col-sm-2 col-form-label">Título tres</label>
                            <div class="col-sm-10">
                                <input type="text" name="vision_title" value="<?php echo  $data->vision_title?> " id="vision" placeholder="p.ej. Visión"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text_three" class="col-sm-2 col-form-label">Descripción tres</label>
                            <div class="col-sm-10">
                                <textarea name="vision_text" id="text_three" cols="30" rows="10"
                                    class="form-control"><?php echo $data->vision_text?> </textarea>
                            </div>
                        </div>
                        <div class="form-group  text-right">
                            <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>