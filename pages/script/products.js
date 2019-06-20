$(() => {
    $("#filter-button").click(function () {
        $("#left-menu").animate({
            left: 0+"vw",
        }, 400);
        $("#overlay").fadeIn(500);
    });

    $("#overlay").click(function () {
        $("#left-menu").animate({
            left: -55+"vw",
        }, 400);
        $("#overlay").fadeOut(500);
    });
});