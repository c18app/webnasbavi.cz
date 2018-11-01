jQuery(document).ready(function ($) {
    var jssor_1_SlideshowTransitions = [
        {
            $Duration: 500,
            $Delay: 12,
            $Cols: 10,
            $Rows: 5,
            $Opacity: 2,
            $Clip: 15,
            $SlideOut: true,
            $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
            $Assembly: 2049,
            $Easing: $Jease$.$OutQuad
        },
        {
            $Duration: 500,
            $Delay: 40,
            $Cols: 10,
            $Rows: 5,
            $Opacity: 2,
            $Clip: 15,
            $SlideOut: true,
            $Easing: $Jease$.$OutQuad
        }
    ];

    var jssor_1_options = {
        $AutoPlay: 1,
        $SlideshowOptions: {
            $Class: $JssorSlideshowRunner$,
            $Transitions: jssor_1_SlideshowTransitions,
            $TransitionsOrder: 1
        },
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
        },
        $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
        },
        $Idle: 5000
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*#region responsive code begin*/

    var MAX_WIDTH = 1140;

    function ScaleSlider() {
        var containerElement = jssor_1_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {
            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

            jssor_1_slider.$ScaleWidth(expectedWidth);
        } else {
            window.setTimeout(ScaleSlider, 30);
        }
    }

    ScaleSlider();

    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
    /*#endregion responsive code end*/
});


jQuery(document).ready(function ($) {
    $('.arrow-down-wrap').click(function() {
        $([document.documentElement, document.body]).animate({scrollTop: $('.arrow-down-wrap').offset().top + 84}, 350);
    })

    $(window).scroll(function() {
        var arrowDownWrapHeight = $('.arrow-down-wrap').outerHeight();
        var arrowDownWrapOffsetTop = $('.arrow-down-wrap').offset().top;
        var windowScrollTop = $(window).scrollTop();

        if(windowScrollTop > arrowDownWrapOffsetTop + arrowDownWrapHeight) {
            $('.arrow-down-arrow').css('animation', 'unset');
        }
    })

    $('.btn-napiste-nam').click(function() {
        $([document.documentElement, document.body]).animate({scrollTop: $('#napiste-nam').offset().top}, 1000);
    });

    $()
});

$('.navbar-button').click(function() {
    $('.navbar').toggleClass('expanded')
});