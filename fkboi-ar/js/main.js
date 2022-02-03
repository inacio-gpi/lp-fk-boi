(function ($) {
  'use strict';

  // loader
  var loader = function () {
    setTimeout(function () {
      if ($('#loader').length > 0) {
        $('#loader').removeClass('loading');
      }
    }, 1);
  };
  loader();

  var verifyInput = function () {
    $('input').on('focusin', function () {
      $(this).parent().parent().find('label').addClass('top-25');
      console.log($(this).parent().parent().find('label').html());
    });

    $('input').on('focusout', function () {
      if (!this.value) {
        $(this).parent().parent().find('label').removeClass('top-25');
      }
    });
  };
  verifyInput();

  var mask = function () {
    $('#telefone').mask('(00) 0000-00000');
    $('#telefone').blur(function (event) {
      // console.log('teste');
      // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
      if ($(this).val().length == 15) {
        $('#telefone').mask('(00) 00000-0000');
      } else {
        $('#telefone').mask('(00) 0000-00000');
      }
    });
  };
  mask();
  
  var contentWayPoint = function () {
    $('.div-animate').waypoint(
      function (direction) {
        if (
          direction === 'down' &&
          !$(this.element).hasClass('slow-animated')
        ) {
          $(this.element).addClass('item-animate');
          setTimeout(function () {
            $('body .div-animate.item-animate').each(function (k) {
              var el = $(this);
              setTimeout(
                function () {
                  var effect = el.data('animate-effect');
                  if (effect === 'fadeIn') {
                    el.addClass('fadeIn slow-animated');
                  } else if (effect === 'fadeInLeft') {
                    el.addClass('fadeInLeft slow-animated');
                  } else if (effect === 'fadeInRight') {
                    el.addClass('fadeInRight slow-animated');
                  } else {
                    el.addClass('fadeInUp slow-animated');
                  }
                  el.removeClass('item-animate');
                },
                k * 100,
                'easeInOutExpo'
              );
            });
          }, 100);
        }
      },
      { offset: '95%' }
    );
  };
  contentWayPoint();

  $('.popup-vimeo').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
  });

  $('[data-toggle="popover"]').popover();
  $('[data-toggle="tooltip"]').tooltip();
})(jQuery);
