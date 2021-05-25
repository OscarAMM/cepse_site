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
                    <h5 class="text-muted"><i class="fas fa-plus-circle" style="color:#603F8B;"></i> Agregar contenido
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('content/store')?>" method="POST">
                        <h6 class="card-title border-bottom"><i class="fas fa-bookmark" style="color:#CDC252;"></i>
                            Primera sección</h6>
                        <div class="form-group row">
                            <label for="first_title" class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <input type="text" name="title_one" id="title_one" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="text_first" class="col-sm-2 col-form-label">Párrafo</label>
                            <div class="col-sm-10">
                                <textarea name="paragraph_one" id="text-first" cols="30" rows="10"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <h6 class="card-title border-bottom"><i class="fas fa-bookmark" style="color:#CDC252;"></i>
                            Segunda sección</h6>
                        <div class="form-group row">
                            <label for="second_title" class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <input type="text" name="title_two" id="second_title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="second_paragraph" class="col-sm-2 col-form-label">Párrafo</label>
                            <div class="col-sm-10">
                                <textarea name="paragraph_two" id="second_paragraph" cols="30" rows="10"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <h6 class="card-title border-bottom"><i class="fas fa-bookmark" style="color:#CDC252;"></i>
                            Tercera sección</h6>
                        <div class="form-group row">
                            <label for="third_title" class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <input type="text" name="title_three" id="third_title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="third_paragraph" class="col-sm-2 col-form-label">Párrafo</label>
                            <div class="col-sm-10">
                                <textarea name="paragraph_three" id="third_paragraph" cols="30" rows="10"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-sm btn-primary font-weight-bold">Guardar datos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>