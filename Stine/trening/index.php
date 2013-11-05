<?php  error_reporting(E_ALL) ?>
<!DOCTYPE html>
<head>
		<meta charset="UTF-8">
		<link charset="UTF-8" rel="stylesheet" title="stilark" type="text/css" href="trening.css">
		<title>galleri</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script charset="UTF=8" src="../galleri.js"></script>
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
			if ($_GET['trening'] == 'yogaogpilates'){
				include 'yogaogpilates.inc.php';
			}elseif($_GET['trening'] == 'kondisjonstrening'){
				include 'kondisjonstrening.inc.php';
			}elseif($_GET['trening'] == 'langloping'){
				include 'langloping.inc.php';
			}elseif($_GET['trening'] == 'spinning'){
				include 'spinning.inc.php';
			}elseif($_GET['trening'] == 'styrketrening'){
				include 'styrketrening.inc.php';
			}
		}else{
			include 'treninggen.inc.php';
		}
	?>
</body>

