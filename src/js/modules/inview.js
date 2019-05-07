import $ from 'jquery';
import 'jquery-inview';

export default () => {
  const fadeIn = '[data-inview]';

  $(function () {
    $(fadeIn).on('inview', function (event, isInView) {
      if (isInView) {
        $(this).addClass('js-active');
      } else {
        //    $(this).removeClass('js-active');
      }
    });
  });
};
