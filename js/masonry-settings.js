
// Masonry settings to organize footer widgets
jQuery(document).ready(function($){
   $('#footer-widgets').masonry({
       columnWidth: 400,
       itemSelector: '.widget',
       isFitWidth: true,
       isAnimated: true
   }); 
});
                