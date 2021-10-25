//Title:Effect Cube//
//Author: Vladimir Kharlampidi//
//Date: 15/03/2021//
//Code version: 4th commit to github//
//Availability: https://github.com/nolimits4web/Swiper/blob/master/demos/230-effect-cube.html//

//I reused the cube swiper code and the only thing I changed apart from implementing it in my//
//website was the size of the cube and I changed the shadow size of the cube to make it suitable.//


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

