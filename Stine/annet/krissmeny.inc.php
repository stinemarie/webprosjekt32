<?php
				 if (isset($_GET['page'])){

					if ($_GET['page'] == '2'){
?>
	<div>
		<img class="fargefelt" id="felt1" src="./felter/felt1.jpg" alt="feltNr1"> 
	</div>
<?
					}else if($_GET['page'] =='1'){
						include 'video.inc.php';
					}else if($_GET['page'] =='3'){
						include 'lenker.inc.php';	
					}else if($_GET['page'] =='hjem'){
						include 'hjemside.inc.php';
					}else{
						include 'hmm.inc.php';
					} 
				 }else{
				 	include 'hjemside.inc.php';
				 	}


				include 'footer.inc.php';
			?>	
?>
	<div>
		<img class="fargefelt" id="felt1" src="./felter/felt1.jpg" alt="feltNr1"> 
		<img class="fargefelt" id="felt2" src="./felter/felt2.jpg" alt="feltNr2"> 
		<img class="fargefelt" id="felt3" src="./felter/felt3.jpg" alt="feltNr3"> 
		<img class="fargefelt" id="felt4" src="./felter/felt4.jpg" alt="feltNr4"> 
	</div>