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
				width:100%;
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
				width:50%;
				height:	50%;			
			}
			#navliste li#meny1 {
				background:url("./felter/felt1.jpg");
				background-size:cover;
			}
			#navliste li#meny2 {
				background:url("./felter/felt2.jpg");
				background-size:cover;
			}
			#navliste li#meny3 {
				background:url("./felter/felt3.jpg");
				background-size:cover;
			}
			#navliste li#meny4 {
				background:url("./felter/felt4.jpg");
				background-size:cover;
			}

			body{
				
			}						

		</style>
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
		<script>
		$('ul').css('height', $(window).height()+'px').css('width', $(window).width()+'px');
		</script>
	</body>
</html>
