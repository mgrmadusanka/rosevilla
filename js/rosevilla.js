$(document).ready(function($) {
    //sicky header
    $(window).on('scroll', function() {
        if($(window).scrollTop()) {
            $(document).find('.headerNavContainer').addClass('sticky');
            $(document).find('#scrollTopBtn').css('display', 'flex');
        } else {
            $(document).find('.headerNavContainer').removeClass('sticky');
            $(document).find('#scrollTopBtn').css('display', 'none');
        }
    });

    //when click mobile menu button, open mobile menu
    $(document).on('click', '#btnOpenHeaderMobileNav', function(e) {
        $(document).find('nav.headerNav').css('left', '0');
    });
    //when click clolse menu button, hide mobile menu
    $(document).on('click', '#btnCloseHeaderMobileNav', function() {
        $(document).find('nav.headerNav').css('left', '100vw');
    });


    //smooth scroll
    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
    // On-page links
    if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
        && 
        location.hostname == this.hostname
    ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
            return false;
            } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
            };
        });
        }
    }
    });
});