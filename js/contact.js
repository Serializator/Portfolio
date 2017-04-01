$(document).ready(function() {
    $('#contact-section form').on('submit', function() {
        $.post('../php/endpoints/contact/endpoint.php', $('#contact-section form').serialize(), function(data) {
            console.log(data);
        });
    });
});