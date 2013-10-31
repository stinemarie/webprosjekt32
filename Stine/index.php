<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>galleri</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<style>	
			.fargefelt{
				display: block;
			}
			nav {
				float:left;
				padding: 0 0;
				margin: 0 0;
			}
			#navliste {
				padding: 0 0;
				margin: 0 0;
			}
			#navliste li{
				list-style: none;
				float : left;
				position: relative;		
			}
			body{
				padding: 0 0;
				margin: 0 0;
			}
			.overlay{
				height: 480px;
				width: 480px;
				background-color:  	rgba(240,240,240,50)  ;
				position: absolute;
				top:0;
				right:0;
				display: none;
			}
		</style>
		<script>

		$(document).ready(function(){

			$('.lenke').hover(function(){
				$(this).children('.overlay').fadeIn('slow');					
				},function(){
				$(this).children('.overlay').fadeOut('slow'); 
			});
		});

/*		$(document).ready(function(){ 
				$(".knapp").hover(function(){
					 $(this).animate({height:'55px',width:'55px',margin:'0px' });
				},function(){
					 $(this).animate({height:'35px', width:'35px',margin: '10px'});						
						});
					});*/
		</script>
	</head>
	<body>
		<?php
			if (isset($_GET['side'])){

				if ($_GET['side'] == 'felt1'){
					include 'test1.inc.php';
				}else if($_GET['side'] == 'felt2'){
					include 'test2.inc.php';
				}else if($_GET['side'] == 'felt3'){
					include 'test3.inc.php';
				}else if($_GET['side'] == 'felt4'){
					include 'test4.inc.php';
				}
			}else{
				include 'meny.inc.php';
				}
		?>

	</body>
</html>
