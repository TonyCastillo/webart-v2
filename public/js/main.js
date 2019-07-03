
$('.homeSlider').owlCarousel({
    items:1,
    loop:true,
    autoplay:true,
    slideSpeed: 9000,
    paginationSpeed: 8000,
    autoplayTimeout:8000,
    autoplaySpeed:3000
});
/*$('button.owl-dot').on('click',function(){
    console.log('holas');
    owl.trigger('play.owl.autoplay',[9000]);
})*/
$(document).ready(function (){
    // Declare Carousel jquery object
    var owl = $('.homeSlider');


    // add animate.css class(es) to the elements to be animated
    function setAnimation ( _elem, _InOut ) {
        // Store all animationend event name in a string.
        // cf animate.css documentation
        var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

        _elem.each ( function () {
            var $elem = $(this);
            var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

            $elem.addClass($animationType).one(animationEndEvent, function () {
                $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
            });
        });
    }

// Fired before current slide change
    owl.on('change.owl.carousel', function(event) {
        var $currentItem = $('.owl-item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-out]");
        setAnimation ($elemsToanim, 'out');
    });

// Fired after current slide has been changed
    owl.on('changed.owl.carousel', function(event) {

        var $currentItem = $('.owl-item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-in]");
        setAnimation ($elemsToanim, 'in');
    })

});
$(document).ready(function() {
    $('a[href*=#]').bind('click', function(e) {
        e.preventDefault(); // prevent hard jump, the default behavior

        var target = $(this).attr("href"); // Set the target as variable

        // perform animated scrolling by getting top-position of target-element and set it as scroll target
        $('html, body').stop().animate({
            scrollTop: $(target).offset().top
        }, 600, function() {
            location.hash = target; //attach the hash (#jumptarget) to the pageurl
        });
        return false;
    });
});

$(window).scroll(function() {
    var scrollDistance = $(window).scrollTop();

    // Show/hide menu on scroll
    //if (scrollDistance >= 850) {
    //		$('nav').fadeIn("fast");
    //} else {
    //		$('nav').fadeOut("fast");
    //}

    // Assign active class to nav links while scolling
    $('.page-section').each(function(i) {
        if ($(this).position().top <= scrollDistance) {
            $('.navbar-nav li.active').removeClass('active');
            $('.navbar-nav li').eq(i).addClass('active');
        }
    });
}).scroll();


$('.homegallery').owlCarousel({
    items:1,
    nav:true,
    navText : ['<img src="/image/icons/left-arrow.svg" alt="">','<img src="/image/icons/right-arrow.svg" alt="">'],
    dots:true
});