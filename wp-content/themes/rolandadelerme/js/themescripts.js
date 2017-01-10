$(document).ready(function() {
    $(".banner").sparkle({
        count: 200
    });
    $(".banner").trigger("start.sparkle");
    $(".banner").off("mouseover.sparkle")
        .off("mouseout.sparkle")
        .off("focus.sparkle")
        .off("blur.sparkle");

    $(".menu-button").click(function() {
        $(this).toggleClass("open");
        $(this).find(".fa-bars, .fa-times").toggleClass("fa-bars fa-times");
        $(".menu-mobile-menu-container").slideToggle("slow");
    });
});