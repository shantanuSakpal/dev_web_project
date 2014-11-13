$("document").ready(function () {

    $("#nav").addClass("js");
    $("#nav").addClass("js").before('<div id="menu">☰</div>');
    $("#menu").click(function () {
        $("#nav").toggle();
    });
    $(window).resize(function () {
        if (window.innerWidth > 1024) {
            $("#nav").removeAttr("style");
        }
    });
});