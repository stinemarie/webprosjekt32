<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>galleri</title>
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
