import $ from 'jquery';

export default () => {
  const anchor = '[data-anchor]';
  const headerHight = $('.header').height();

  $(function () {
    $(anchor).on('click', function () {
      const href = $(this).attr('href');
      const target = $(href === '#' || href === '' ? 'html' : href);
      const position = target.offset().top - headerHight;
      $('html, body').animate({scrollTop: position}, 550, 'swing');
      return false;
    });
  });
};
