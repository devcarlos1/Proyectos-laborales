var swiper = new Swiper(".ifanel-mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".ifanel-swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".ifanel-swiper-button-next",
      prevEl: ".ifanel-swiper-button-prev",
    },
  });