/*  jQuery(document).ready(function($) {
    // Smooth scrolling for anchor links
    $('a[href*="#"]').on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;

            // Smoothly scroll to the section
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        }
    });
});
  */
/* jQuery(document).ready(function($) {
    $('.main-menu a').on('click', function(e) {
      e.preventDefault();
      var target = $(this).attr('href');
      $('html, body').animate({
        scrollTop: $(target).offset().top
      }, 1000);
    });
  });
   
  jQuery(document).ready(function($) {
    $('.nav-menu a').on('click', function(e) {
      e.preventDefault();
      var target = $(this).attr('href'); // Get the href attribute value
      $('html, body').animate({
        scrollTop: $(target).offset().top // Scroll to the top of the target section
      }, 1000); // Adjust the animation speed as needed
    });
  });
  */
/*    jQuery(document).ready(function($) {
    $('.nav-menu a').on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        var hashPos = target.indexOf('#');
        if (hashPos !== -1) {
            target = target.substring(hashPos);
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 1000);
        }
    });
});
   */