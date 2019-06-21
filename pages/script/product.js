var size;
var colour;
var volume;

$(() => {
    $(".mini-img").on("click", function () {
        let src = $(this).find("img").attr("src");
        $("#main-image > img").attr("src", src);
    });

    $(".size-block").on("click", function() {
        $(".size-block").css({
            "background-color": "rgba(0, 0, 0, 0)",
        });
        $(this).css({
            "background-color": "rgb(248, 250, 152)",
        });

        size = $(this).text();
    });

    $(".colour-block").on("click", function() {
        $(".colour-block").css({
            "border-color": "rgb(128, 128, 128)",
        });

        $(this).css({
            "border-color": "black",
        });

        colour = $(this).attr("class").split(" ")[1];
    });

    $(".volume-block").on("click", function() {
        $(".volume-block").css({
            "background-color": "rgba(0, 0, 0, 0)",
        });
        $(this).css({
            "background-color": "rgb(248, 250, 152)",
        });

        volume = $(this).text();
    });

    // $.cookie("name", {"1": 2, "3": 3});
    // $.removeCookie("name")
    
});