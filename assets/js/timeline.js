$(document).ready(function() {
    $("div.dates-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.dates-timeline>div.dates-content").removeClass("active");
        $("div.dates-timeline>div.dates-content").eq(index).addClass("active");
    });
});