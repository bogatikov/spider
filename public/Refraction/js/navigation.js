var cache = [];
function addToCache(url, title, content, updated)
{
    cache[url] = {
        'title' : title,
        'content' : content,
        'updated' : updated
    };
}
function loadData(url)
{
    $('#alert').hide();
    $('#content').html('<p class="lead text-center">Загрузка...</p>');
    if (url === undefined) {
        url = document.location;
    }
    if ((cache[url] != undefined) && ((cache[url].updated+60000) > (+new Date))) {

        console.log('Page was loaded from cache!');
        document.title = cache[url].title;
        $('#content').html('<b>Loaded from cache</b></br>' + cache[url].content);
    } else {
        $.ajax({
            url: url,
            success: function (data) {
                addToCache(url, data.title, data.content, +new Date);
                document.title = data.title;
                $('#content').html(data.content);

            },
            error: function(data) {
                $('#alert-message').html('Ошибка загрузки страницы');
                $('#alert').show();
            }
        });
    }
}
$(document).ready(function() {
    loadData();
    $('.nav li a').each(function () {
        if ($(this).attr('href') == document.location) {
            $(this).parent().attr('class', 'active');
        }
    });
});
$(document).on('click', 'a', function() {
   if ($(this).attr('ajax') != false) {
       var url = $(this).attr('href');
       loadData(url);

       if (url != window.location) {

           window.history.pushState(null, null, url);
       }

       return false;
   }

});
$(window).bind('popstate', function() {
    $.ajax({
        url:     location.pathname + '?ajax=1',
        success: function(data) {
            document.title = data.title;
            $('#content').html(data.content);
        }
    });
});