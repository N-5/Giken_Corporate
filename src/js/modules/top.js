import $ from 'jquery';

const sleep = msec => new Promise(resolve => setTimeout(resolve, msec));

const top = async () => {
  await sleep(500);
  await $('[data-animation-hero-fade="0"]').addClass('active');
  await sleep(500);
  await $('[data-loading]').fadeOut(200);
  await sleep(200);
  await $('[data-animation-hero-move]').addClass('active');
  await sleep(300);
  await $('[data-animation-hero-move]').addClass('active-animation');
  await sleep(300);
  await $('[data-animation-reveal]').addClass('fade');
  await sleep(200);
  await $('[data-animation-reveal]').addClass('active');
  await $('[data-animation-hero-fade="1"]').addClass('active');
  await sleep(300);
  await $('[data-animation-hero-fade="2"]').addClass('active');
  await sleep(300);
  await $('[data-animation-hero-fade="3"]').addClass('active');
};

export default top();
