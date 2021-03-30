
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

//aboutus
$(document).ready(function () {
  var historyButton = $(".osborn-history__button");
  var historyItem = $(".history-item");

  historyButton.on('click', function (event) {
    console.log($(this));

  });
});



//products

$(document).ready(function () {
  var productsButton = $('.products-button');
  var productsItem = $('.products-item');

  productsButton.on('click', function (event) {
    var activeProduct = $(this).attr('data-target');
    productsItem.removeClass('products-item__active');
    $(activeProduct).addClass('products-item__active');
  });
});


//details

var seemoreButtons = $('.seemore__button');
  seemoreButtons.click(function () {
  var seemoreContent = '.' + $(this).attr('data-target');
  $(seemoreContent).slideToggle(500);
  });


