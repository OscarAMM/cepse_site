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
        <?php if($error):?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h1 class="alert-heading">¡Error!</h1>
            <p>Parece que tienes algunos errores:</p>
            <?php echo $error ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif;?>
        <!---- end error --->
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-sm my-3">
                    <div class="card-header border-0 bg-white">
                        <h4 class="text-muted text-center"><i class="fas fa-folder-plus"></i> Crear aviso</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('c_announcement/store')?>" method="POST"
                            enctype='multipart/form-data'>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-10">
                                    <input type="text" name="notice_title" id="title" class="form-control"
                                        placeholder="p.ej. Aviso importante">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="place" class="col-sm-2 col-form-label">Lugar de publicación</label>
                                <div class="col-sm-10">
                                <input type="text" name="place" id="place" class="form-control"  placeholder="p.ej. Mérida,Yucatán">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content" class="col-sm-2 col-form-label">Contenido</label>
                                <div class="col-sm-10">
                                    <textarea name="notice_content" id="content" cols="30" rows="10"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="file" class="col-sm-2 col-form-label">Archivos</label>
                                <div class="col-sm-10">
                                    <input type="file" name="file_name" id="file" class="form-control-file" multiple>
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
CKEDITOR.replace('notice_content');
</script>