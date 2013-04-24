(function ($){
	$(document).ready(function(){
  	/*  replace <nonlink> element with anchor */
  	$('li.menu-item-480 span').replaceWith('<a title="Browse handbook contents" href="#">Contents</a>'); 	
	
		$(".nav-button").click(function () {
		$(".nav-button,.menu").toggleClass("open");
		}); 
	});  
})(jQuery);

