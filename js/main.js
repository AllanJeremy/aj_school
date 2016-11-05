$(document).ready(function() {

/*Mobile navigation */

/*Sticky navigation*/
var stickyNavTop = $('.primary-nav').offset().top;
 
var stickyNav = function(){
var scrollTop = $(window).scrollTop();
      
if (scrollTop > stickyNavTop) { 
    $('.primary-nav').addClass('sticky');
    
} else {
    $('.primary-nav').removeClass('sticky'); 
}
};
 
stickyNav();

//Triggered a user scrolls
$(window).scroll(function() {
  stickyNav();
});


});