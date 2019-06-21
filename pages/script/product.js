$(() => {
    $(".mini-img").on("click", function () {
        let src = $(this).find("img").attr("src");
        $("#main-image > img").attr("src", src);
    });
});