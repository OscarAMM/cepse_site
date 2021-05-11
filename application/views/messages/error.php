<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <h1 class="alert-heading">¡Error!</h1>
    <p>Parece que tienes algunos errores:</p>
        <?php echo validation_errors();?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>