$(function(){
    var start = window.location.href.lastIndexOf(".com") + 5;
    var end = window.location.href.split("/")[3].length;
    var pageUrl = window.location.href.substr(start, end);
    $('.sidebar-wrapper .nav li a').each(function(){
        var anchorUrl = $(this).attr('href').substr($(this).attr('href').lastIndexOf("/") + 1);
        if (anchorUrl == pageUrl){
            $(this).parent().addClass('active');
        }
    });
});
