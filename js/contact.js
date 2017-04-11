$('#contact-section form').on('submit', function() {
    resetErrors();

    $.post('../php/endpoints/contact.php', $('#contact-section form').serialize(), function(data, status, request) {
        alert('Success!');
        console.log('Success');
    }).fail(function(request, status, error) {
        console.log('Failed (' + request.status + ')');

        status = request.status;

        if(status === 400) {
            var errors = JSON.parse(request.responseText);

            Object.keys(errors).forEach(function(key) {
                $('#' + key + '-error').html(errors[key]);
            });
        } else if(status === 500) {
            $('#unexpected-error').html('Failed to send the email, try again later.');
        }
    });

    return false;
});

function resetErrors() {
    $('#contact-section input, textarea').each(function(index, input) {
        var name = $(input).attr('name');
        var span = $('#' + name + '-error');

        span.html('');
    });
}