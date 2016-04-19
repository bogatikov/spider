
$(document).on('click', 'a', function() {
   if ($(this).attr('ajax') != false) {
       var url = $(this).attr('href');
       $.ajax({
           url: url + '?ajax=1',
           success: function (data) {

               document.title = data.title;
               $('#content').html(data.content);
           }
       });

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