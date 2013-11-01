<?php
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
			include 'oppskrifter.inc.php';
		}
?>

