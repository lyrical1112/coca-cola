var swiper = new Swiper('.swiper', {
    // slidesPerView: ChangeWidth_PerView(),
    autoplay : true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        // when window width is <=  375px
        375: {
        slidesPerView: 1,
        },
        // when window width is <= 10240px
        1024: {
        slidesPerView: 2,
        },
        // when window width is <= 1920px
        1920: {
        slidesPerView: 3,
        }
    }
});
function ChangeWidth_PerView(){
    var windowWidth = window.innerWidth;
    
    if(window.innerWidth >= 1920){
        var direction = 3;
    }
    else if(window.innerWidth >= 1024){
        var direction = 2;
    }
    else{
        direction = 1;
    }
    return direction;
}
function imgSlider(anything){
    document.querySelector('.popup_img').src = anything;
}
function changeBgColor(color){
    const sec = document.querySelector('.sec');
    sec.style.background = color;
}