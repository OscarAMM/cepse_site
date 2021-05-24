(function ($) {
    $('#email').on('keyup', function () {
        if ($('#email').val() === '') {
            $('#message_email').html('El campo de correo no debe estar vacío').css('color', 'red');
            $('#email').addClass('is-invalid');
            $('#update_profile').attr('disabled', true);
        } else {
            $('#message_email').html('').css('color', 'green');
            $('#email').removeClass('is-invalid');
            $('#email').addClass('is-valid');
            $('#update_profile').removeAttr('disabled');
        }
    });
    $('#username').on('keyup', function () {
        if ($('#username').val() === '') {
            $('#message_username').html('El campo de nombre de usuario no debe estar vacío').css('color', 'red');
            $('#username').addClass('is-invalid');
            $('#update_profile').attr('disabled', true);
        } else {
            $('#message_username').html('').css('color', 'green');
            $('#username').removeClass('is-invalid');
            $('#username').addClass('is-valid');
            $('#update_profile').removeAttr('disabled');
        }
    });
})(jQuery);