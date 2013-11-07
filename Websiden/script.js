
/*script for meny*/
$(document).ready(function() {	

	$("#trening").hover(function(){
  		$("#treningsNav").css("display","inline");
  		$("#kostholdsNav").css("display","none");
  		$("#ptNav").css("display","none");
  		$("#lenkeNav").css("display","none");
  		$("#omNav").css("display","none");
  		$("#trening").css("background-color","#9EB728");
  		$("#kosthold").css("background-color","#ECEDA2");
  		$("#pt").css("background-color","#ECEDA2");
  		$("#lenker").css("background-color","#ECEDA2");
  		$("#om").css("background-color","#ECEDA2");
		$("#treningslink").css("color","#ECEDA2");
		$("#kostholdslink").css("color","#9EB728");
		$("#ptlink").css("color","#9EB728");
		$("#lenkerlink").css("color","#9EB728");
		$("#idlink").css("color","#9EB728");

	});

	$("#kosthold").hover(function(){
  		$("#treningsNav").css("display","none");
  		$("#kostholdsNav").css("display","inline");
  		$("#ptNav").css("display","none");
  		$("#lenkeNav").css("display","none");
  		$("#omNav").css("display","none");
  		$("#trening").css("background-color","#ECEDA2");
  		$("#kosthold").css("background-color","#9EB728");
  		$("#pt").css("background-color","#ECEDA2");
  		$("#lenker").css("background-color","#ECEDA2");
  		$("#om").css("background-color","#ECEDA2");
		$("#treningslink").css("color","#9EB728");
		$("#kostholdslink").css("color","#ECEDA2");
		$("#ptlink").css("color","#9EB728");
		$("#lenkerlink").css("color","#9EB728");
		$("#idlink").css("color","#9EB728");
	});

	$("#pt").hover(function(){
  		$("#treningsNav").css("display","none");
  		$("#kostholdsNav").css("display","none");
  		$("#ptNav").css("display","inline");
  		$("#lenkeNav").css("display","none");
  		$("#omNav").css("display","none");
  		$("#trening").css("background-color","#ECEDA2");
  		$("#kosthold").css("background-color","#ECEDA2");
  		$("#pt").css("background-color","#9EB728");
  		$("#lenker").css("background-color","#ECEDA2");
  		$("#om").css("background-color","#ECEDA2");
		$("#treningslink").css("color","#9EB728");
		$("#kostholdslink").css("color","#9EB728");
		$("#ptlink").css("color","#ECEDA2");
		$("#lenkerlink").css("color","#9EB728");
		$("#idlink").css("color","#9EB728");
	});

	$("#lenker").hover(function(){
  		$("#treningsNav").css("display","none");
  		$("#kostholdsNav").css("display","none");
  		$("#ptNav").css("display","none");
  		$("#lenkeNav").css("display","inline");
  		$("#omNav").css("display","none");
  		$("#trening").css("background-color","#ECEDA2");
  		$("#kosthold").css("background-color","#ECEDA2");
  		$("#pt").css("background-color","#ECEDA2");
  		$("#lenker").css("background-color","#9EB728");
  		$("#om").css("background-color","#ECEDA2");
		$("#treningslink").css("color","#9EB728");
		$("#kostholdslink").css("color","#9EB728");
		$("#ptlink").css("color","#9EB728");
		$("#lenkerlink").css("color","#ECEDA2");
		$("#omosslink").css("color","#9EB728");
	});

	$("#om").hover(function(){
  		$("#treningsNav").css("display","none");
  		$("#kostholdsNav").css("display","none");
  		$("#ptNav").css("display","none");
  		$("#lenkeNav").css("display","none");
  		$("#omNav").css("display","inlink");
  		$("#trening").css("background-color","#ECEDA2");
  		$("#kosthold").css("background-color","#ECEDA2");
  		$("#pt").css("background-color","#ECEDA2");
  		$("#lenker").css("background-color","#ECEDA2");
  		$("#om").css("background-color","#9EB728");
		$("#treningslink").css("color","#9EB728");
		$("#kostholdslink").css("color","#9EB728");
		$("#ptlink").css("color","#9EB728");
		$("#lenkerlink").css("color","#9EB728");
		$("#omosslink").css("color","#ECEDA2");
	});

	$(".undersideNav a").mouseenter(function(){
  		$(this).css("text-decoration","underline");
	});

	$(".undersideNav a").mouseleave(function(){
  		$(this).css("text-decoration","none");
	});



	$("#hovednavigering").mouseleave(function(){
		setTimeout(function() {
			$("#trening").css("background-color","#ECEDA2");
	  		$("#kosthold").css("background-color","#ECEDA2");
	  		$("#pt").css("background-color","#ECEDA2");
	  		$("#lenker").css("background-color","#ECEDA2");
	  		$("#om").css("background-color","#ECEDA2");
			$("#treningslink").css("color","#9EB728");
			$("#kostholdslink").css("color","#9EB728");
			$("#ptlink").css("color","#9EB728");
			$("#lenkerlink").css("color","#9EB728");
			$("#omosslink").css("color","#9EB728");
			$("#treningsNav").css("display","none");
			$("#kostholdsNav").css("display","none");
			$("#ptNav").css("display","none");
			$("#lenkeNav").css("display","none");
			$("#omNav").css("display","none");
		}, 3000);
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
	 $( '.midten img').css("width","230px");
	 $( '.midten img').css("height","230px");

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

	 	$( '.midten img').delay( 75 ).animate({width:'230px', height:'230px'});
	 	$( '.right img' ).delay( 75 ).animate({width:'200px', height:'200px'});					 			
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
	 	
	 	$( '.midten img').delay( 75 ).animate({width:'230px', height:'230px'});
	 	$( '.left img' ).delay( 75 ).animate({width:'200px', height:'200px'});		
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

/*script for easter egg*/

// $(document).ready(function(){
// 	$(superhemmelig).click(function(){
// 		// $("div *").fadeOut('slow');
// 		$("#logo").animate({top:'1000px'}'slow');		
// 		// $("div #logo").fadeOut('slow')
		
// 	});
// });


/*Script for BMI Kalkulator*/
function kalkulerBmi() {
var vekt = document.bmiKalk.vekt.value
var høyde = document.bmiKalk.høyde.value
if(vekt > 0 && høyde > 0){	
var endeligBmi = vekt/(høyde/100*høyde/100)
document.bmiKalk.visBmi.value = endeligBmi
if(endeligBmi < 18.5){
document.bmiKalk.betydning.value = "Du er klassifisert som undervektig."
}
if(endeligBmi > 18.5 && endeligBmi < 25){
document.bmiKalk.betydning.value = "Du er klassifisert som normalvektig"
}
if(endeligBmi > 25){
document.bmiKalk.betydning.value = "Du er klassifisert som overvektig."
}
}
else{
alert("Vennligst fyll inn alt korrekt.")
}
}
