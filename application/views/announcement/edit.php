<div class="container">
    <div class="justify-content-center">
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-sm my-3">
                    <div class="card-header border-0 bg-white">
                        <h4 class="text-muted text-center"><i class="fas fa-folder-plus"></i> Editar aviso</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('c_announcement/update/' . $data->notice_id) ?>" method="POST"
                            enctype='multipart/form-data'>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-10">
                                    <input type="text" name="notice_title" id="title" class="form-control"
                                        placeholder="p.ej. Aviso importante" value="<?php echo $data->notice_title ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="place" class="col-sm-2 col-form-label">Lugar de publicación</label>
                                <div class="col-sm-10">
                                <input type="text" name="place" id="place" class="form-control" placeholder="p.ej. Mérida,Yucatán">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content" class="col-sm-2 col-form-label">Contenido</label>
                                <div class="col-sm-10">
                                    <textarea name="notice_content" id="content" cols="30" rows="10"
                                        class="form-control"><?php echo $data->notice_content ?></textarea>
                                </div>
                            </div>
                            <h5>Archivos guardados</h5>
                            <div class="form-group row">
                                <?php foreach($file as $fil):?>
                                <div class="col-md-3">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <img src="<?php echo base_url('assets/uploads/files/'.$fil->file_name)?>"
                                                class="img-fluid" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach?>
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