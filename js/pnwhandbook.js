(function ($){
	$(document).ready(function(){
		/* prepend menu icon */
  	$('#menu-wrapper nav#block-system-main-menu').before('<button id="menu-icon" class="nav-button"></button>');
  	/*  replace <nonlink> element with anchor */
  	$('li.menu-item-480 span').replaceWith('<a title="Browse handbook contents" href="#">Contents</a>'); 	
	
		$(".nav-button").click(function () {
		$(".nav-button,.menu").toggleClass("open");
		}); 
	});  
})(jQuery);

