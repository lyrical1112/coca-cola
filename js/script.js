$("header .toggle").on("click", function() {
    $(this).closest("header").toggleClass("opened");
});

$("header nav > ul > li > a").on("click", function() {
    $(this).closest("li").toggleClass("on");
});
/***********footer top_btn*********/
var btn = document.getElementById("top_btn"), 

    docElem = document.documentElement, //문서 자체를 가져옴

    //문서 높이 계산하기
    docHeight = Math.max( docElem.scrollHeight,  docElem.offsetHeight); //문서의 높이
    if(docHeight != 'undefined'){
        offset = docHeight / 5;
    };

    //스크롤 이벤트 추가
    window.addEventListener('scroll',function(){
        scrollPos = docElem.scrollTop; //스크롤의양 
        btn.className = (scrollPos>offset) ?'visible':''; //클래스명이 없으면 넣고 있으면 추가해준다
    });

    //클릭하면 이벤트
    btn.addEventListener('click', function(ev){
        ev.preventDefault(); //링크의 본연의 기능을 막는다
        //docElem.scrollTop = 0;
        scrollToTop();
    });
    function scrollToTop(){
        var scrollInterval = setInterval(function(){
            if(scrollPos != 0){
                window.scrollBy(0, -50);
            }else{
                clearInterval(scrollInterval);
            }
        }, 15);
    };