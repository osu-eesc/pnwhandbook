(function ($){
var showSidebar = function() {
	$('body').removeClass("active-nav").toggleClass("active-sidebar");
	$('.menu-button').removeClass("active-button");					
	$('.sidebar-button').toggleClass("active-button");
}
});

(function ($){
var showMenu = function() {
	$('body').removeClass("active-sidebar").toggleClass("active-nav");
	$('.sidebar-button').removeClass("active-button");				
	$('.menu-button').toggleClass("active-button");	
}
});

// add/remove classes everytime the window resize event fires
(function ($){
$(window).resize(function(){
	var off_canvas_nav_display = $('.off-canvas-navigation').css('display');
	var menu_button_display = $('.menu-button').css('display');
	if (off_canvas_nav_display === 'block') {			
		$("body").removeClass("three-column").addClass("small-screen");				
	} 
	if (off_canvas_nav_display === 'none') {
		$("body").removeClass("active-sidebar active-nav small-screen")
			.addClass("three-column");			
	}	
	
});
});	


(function ($){
  $(document).ready(function() {

  	// Toggle for nav menu
		$('.menu-button').click(function(e) {
			e.preventDefault();
			showMenu();							
		});	
		// Toggle for sidebar
		$('.sidebar-button').click(function(e) {
			e.preventDefault();
			showSidebar();									
		});							


  });
 
})(jQuery);

// jQuery(document).ready(function($) {
// 		// Toggle for nav menu
// 		$('.menu-button').click(function(e) {
// 			e.preventDefault();
// 			showMenu();							
// 		});	
// 		// Toggle for sidebar
// 		$('.sidebar-button').click(function(e) {
// 			e.preventDefault();
// 			showSidebar();									
// 		});							
// });