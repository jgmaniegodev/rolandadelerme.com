$(document).ready(function() {
    $(".banner").sparkle({
        count: 200
    });
    $(".banner").trigger("start.sparkle");
    $(".banner").off("mouseover.sparkle")
        .off("mouseout.sparkle")
        .off("focus.sparkle")
        .off("blur.sparkle")

});