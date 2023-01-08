$(".fag-menu").click(function () {
    let __that = $(this);
    __that.find(".menu-dropdown").slideToggle();

    __that.find('svg').toggleClass('rotate-90');

});

/**
 * You can use same id for different divs here
 * 
 * @since the __that will reference the recent container
 */
$(".image-hover").hover(function () {
    let __that = $(this);
    __that.find(".show").toggleClass("active");
});
