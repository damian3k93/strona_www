$(document).ready(function(){
    $('nav a').click(function(){
        var href = $(this).attr('href');
        $('#contents').load(href);
        return false;
    });
});