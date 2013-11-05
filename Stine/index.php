<?php  error_reporting(E_ALL) ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link charset="UTF-8" rel="stylesheet" title="stilark" type="text/css" href="stilarkGalleri.css">
		<title>galleri</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script charset="UTF=8" src="galleri.js"></script>
	</head>

	<body>
		<h1> VELKOMMEN! </h1>

		<p>jeg vil vise deg noe!</p>

		<?php
			if(isset($_GET['side'])){
				if($_GET['side']  == 'oppskrift')
				{
					if (isset($_GET['oppskrift'])){
						if ($_GET['oppskrift'] == 'felt1'){
							include 'test1.inc.php';
						}else if($_GET['oppskrift'] == 'felt2'){
							include 'test2.inc.php';
						}else if($_GET['oppskrift'] == 'felt3'){
							include 'test3.inc.php';
						}else if($_GET['oppskrift'] == 'felt4'){
							include 'test4.inc.php';
						}
					}else{
						include 'oppskrifter2.inc.php';
					}
				}else if($_GET['side'] == 'karusell'){
					include 'karusell.inc.php';
				}else if ($_GET['side'] == 'kommer' ){
					include 'kommer.inc.php';
				}
			}
			else{
				include "meny0.inc.php";
			}				
		?>
	</body>
</html>
