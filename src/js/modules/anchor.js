import $ from 'jquery';

export default () => {
  const pagetop = '[data-pagetop]';
  const anchor = '[data-anchor]';
  const headerHight = $('.header').height();

  $(function () {
    $(pagetop).hide();
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $(pagetop).fadeIn();
      } else {
        $(pagetop).fadeOut();
      }
    });

    $(pagetop).click(function () {
      $('html,body').animate({
        scrollTop: 0
      }, 300);
      return false;
    });

    $(anchor).on('click', function () {
      const href = $(this).attr('href');
      const target = $(href === '#' || href === '' ? 'html' : href);
      const position = target.offset().top - headerHight;
      $('html, body').animate({scrollTop: position}, 550, 'swing');
      return false;
    });
  });
};
