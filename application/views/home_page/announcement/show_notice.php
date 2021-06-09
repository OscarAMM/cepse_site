<div class="container">
    <div class="justify-content-center my-5">
        <div class="card shadow-sm">
            <div class="card-header border-0 bg-white">
                <h3 class="text-muted text-center"> <?php echo $notice->notice_title?></h3>
            </div>
            <div class="card-body">
                <div class="border-bottom border-top">
                    <div class="text-left my-3">
                        <small class="text-muted"><i class="far fa-calendar-alt"></i> Publicado: <?php echo $notice->time ?></small>
                        <span class="text-muted float-right"><?php echo $notice->place?></span>
                    </div>
                </div>
                <div class="container">
                    <p class="text-justify">
                        <?php echo $notice->notice_content ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>