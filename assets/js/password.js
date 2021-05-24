(function ($) {
    $('#update').attr('disabled', true);
    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() === $('#confirm_password').val()) {
            $('#message').html('Las contraseñas coinciden').css('color', 'green');
            $('#update').removeAttr('disabled');
        }else{
            $('#message').html('Las contraseñas no coinciden').css('color', 'red');
            $('#update').attr('disabled', true);
        }
    });
})(jQuery);