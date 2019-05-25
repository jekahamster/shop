$(() => {
    $("#menu > li").click(function () {
        $("#menu > li > ul").css({display: "block"});
    });

    $(".test").click(function () {
        alert(1);

    });
    
});
