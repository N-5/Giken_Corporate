import $ from 'jquery';
import "magnific-popup";

export default () => {

  $(function () {
    $('.popup-youtube').magnificPopup({
      type: 'iframe',//ここの指定で画像のポップアップなども可能！
      mainClass: 'mfp-fade',//埋め込みたいclass名
      removalDelay: 150,
      preloader: false
    });
  });
};
