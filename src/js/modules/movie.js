import $ from 'jquery';

export default () => {
  $(function () {
    $('.movie-films-list__thumbnail').on('click',function(){
      const movie_thumb = $(this).attr("id");
      $(this).addClass('is-active');
      $(this).children('img').hide();
      $(this).append('<iframe width="600" height="338" src="https://www.youtube.com/embed/' + movie_thumb + '?rel=0&autoplay=1&loop=1&playlist=' + movie_thumb + '" frameborder="0" allowfullscreen></iframe>')
    });
  });
};
