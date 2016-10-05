$(function(){
    var pageUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1).split('?', 1);
    $('.sidebar-wrapper .nav li a').each(function(){
        var anchorUrl = $(this).attr('href').substr($(this).attr('href').lastIndexOf("/") + 1);
        if (anchorUrl == pageUrl){
            $(this).parent().addClass('active');
        }
    });
});
