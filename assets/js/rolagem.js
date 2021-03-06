$(document).ready(function () {
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        var target = this.hash,
            $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 500, 'swing', function () {
            window.location.hash = target;
        });
    });

// animação front page
  var win = $(window);
  var services = $('.services-item');
  // visible element
  services.each(function(i, el) {
      var el = $(el);
      if(el.visible(true)) {
        el.addClass('services-visible');
      }
  });

  win.scroll(function(){
    services.each(function(i, el) {
        var el = $(el);
        if(el.visible(true)) {
          el.addClass('services-animate');
        }
    });
  });

});
