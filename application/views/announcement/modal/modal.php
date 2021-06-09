<div class="modal fade" id="files-<?php echo $item->notice_id?>" tabindex="-1"
    aria-labelledby="files-<?php echo $item->notice_id?>label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="files-<?php echo $item->notice_id?>label">Archivos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('c_announcement/upload_files/'.$item->notice_id) ?>" method="POST">
                <div class="modal-body">
                    <?php  $file = $this->AnnouncementModel->getFile($item->notice_id)?>
                    <?php foreach($file as $fil): ?>
                    <a href="<?php echo base_url('assets/uploads/files/'.$fil->file_name);?>" target="_blank"
                        class="btn btn-sm btn-primary my-2"><i class="fas fa-file-download"></i>
                        <?php echo $fil->file_name?></a>
                    <?php endforeach ?>


                    <h6 class="text-muted">Cargar archivos</h6>
                    <input type="file" name="file_name[]" id="" class="form-control-file" multiple>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>