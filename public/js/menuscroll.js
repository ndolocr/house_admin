/* 
 *Javascript file to control menu background on scroll
 */

$(document).ready(function() {
	$(window).on("scroll", function(){
		if($(window).scrollTop()){
			$('navbar').addClass('black');
		}else{
			$('navbar').removeClass('black');
		}
	});
});


