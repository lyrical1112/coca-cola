/***********opening************/
$("#M_sec0").ready(function(){
    setTimeout(function() {
        $("#M_sec0").animate({
            left: "100%",width: "0px"
         },1000);
        setTimeout(function(){
            $("#M_sec0").css({display : "none"})
        },1000);
    }, 3500);
});

/***********배너슬라이드************/

var swiper = new Swiper("#M_sec1 .mySwiper", {
  spaceBetween: 0,
  centeredSlides: true,
  autoplay: {
    delay: 10000,
    disableOnInteraction: false,
  }
});

var currentslide = 0;
setInterval(function(){

  if(currentslide<1){
    currentslide ++;
  }else{
    currentslide = 0;
  };
  $("#M_sec1>article>ul>li").eq(currentslide).siblings().removeClass("videoBar");
  $("#M_sec1>article>ul>li").eq(currentslide).addClass("videoBar");
},10000);

/***********section2 product 슬라이드*********/
var swiper = new Swiper("#M_sec2 .mySwiper", {
  loop: true,
  spaceBetween: 1,
  slidesPerView: 10,
  freeMode: true,
  watchSlidesProgress: true,
  observer: true, observeParents: true,
});

var swiper2 = new Swiper("#M_sec2 .mySwiper2", {
  loop: true,
  spaceBetween: 1,
  thumbs: {
    swiper: swiper,
  },
  observer: true, observeParents: true,
});


/***********section2 배경 바꾸기 *********/

function changeBgcolor(color){
  var sec = document.querySelector("#M_sec2");
  sec.style.backgroundColor = color;
}

/***********section4 SNS 슬라이드*********/


    // observer: true, observeParents: true,

  var swiper = new Swiper("#M_sec4>.mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
    },
    observer: true, observeParents: true,
  });


$(".M_sec4_list").css({left: "50%"})
$(function(){

    var $M_sec4_list = $(".M_sec4_list");
    var $M_sec4_list_offset = 900;
    var $M_sec4_list_OST = $M_sec4_list.offset().top - $M_sec4_list_offset;
    $(window).scroll(function(){
        
        if ($(this).scrollTop() > $M_sec4_list_OST) {
            //스크롤의 양이 리스트가 화면에서 떨어진 양보다 많으면 실행
            $M_sec4_list.addClass('animate');
            $(".M_sec4_list").css({left: "0%"})
        }
    });


});



