(function ($){
	$(document).ready(function(){
		/* prepend menu icon */
  	$('#menu-wrapper nav#block-system-main-menu').before('<button id="menu-icon" class="nav-button"></button>');
  	$('#menu-wrapper nav#block-system-main-menu').before('<a title="Browse related content" href="#sidebar"><button id="folder-icon" class="folder-button"></button></a>');
  	// $('.region-sidebar-first').prepend('<a name="sidebar"></a>');

  	/*  replace <nonlink> element with anchor */
  	$('li.menu-item-480 span').replaceWith('<a title="Browse handbook contents" href="#">Contents</a>'); 	
	
		$(".nav-button").click(function () {
		$(".nav-button,.menu").toggleClass("open");
		}); 
	});  
})(jQuery);

