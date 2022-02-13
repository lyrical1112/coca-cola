$("header .toggle").on("click", function() {
    $(this).closest("header").toggleClass("opened");
});

$("header nav > ul > li > a").on("click", function() {
    $(this).closest("li").toggleClass("on");
});