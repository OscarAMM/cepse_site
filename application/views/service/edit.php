<div class="container">
    <div class="justify-content-center">
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
        <?php endif;?>
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-sm my-3">
                    <div class="card-header border-0 bg-white">
                        <h4 class="text-muted text-center"><i class="fas fa-edit"></i> Editar servicio</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('c_service/update/'.$service->service_id) ?>" method="POST"
                            enctype='multipart/form-data'>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Servicio</label>
                                <div class="col-sm-10">
                                    <input type="text" name="service_title" value="<?php echo $service->service_title?>"
                                        id="title" class="form-control"
                                        placeholder="p.ej. Vinculación interinstitucional">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="service_content" class="col-sm-2 col-form-label">Descripción del
                                    servicio</label>
                                <div class="col-sm-10">
                                    <textarea name="service_content" id="service_content" cols="30" rows="10"
                                        class="form-control"><?php echo $service->service_content?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="directed" class="col-sm-2 col-form-label">Dirigido</label>
                                <div class="col-sm-10">
                                    <input type="text" name="service_directed" id="service_directed"
                                        class="form-control" placeholder="p.ej. Autoridades Municipales"
                                        value="<?php echo $service->service_directed?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="requirements" class="col-sm-2 col-form-label">Requisitos</label>
                                <div class="col-sm-10">
                                    <textarea name="service_requirements" id="requirements" cols="30" rows="10"
                                        class="form-control"><?php echo $service->service_requirements?> </textarea>
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-sm btn-primary">Actualizar datos</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
CKEDITOR.replace('service_content');
</script>
<script>
CKEDITOR.replace('service_requirements');
</script>