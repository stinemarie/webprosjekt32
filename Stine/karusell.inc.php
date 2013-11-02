<nav>
	<ul>
		<li>
			<a href="">
				<img src="./felter/felt1.jpg" alt="Trening">
			</a>
		</li>
		<li>
			<a href="">
				<img src="./felter/felt1.jpg" alt="Kosthold">
			</a>
		</li>
		<li>
			<a href="">
				<img src="./felter/felt1.jpg" alt="Personlig Trener">
			</a>
		</li>
		<li>
			<a href="">
				<img src="./felter/felt1.jpg" alt="Lenker">
			</a>
		</li>
		<li>
			<a href="">
				<img src="./felter/felt1.jpg" alt="Om oss">
			</a>
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
 
</script>