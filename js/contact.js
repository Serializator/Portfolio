$('#contact-section form').on('submit', function() {
    reset();

    $.post('../php/endpoints/contact.php', $('#contact-section form').serialize(), function(data, status, request) {
        $('#success').css('display', 'inline');
    }).fail(function(request, status, error) {
        console.log('Failed (' + request.status + ')');

        status = request.status;

        if(status === 400) {
            var errors = JSON.parse(request.responseText);

            Object.keys(errors).forEach(function(key) {
                var element = $('#' + key + '-error');

                element.html(errors[key]);
                element.css('display', 'inline');
            });
        } else if(status === 500) {
            var element = $('#unexpected-error');

            element.html('Failed to send the email, try again later.');
            element.css('display', 'inline');
        }
    });

    return false;
});

function reset() {
    $('#contact-section input, textarea').each(function(index, input) {
        var name = $(input).attr('name');
        var span = $('#' + name + '-error');

        span.css('display', 'none');
    });

    $('#unexpected-error').css('display', 'none');
    $('#success').css('display', 'none');
}