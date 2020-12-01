
var swiper = new Swiper('.swiper-container', {
  speed: 3000,
  loop: true,
  autoplay: true,
  setWrapperSize: true,
  slidesPerView: 3,
  slidesPerGroup: 3,
  // spaceBetween: 400,
  // centeredSlides: true,
  setWrapperSize: true,
  centerInsufficientSlides: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});



