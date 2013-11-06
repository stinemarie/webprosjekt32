$(document).ready(function() {	

	$("#trening").hover(function(){
  		$("#treningsNav").toggle(10);
	});

	$("#kosthold").hover(function(){
  		$("#kostholdsNav").toggle(10);
	});

	$("#pt").hover(function(){
  		$("#ptNav").toggle(10);
	});

	$("#lenker").hover(function(){
  		$("#lenkeNav").toggle(10);
	});

	$("#om").hover(function(){
  		$("#omNav").toggle(10);
	});
	
});

/*Kode for bildekarusell på førstesiden*/
$(document).ready(function(){
	 $("#alpha")
	 .css("width","200px")
	 .css("height","200px")
	 .css("z-index","2")
	 .css("left","10px")
	 .css("top","20px")
	 .addClass('left'); 
	 $("#beta")
	 .css("width","230px")
	 .css("height","230px")
	 .css("z-index","6")
	 .css("left","175px")
	 .css("top","10px")
	 .addClass('midten'); 
	 $("#gamma")
	 .css("width","200px")
	 .css("height","200px")
	 .css("z-index","3")
	 .css("left","370px")
	 .css("top","20px")
	 .addClass('right');
	 $("#delta")
	 .css("width","200px")
	 .css("height","200px")
	 .css("z-index","1")
	 .css("left","170px")
	 .css("top","20px")
	 .addClass('hide');

	 $("#neste").click(function(){
	 	var rrr = $("div").index( $(".right") );
	 	var mmm = $("div").index( $(".midten") );
	 	var lll = $("div").index( $(".left") );
	 	var hhh = $("div").index( $(".hide") );

	 	$( "#tilbake" ).css("display","none").delay( 300 ).fadeIn("4000");
	 	$( "#neste" ).css("display","none").delay( 300 ).fadeIn("4000");

	 	$( "div" ).eq(rrr).css("z-index","1").animate({left:"170px", top:'20px'}).addClass('hide');
	 	$( "div" ).eq(rrr).removeClass('right');
		$( "div" ).eq(mmm).css("z-index","3").animate({left:'370px', top:'20px'},"slow").addClass('right');
	 	$( "div" ).eq(mmm).removeClass('midten');
	 	$( "div" ).eq(lll).css("z-index","6").animate({left:'175px', top:'10px'},"slow").addClass('midten');
	 	$( 'div' ).eq(lll).removeClass('left');
	 	$( "div" ).eq(hhh).css("z-index","2").animate({left:'10px', top:'20px'},"slow").addClass('left');
	 	$( 'div' ).eq(hhh).removeClass('hide');	

	 	$( '.midten img').animate({width:'230px', height:'230px'});
	 	$( '.right img' ).animate({width:'200px', height:'200px'});					 			
	 });
	 	$("#tilbake").click(function(){
	 	var rrr = $("div").index( $(".right") );
	 	var mmm = $("div").index( $(".midten") );
	 	var lll = $("div").index( $(".left") );
	 	var hhh = $("div").index( $(".hide") );
		
		$( "#tilbake" ).css("display","none").delay( 300 ).fadeIn("4000");
	 	$( "#neste" ).css("display","none").delay( 300 ).fadeIn("4000");
	 	
	 	$( "div" ).eq(rrr).css("z-index","6").animate({left:'170px', top:'10px'},"slow").addClass('midten');
	 	$( "div" ).eq(rrr).removeClass('right');
		$( "div" ).eq(mmm).css("z-index","3").animate({left:'10px', top:'20px'},"slow").addClass('left');
	 	$( "div" ).eq(mmm).removeClass('midten');
	 	$( "div" ).eq(lll).css("z-index","2").animate({left:"160px", top:'20px',  width:'200px', height:'200px'}).addClass('hide');
	 	$( 'div' ).eq(lll).removeClass('left');
	 	$( "div" ).eq(hhh).css("z-index","1").animate({left:'370px', top:'20px',},"slow").addClass('right');
	 	$( 'div' ).eq(hhh).removeClass('hide');
	 	
	 	$( '.midten img').animate({width:'230px', height:'230px'});
	 	$( '.left img' ).animate({width:'200px', height:'200px'});		
	 });

});

/*Skript for bildegallerier*/

$(document).ready(function(){
	$('.lenke').hover(function(){
		$(this).children('.overlay').fadeIn('slow');					
		},function(){
			$(this).children('.overlay').fadeOut('fast'); 
		});
	});
