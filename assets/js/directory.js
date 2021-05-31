(function ($) {
    $('#name').on('keyup', function () {
        if ($('#name').val() === '') {
            $('#name').addClass('is-invalid');
            $('#update').attr('disabled',true);
        } else {
            $('#name_msg').html('');
            $('#name').removeClass('is-invalid');
            $('#name').addClass('is-valid');
            $('#update').removeAttr('disabled');
        }
    });
    $('#charge').on('keyup', function () {
        if ($('#charge').val() === '') {
            $('#charge').addClass('is-invalid');
            $('#update').attr('disabled',true);
        } else {
            $('#charge').removeClass('is-invalid');
            $('#charge').addClass('is-valid');
            $('#update').removeAttr('disabled');
        }
    });
    $('#email').on('keyup', function () {
        if ($('#email').val() === '') {
            $('#email').addClass('is-invalid');
            $('#update').attr('disabled',true);
        } else {
            $('#email').removeClass('is-invalid');
            $('#email').addClass('is-valid');
            $('#update').removeAttr('disabled');
        }
    });
    $('#phone').on('keyup', function () {
        if ($('#phone').val() === '') {
            $('#phone').addClass('is-invalid');
            $('#update').attr('disabled',true);
        } else {
            $('#phone').removeClass('is-invalid');
            $('#phone').addClass('is-valid');
            $('#update').removeAttr('disabled');
        }
    });
})(jQuery);