(function($) {
    $(function() {
        $('.jcarousel')
            .jcarousel({
                vertical: true,
                transitions: true,
                wrap: 'circular'
                
            });

            $('.jcarousel').jcarouselAutoscroll({
                autostart: true,

            });

$('.jcarousel').jcarousel({  
    
    animation: {
    duration: 800,
    easing:   'linear',
    complete: function() {
    }
}
});

        $('.jcarousel-control-prev')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '-=2'
            });

        $('.jcarousel-control-next')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '+=2'
            });

        $('.jcarousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .jcarouselPagination();
    });
})(jQuery);
