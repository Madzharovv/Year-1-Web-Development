const swiper = new Swiper('.swiper-container', {
effect: 'cube',
grabCursor: true,
cubeEffect: {
    shadow: true,
    slideShadows: true,
    shadowOffset: 30,
    shadowScale: 1.74,
},
pagination: {
    el: '.swiper-pagination',
},
});

//const extendedSwiper = new