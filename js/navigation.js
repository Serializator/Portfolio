$(document).ready(function() {
    var $current;
    var sliding = false;

    /* Hide all sections except the first. */
    $('#sections .section').each(function(index) {
        var $element = $($('#sections .section').get(index));
        
        if(index == 0) {
            $current = $element;
        } else {
            $element.hide();
        }
    });

    /* Attach an 'onclick' event to every navigation element. */
    $('#navigation ul li').each(function(index) {
        $(this).click(function() {
            if(sliding != true) {
                var $next = $('#' + $(this).data('section'));

                if($current.attr('id') === $next.attr('id')) {
                    return;
                }

                sliding = true;

                $current.hide('slide', { direction: 'right' }, 250, function() {
                    $next.show('slide', { direction: 'left' }, 500, function() {
                        sliding = false;
                    });
                });

                $current = $next;
            }
        });
    });
});