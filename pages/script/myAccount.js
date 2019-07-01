$(() => {
    $("#new-login").click(function () {
        $("#change-login").fadeIn(500);
    });

    $("#new-password").click(function () {
        $("#change-pass").fadeIn(500);
    });

    $(".go-back").click(function () {
        $("#change-login").fadeOut(500);
        $("#change-pass").fadeOut(500);
    });
});