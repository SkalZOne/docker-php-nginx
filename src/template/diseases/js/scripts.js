$(window).on('load', function(){
    $(window).on('resize', function(){
        maxHeight = 0
        $('.product').each(function(){
            if( $(this).height() > maxHeight ) {
                $(this).css('height', '100%');
                maxHeight = $(this).height();
            }
        });
        $('.product').each(function(){
            $(this).height(maxHeight);
        });
    });
});