// reviews swiper 
var swiper = new Swiper(".reviews-slider",{
  grabCursor:true,
  loop:true,
  spaceBetween:20,
  pagination:{
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  breakpoints:{
    0: {
    slidesPerView: 1,
  },
    768: {
    slidesPerView: 2,
  },
    991: {
    slidesPerView: 3,
  },
  }
});