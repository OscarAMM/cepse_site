(function ($) {
    /**
     * First section
     */
    $('#paragraph_one').on('keyup', function () {
        if ($('#paragraph_one').val() === '') {
            $('#one_p').html('El campo no debe estar vacío').css('color', 'red');
            $('#paragraph_one').addClass('is-invalid');
            $('#update').attr('disabled', true);
        } else {
            $('#paragraph_one').removeClass('is-invalid');
            $('#one_p').html('');
            $('#paragraph_one').addClass('is-valid');
            $('#update').removeAttr('disabled');
        }
    });
    $('#first_title').on('keyup', function () {
        if ($('#first_title').val() === '') {
            $('#one').html('El campo de título no debe estar vacío.').css('color', 'red');
            $('#first_title').addClass('is-invalid');
            $('#update').attr('disabled', true);
        } else {
            $('#first_title').removeClass('is-invalid');
            $('#one').html('');
            $('#first_title').addClass('is-valid');
            $('#update').removeAttr('disabled');
        }
    });
    /**
     * End first section
     */

    /**
     * Second section 
     **/
    $('#second_title').on('keyup', function () {
        if ($('#second_title').val() === '') {
            $('#two').html('El campo de título no debe estar vacío.').css('color', 'red');
            $('#second_title').addClass('is-invalid');
            $('#update').attr('disabled', true);
        } else {
            $('#second_title').removeClass('is-invalid');
            $('#two').html('');
            $('#second_title').addClass('is-valid');
            $('#update').removeAttr('disabled');
        }
    });
    $('#second_paragraph').on('keyup', function () {
        if ($('#second_paragraph').val() === '') {
            $('#two_p').html('El campo de título no debe estar vacío.').css('color', 'red');
            $('#second_paragraph').addClass('is-invalid');
            $('#update').attr('disabled', true);
        } else {
            $('#second_paragraph').removeClass('is-invalid');
            $('#two_p').html('');
            $('#second_paragraph').addClass('is-valid');
            $('#update').removeAttr('disabled');
        }
    });
    /**
     * End second section
     **/

    /**
     * Third section
     **/

    $('#third_title').on('keyup', function () {
        if ($('#third_title').val() === '') {
            $('#three').html('El campo de título no debe estar vacío.').css('color', 'red');
            $('#third_title').addClass('is-invalid');
            $('#update').attr('disabled', true);
        } else {
            $('#third_title').removeClass('is-invalid');
            $('#three').html('');
            $('#third_title').addClass('is-valid');
            $('#update').removeAttr('disabled');
        }
    });
    $('#third_paragraph').on('keyup', function () {
        if ($('#third_paragraph').val() === '') {
            $('#three_p').html('El campo de título no debe estar vacío.').css('color', 'red');
            $('#third_paragraph').addClass('is-invalid');
            $('#update').attr('disabled', true);
        } else {
            $('#third_paragraph').removeClass('is-invalid');
            $('#three_p').html('');
            $('#third_paragraph').addClass('is-valid');
            $('#update').removeAttr('disabled');
        }
    });
})(jQuery);