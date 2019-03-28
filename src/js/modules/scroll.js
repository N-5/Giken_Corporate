import $ from 'jquery';

export default () => {
  $(function () {
    $(window).scroll(function (e) {
      const $window = $(e.currentTarget);
      const wh = $('.index-hero').innerHeight();
      const st = $window.scrollTop();
      if (wh < st) {
        $('#header').addClass('js-active');
      } else {
        $('#header').removeClass('js-active');
      }
    });
  });
};
