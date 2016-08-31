$(function(){
    var pageUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1).split('?', 1);
    console.log(pageUrl);
    $('.sidebar-wrapper .nav li a').each(function(){
        console.log($(this).attr('href'));
        if ($(this).attr('href') == pageUrl){
            $(this).parent().addClass('active');
        }
    });
});
