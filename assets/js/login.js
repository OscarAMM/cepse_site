(function($){
    $("#frm-login").submit(function(ev){
        $("#alert").html("");
        $.ajax({
            url: 'login/validate',
            type: 'POST',
            data: $(this).serialize(),
            success: function(err){
                var json = JSON.parse(err);
                window.location.replace(json.url)
            },
            statusCode: {
                400: function(xhr){
                    $("#email > input").removeClass("is-invalid");
                    $("#password > input").removeClass("is-invalid");
                    var json = JSON.parse(xhr.responseText);
                    if(json.email.length != 0){
                        $("#email_group > div").html(json.email);
                        $("#email_group > input").addClass('is-invalid');
                    }
                    if(json.password.length != 0){
                        $("#password_group > div").html(json.password);
                        $("#password_group > input").addClass('is-invalid');
                    }   
                },
                401: function(xhr){
                    var json = JSON.parse(xhr.responseText);
                    // console.log(json);
                    $("#alert").html('<div class="alert alert-danger" role="alert">'+ json.msg +'</div>')
                }
                
            }

        });
        ev.preventDefault();
    });
})(jQuery);
