import $ from 'jquery';

export default () => {
  const menuTarget = '[data-menu-hamburger], [data-menu-navigation], main, .header';

  $(function () {
    $('[data-menu-hamburger]').on('click', function () {
      $(menuTarget).toggleClass('js-open');
    });

    if ($(window).width() < 768) {
      $('[data-footer-drower]').click(function () {
        $(this).toggleClass('js-open');
        $(this).next('.drower').slideToggle();
      });
    }
  });
};
