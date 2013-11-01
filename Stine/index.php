<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>galleri</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<style>	
			body{
				padding: 0 0;
				margin: 0 0;
			}
			.fargefelt{
				display: block;
			}
			#oppskriftnav {
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
	
			.overlay{
				height: 480px;
				width: 480px;
				background-color: rgba(240,240,240,0.5);
				position: absolute;
				top:0;
				right:0;
				display: none;
			}

			.tekst{
				color: white;
				font-size: 30px;
				font-family: "Gill Sans", sans-serif;
				font-weight: heavy;
				margin: 20px;
				overflow: hidden;
			}

		</style>
		<script>

			$(document).ready(function(){
				$('.lenke').hover(function(){
					$(this).children('.overlay').fadeIn('slow');					
				},function(){
					$(this).children('.overlay').fadeOut('fast'); 
				});
			});

		</script>
	</head>
	<body>

		<a href=?meny> meny for oppskrifter

		meny for hovedsiden

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
