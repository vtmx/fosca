$(function() {

    // Toggle Nav
    // -----------------------------------------------------------------------------
    $('.toggle').click(function() {
		$(this).toggleClass('toggle-active');
		$('nav').toggleClass('nav-active');
	});


    $('.toggle-menu').click(function() {
        if ( $(this).attr('aria-expanded') === 'true' ) {
            $(this).attr('aria-expanded', 'false');
            $('nav').attr('aria-expanded', 'false');
            $('.instagram svg').removeClass('white');
            $('.work-back').removeClass('work-back-white');
        } else {
            $(this).attr('aria-expanded', 'true');
            $('nav').attr('aria-expanded', 'true');
            $('.instagram svg').addClass('white');
            $('.work-back').addClass('work-back-white');
        }
    });


    // Random Divs
    // -----------------------------------------------------------------------------
    if ( $('.works .work').length ) {
        var randomDivs = $('.works .work').get().sort(function () {
             return Math.round( Math.random() ) - 0.5;
        });
        $(randomDivs).appendTo(randomDivs[0].parentNode).show();
    }


    // Light Gallery
    // -----------------------------------------------------------------------------
    var $lg = $('.works');

    $lg.lightGallery({
        selector      : '.work',
        counter       : false,
        download      : false,
        hideBarsDelay : 100000,
        preload       : 0,
        thumbnail     : false,
        enableDrag    : false,
        zoom          : false
    });


    // Zoom
    // -----------------------------------------------------------------------------
    $lg.on('onSlideItemLoad.lg', function() {
        console.log($('.lg-current .lg-image').attr('src'));
        // $('.magnifier, .cursorshade, .statusdiv, .tracker').remove();

        var $zoomImageSrc = $('.lg-current .lg-image').attr('src');
        $('.lg-current .lg-image').attr('data-large', $zoomImageSrc);

        $('.lg-current .lg-image').imagezoomsl({
            zoomrange: [1, 10],
            zoomstart: 2,
            magnifiereffectanimate: 'fadeIn',
            magnifierpos: 'left',
        });
    });

    $lg.on('onCloseAfter.lg', function() {
        $('.magnifier, .cursorshade, .statusdiv, .tracker').remove();
    });


    // $('.work').click(function() {
        // Funcionando
        // var $zoomImage = $('.lg-image').attr('src');
        //
        // $('.lg-image').attr('data-large', $zoomImage);
        //
        // $('.lg-image').imagezoomsl({
        //     zoomrange: [1, 10],
        //     zoomstart: 2,
        //     magnifiereffectanimate: 'fadeIn',
        //     magnifierpos: 'left',
        // });
    // });

});
