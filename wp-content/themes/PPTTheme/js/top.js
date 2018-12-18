$(window).scroll(function() {
 if ($(window).scrollTop() > 100) {
   $('.top-button').addClass('show');
            } else {
   $('.top-button').removeClass('show');
            }
        });

//back to top button function
$('.top-button').on('click', function(e) {
 e.preventDefault();
 $('html, body').animate({
   scrollTop:0
 }, '300');
});