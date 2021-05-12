(function ($) {
    $("#login_form").submit(function (ev) {
        $("#alert").html("");
        ev.preventDefault();
        $.ajax({
            url: 'validate',
            type: 'POST',
            data: $(this).serialize(),
            success: function (data) {
                let json = JSON.parse(data);
                console.log(json);
            },
            statusCode: {
                400: function (xhr) {
                    $("#email_group > input").removeClass('is-invalid');
                    $("#password_group > input").removeClass('is-invalid');
                    let json = JSON.parse(xhr.responseText);
                    if (json.email.length != 0) {
                        $("#email_group > div").html(json.email);
                        $("#email_group > input").addClass('is-invalid');
                    }
                    if (json.password.length != 0) {
                        $("#password_group > div").html(json.password);
                        $("#password_group > input").addClass('is-invalid');
                    }
                },
                401: function (xhr) {
                    let json = JSON.parse(xhr.responseText);
                    $("#alert").html('<div class="alert alert-danger" role="alert" >' + json.msg + '</div>');
                }
            },
        });
    });
})(jQuery)