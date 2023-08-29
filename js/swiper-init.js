const swiper1 = new Swiper('.swiper-1', {
    direction: 'horizontal',
    loop: true,
    autoplay: {
        delay: 10000,
    },
    speed: 10000,
    effect: 'fade',
    preventInteractionOnTransition: 'true',

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },
});

const swiper2 = new Swiper('.swiper-2', {
    direction: 'horizontal',
    spaceBetween: 10,
    slidesPerView: 3,
    slidesPerGroup: 1,
    watchSlidesVisibility: false,
    watchSlidesProgress: false,
    loop: false,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});



const swiper3 = new Swiper('.swiper-3', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    slidesPerView: 1.3,
    slidesPerGroup: 1,
    spaceBetween: 100,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});