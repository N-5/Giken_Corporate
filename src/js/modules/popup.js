import $ from 'jquery';
import 'magnific-popup';

export default () => {
  $(function () {
    $('.popup-youtube').magnificPopup({
      type: 'iframe',
      removalDelay: 150,
      preloader: false
    });
  });
};
