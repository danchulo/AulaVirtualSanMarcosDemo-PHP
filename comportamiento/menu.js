
$(document).ready(function() {
    $("li.submenu ul").hide();
    $("li.submenu").click(function() {
        $(this).children("li.submenu ul").slideToggle(300);
    });

    $("ul.nav-lateral li").click(function (p) {
        p.stopPropagation();
    });

});

