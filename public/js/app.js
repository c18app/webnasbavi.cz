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
    $('.arrow-down-wrap').click(function () {
        $([document.documentElement, document.body]).animate({scrollTop: $('.arrow-down-wrap').offset().top + 84}, 350);
    })

    $(window).scroll(function () {
        var arrowDownWrapHeight = $('.arrow-down-wrap').outerHeight();
        var arrowDownWrapOffsetTop = $('.arrow-down-wrap').offset().top;
        var windowScrollTop = $(window).scrollTop();

        if (windowScrollTop >= arrowDownWrapOffsetTop + arrowDownWrapHeight) {
            $('.arrow-down-arrow').css('animation', 'unset');
        }
    })

    $('.btn-napiste-nam,.btn-napiste-nam-second').click(function () {
        $([document.documentElement, document.body]).animate({scrollTop: $('#napiste-nam').offset().top}, 1000);
    });

    $()
});

$('.navbar-button').click(function () {
    $('.navbar').toggleClass('expanded')
});

function sendContactForm(form) {
    $('body').append(
        '<div id="loader-spin-javascript-insert" style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(23,25,40,0.5)" class="loader">' +
        '<img style="margin-top:-19px;position:relative;top:50%;left: 50%;height:38px;"\n' +
        ' src="svg/spin.svg"/></div>'
    );

    $.post(
        form.attr('action'),
        form.serialize()
    ).done(function (data) {
        $('.contact-form-message').remove();

        if (data.status == 'success') {
            var success_text = '<div class="contact-form-message contact-form-message-bottom contact-form-message-success">kontaktní formulář byl úspěšně odeslaný, co nejdříve vyřídíme váš dotaz</div>';
            $(success_text).addClass('contact-form-message-bottom').insertBefore('#contact-form button');
            $('#contact-form').prepend($(success_text).addClass('contact-form-message-top'));
            form[0].reset();
        }
        if (data.status == 'error') {
            $('<div class="contact-form-message contact-form-message-bottom contact-form-message-error">' + data.error + '</div>').insertBefore('#contact-form button');
            $('#contact-form').prepend('<div class="contact-form-message contact-form-message-top contact-form-message-error">' + data.error + '</div>');
        }
    }).fail(function () {
        alert("Vznikla neočekávaná chyba při odesílání formuláře.\nZkuste prosím odeslat formulář později.\n\nZprávu nám můžete zaslat i na email: info@wnb.cz");
    }).always(function () {
        $('#loader-spin-javascript-insert').remove();
    });
}

$('#contact-form').submit(function () {
    sendContactForm($(this))
});