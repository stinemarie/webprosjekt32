$(document).ready(function(){

	if($(window).width() >= 750){
		karusellMeny();
		bildeMeny();
		easterEggUt();
		easterEggInn();
		hovedNavigering();
	}else{
		kalkulerBmi();
		kalkulerBmr();
	}
});

/*script for meny*/
function hovedNavigering() {	
	
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

	$(".undersideNav a").click(function(){
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
};



/*Kode for bildekarusell på førstesiden*/

 function karusellMeny(){
	 $("#alpha")
	  .addClass('left'); 
	 $("#beta")
	 .addClass('midten'); 
	 $("#gamma")
	 .addClass('right');
	 $("#delta")
	 .addClass('hide');
	 $( '.midten img').css("width","230px");
	 $( '.midten img').css("height","230px");
	 $( '.midten p').fadeIn('fast');
	 $( "#neste" ).click(function(){
	 	neste();
	 });



	function neste(){
		animates = true;
	 	var rrr = $(".kar div").index( $(".right") );
	 	var mmm = $(".kar div").index( $(".midten") );
	 	var lll = $(".kar div").index( $(".left") );
	 	var hhh = $(".kar div").index( $(".hide") );

	 	$( "#tilbake" ).css("display","none").delay( 300 ).fadeIn('slow');
	 	$( "#neste" ).css("display","none").delay( 300 ).fadeIn('slow', function(){
	 		animates = false;
	 	});
	 	
	 	$( ".kar div" ).eq(rrr).css("z-index","6").animate({left:'170px', top:'10px'},"slow").addClass('midten');
	 	$( ".kar div" ).eq(rrr).removeClass('right');
		$( ".kar div" ).eq(mmm).css("z-index","3").animate({left:'10px', top:'20px'},"slow").addClass('left');
	 	$( ".kar div" ).eq(mmm).removeClass('midten');
	 	$( ".kar div" ).eq(lll).css("z-index","2").animate({left:"160px", top:'20px', width:'200px', height:'200px'}).addClass('hide');
	 	$( '.kar div' ).eq(lll).removeClass('left');
	 	$( ".kar div" ).eq(hhh).css("z-index","1").animate({left:'370px', top:'20px',},"slow").addClass('right');
	 	$( '.kar div' ).eq(hhh).removeClass('hide');

	 	$( '.midten img').animate({width:'230px', height:'230px'});
	 	$( '.left img' ).animate({width:'200px', height:'200px'});
	 	$( '.left p').fadeOut('fast');
	 	$( '.midten p').fadeIn('fast');					 			
	 };
	 	$("#tilbake").click(function(){
	 		animates = true;
	 	var rrr = $(".kar div").index( $(".right") );
	 	var mmm = $(".kar div").index( $(".midten") );
	 	var lll = $(".kar div").index( $(".left") );
	 	var hhh = $(".kar div").index( $(".hide") );

	 	$( "#tilbake" ).css("display","none").delay( 300 ).fadeIn('slow');
	 	$( "#neste" ).css("display","none").delay( 300 ).fadeIn('slow', function(){
	 		animates = false;
	 	});

	 	$( ".kar div" ).eq(rrr).css("z-index","1").animate({left:"170px", top:'20px'}).addClass('hide');
	 	$( ".kar div" ).eq(rrr).removeClass('right');
		$( ".kar div" ).eq(mmm).css("z-index","3").animate({left:'370px', top:'20px'},"slow").addClass('right');
	 	$( ".kar div" ).eq(mmm).removeClass('midten');
	 	$( ".kar div" ).eq(lll).css("z-index","6").animate({left:'175px', top:'10px'},"slow").addClass('midten');
	 	$( '.kar div' ).eq(lll).removeClass('left');
	 	$( ".kar div" ).eq(hhh).css("z-index","2").animate({left:'10px', top:'20px'},"slow").addClass('left');
	 	$( '.kar div' ).eq(hhh).removeClass('hide');	
			
	 	$( '.midten img').animate({width:'230px', height:'230px'});
	 	$( '.right img' ).animate({width:'200px', height:'200px'});	
	 	
	 	$( '.right p').fadeOut('fast');
	 	$( '.midten p').fadeIn('fast');		
	});
};

	var animates = false;
	setInterval(function() {
		if(animates == false) {
			neste();			
		}
	}, 6500);



function bildeMeny(){ 
	$('.lenke').hover(function(){ 
		$(this).children('.overlay').fadeIn('slow'); 
	},function(){ 
		$(this).children('.overlay').fadeOut('fast'); 
	}); 
};

/*Denne funksjonen refresher siden når den får en ny str*/
$(window).resize(function() {
    window.location.href = window.location.href;
});

/*Script for easter egg*/
function easterEggInn(){
	$("#superhemmelig").click(function(){
		$("#logo").delay( 200 ).animate({top:'1000px'},700);		
		$("#hovednavigering div a").delay( 300 ).animate({top:'1000px'},900);
		$(".kar div").animate({top:'1000px'},800);
		$(".oppskrift .overlay, #trykkher").animate({top:'1000px'},800);
		$("body :not(#bakgrunn)").delay(1000).fadeOut(900, function(){				
			$(".easteregg").fadeIn('slow');
			$(".easteregg *").fadeIn('slow');
		});
	});
};

function easterEggUt(){
	$("#tamegtilbake").click(function(){
		$(".easteregg").fadeOut('slow');
		$(".easteregg *").fadeOut('slow', function(){
			$("body :not(.easteregg)").delay(500).fadeIn(900);
			$("#logo").delay( 200 ).animate({top:'-75px'},700);		
			$("#treningslink").animate({top: "0px"},500);
			$("#kostholdslink").delay(200).animate({top: "0px"},500);
			$("#ptlink").delay(300).animate({top: "0px"},500);
			$("#lenkerlink").delay(400).animate({top: "0px"},500);
			$("#omosslink").delay(500).animate({top: "0px"},500,
				function(){window.location.href = window.location.href;
			});
			$(".kar div").animate({top:'0px'},800);
			$(".oppskrift .overlay, #trykkher").animate({top:'0px'},800);
		});
	});
};

/*slutt på script for easteregg*/

/*Script for BMI Kalkulator*/
function kalkulerBmi() {
	var vekt = document.bmiKalk.vekt.value
	var høyde = document.bmiKalk.høyde.value
	if(vekt > 0 && høyde > 0){	
		var endeligBmi = vekt/(høyde/100*høyde/100);
		endeligBmi = endeligBmi.toFixed(2);
		document.bmiKalk.visBmi.value = endeligBmi;
		if(endeligBmi < 18.5){
			document.bmiKalk.betydning.value = "Du er klassifisert som undervektig.";
		}
		if(endeligBmi > 18.5 && endeligBmi < 25){
			document.bmiKalk.betydning.value = "Du er klassifisert som normalvektig";
		}
		if(endeligBmi > 25){
			document.bmiKalk.betydning.value = "Du er klassifisert som overvektig.";
		}
	}
		else{
			alert("Vennligst fyll inn alt korrekt.");
	}
}



/* Script til BMR kalkilator*/
function kalkulerBmr() {
  	var vekt = document.BMRkalk.bmrvekt.value
  	var høyde = document.BMRkalk.bmrhøyde.value
	var alder = document.BMRkalk.bmralder.value
	if (vekt > 0 && høyde > 0 && alder >0){
		var endeligBmrKvinne = 655+(9.6*vekt)+(1.8*høyde)-(4.7*alder);
		var endeligBmrMann =   66+(13.7*vekt)+(5*høyde)-(6.8*alder);
		endeligBmrKvinne = endeligBmrKvinne.toFixed(2);
		endeligBmrMann = endeligBmrMann.toFixed(2);
  

		if (document.getElementById("k1").checked){
      			document.BMRkalk.resultat.value = endeligBmrKvinne + " kcal";
		}
		else if (document.getElementById("m1").checked){
      			document.BMRkalk.resultat.value = endeligBmrMann + " kcal";
		}
		else {
      			alert("Vennligst fyll inn alt korrekt.");
      		}
 	}
 }
