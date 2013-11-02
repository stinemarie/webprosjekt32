<?php  error_reporting(E_ALL) ?>
<!DOCTYPE html>
<head>
		<meta charset="UTF-8">
		<link charset="UTF-8" rel="stylesheet" title="stilark" type="text/css" href="trening.css">
		<title>galleri</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script charset="UTF=8" src="trening.js"></script>
</head>
<body>
	<!-- disse sidene skal vi ha:
	yoga og pilates
	kondisjonstrening
	langløping
	spinning
	styrketrening -->

	<?php
		if(isset($_GET['trening'])) {
			if ($_GET['trening'] == 'yoga og pilates'){
				include 'yogaogpilates.inc.php';
			}else if($_GET['trening'] == 'kondisjonstrening'){
				include 'kondisjonstreing.inc.php';
			}else if($_GET['trening'] == 'langløping'){
				include 'langløping';
			}else if($_GET['trening'] == 'spinning'){
				include 'spinning.inc.php';
			}else if($_GET['trening'] == 'styrketrening'){
				include 'styrketrening';
			}
		}else{
			include 'treninggen.inc.php';
		}
	?>
</body>

