<nav class="karusellen">
	<ul>
		<li>
				<img src="./felter/felt1.jpg" alt="Trening">
				<a class="next" href="#">neste</a>
		</li>
		<li>
				<img src="./felter/felt2.jpg" alt="Kosthold">
				<a class="next" href="#">neste</a> <a class="previous" href="#">forrige</a>
		</li>
		<li>
				<img src="./felter/felt3.jpg" alt="Personlig Trener">
				<a class="next" href="#">neste</a><a class="previous" href="#">forrige</a>
		</li>
		<li>
				<img src="./felter/felt4.jpg" alt="Lenker">
				<a class="next" href="#">neste</a><a class="previous" href="#">forrige</a>
		</li>
		<li>
				<img src="./felter/felt3.jpg" alt="Om oss">
				<a class="previous" href="#">forrige</a><a class="startover" href="#">rundt</a>
		</li>
	</ul>	
</nav>

<script>

$(window).load (function() {
	var theImage = $('ul li img');
	var theWidth = theImage.width()
	//wrap into mother div
	$('ul').wrap('<div id="mother" />');					
	//assign height width and overflow hidden to mother
	$('#mother').css({
		width: function() {
		return theWidth;
	  }, 
		height: function() {
		return theImage.height();
	  }, 
		position: 'relative',
		overflow: 'hidden'  	
	});
		//get total of image sizes and set as width for ul 
	var totalWidth = theImage.length * theWidth;
	$('ul').css({
		width: function(){
		return totalWidth;	
	}				
	});		
 
});//doc ready

$(theImage).each(		
function(intIndex){				
$(this).nextAll('a')
	.bind("click", function(){
		if($(this).is(".next"))	{
			$(this).parent('li').parent('ul').animate({
				"margin-left": (-(intIndex + 1) * theWidth)				
					}, 1000)	
			} else if($(this).is(".previous")){
			$(this).parent('li').parent('ul').animate({
				"margin-left": (-(intIndex - 1) * theWidth)				
			}, 1000)	
			} else if($(this).is(".startover")){
			$(this).parent('li').parent('ul').animate({
				"margin-left": (0)				
			}, 1000)
	}
	});//close .bind()									 
});//close .each()
 
</script>