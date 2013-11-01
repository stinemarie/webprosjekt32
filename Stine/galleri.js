$(document).ready(function(){
			$('.lenke').hover(function(){
				$(this).children('.overlay').fadeIn('slow');					
			},function(){
				$(this).children('.overlay').fadeOut('fast'); 
			});
		});
