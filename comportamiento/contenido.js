$(document).ready(function () {
    $('.secciones article').hide();
    $('.secciones article:first').show();

    $('ul.nav-lateral li.h a.x').click(function () {
        $('.secciones article').hide();
        var activeTab=$(this).attr('href');
        $(activeTab).show();
        return false;
    });
});

