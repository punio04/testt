$('a[href*="#"]')

  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function (event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 900, function () {
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) {
            return false;
          } else {
            $target.attr('tabindex', '-1');
            $target.focus();
          };
        });
      }
    }
  });

$(function () {
  var mediaQuery = matchMedia('(max-width: 767px)');

  handle(mediaQuery);

  mediaQuery.addListener(handle);

  function handle(mq) {
    if (mq.matches) {
      $('input,textarea').focus(function () {
        $('.l-header__btn').hide();
      });

      $('input,textarea').blur(function () {
        $('.l-header__btn').show();
      });
    }
  }
});