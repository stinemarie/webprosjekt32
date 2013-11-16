<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		</div> <!-- denne diven er kun synlig under 750px skjerm -->
		<a href="#frame">
			<div id="taMegTilToppen">
			</div>
		</a>
		<img id="bakgrunn" src="img/bakgrunn.jpg" alt="bakgrunnsbilde">
		<img id="superhemmelig" src="img/superhemmeligkapp.png" alt="knapp for å komme inn på en skjult video">

		<div id="frame">
			<header>
				<a href="index.php?page=hjem">
				<img id="logo" src="img/logogul.png" alt="Websidens logo">
				</a>
				<h1 id="undertittel">-Treningstips for studenter</h1>
			</header>

			<nav id="hovednavigering">
				
				<div id="trening">
					<a id="treningslink" href="index.php?page=hvorfortrene">Trening</a>

					<div id="treningsNav" class="undersideNav">
						<div class="clickable">
							<a href="index.php?page=hvorfortrene">Hvorfor trene?</a>
						</div>
						<div class="clickable">
							<a href="index.php?page=ovelser">Øvelser</a>
						</div>
						<div class="clickable">
							<a href="index.php?page=treningsprosjekt">Før/etter-prosjekt</a>
						</div>
						<div class=" clickable">
							<a href="index.php?page=hvor">Trene hvor?</a>
						</div>
						<div class="clickable undersideSisteKnapp">
							<a href="index.php?page=kalkulator">BMI-kalkulator</a>
						</div>
					</div>
				</div>


				<div id="kosthold">
					<a id="kostholdslink" href="index.php?page=kosthold">Kosthold</a>

					<div id="kostholdsNav" class="undersideNav">
						<div class="clickable">
							<a href="index.php?page=kosthold">Om kosthold</a>
						</div>
						<div class="clickable">
							<a href="index.php?page=oppskrifter">Oppskrifter</a>
						</div>
						<div class="clickable">
							<a href="index.php?page=ukesmeny">Ukesmeny</a>
						</div>
						<div class="clickable">
							<a href="index.php?page=favoritter">Våre favoritter</a>
						</div>
						<div class="clickable undersideSisteKnapp">
							<a href="index.php?page=ernering">Ernæring</a>
						</div>
					</div>

				</div>

				<div id="pt">
					<a id="ptlink" href="index.php?page=personligtrener">Personlig<br>trener</a>
				</div>

				<div id="lenker">
					<a id="lenkerlink" href="index.php?page=lenker">Lenker</a>
				</div>

				<div id="om">
					<a id="omosslink" href="index.php?page=omoss">Om oss</a>
				</div>

			</nav>

			<div id="content">
					
			<?php
			if($_GET["page"] == "hjem")
				include("./pages/hjem.php");
				elseif($_GET["page"] == "hvorfortrene")
					include("./pages/hvorfortrene.php");
				elseif($_GET["page"] == "ovelser")
					include("./pages/ovelser.php");
				elseif($_GET["page"] == "treningsprosjekt")
					include("./pages/treningsprosjekt.php");
				elseif($_GET["page"] == "hvor")
					include("./pages/hvor.php");
				elseif($_GET["page"] == "kosthold")
					include("./pages/kosthold.php");
				elseif($_GET["page"] == "oppskrifter")
					include("./pages/oppskrifter.php");
				elseif($_GET["page"] == "ukesmeny")
					include("./pages/ukesmeny.php");
				elseif($_GET["page"] == "favoritter")
					include("./pages/favoritter.php");
				elseif($_GET["page"] == "ernering")
					include("./pages/ernering.php");
				elseif($_GET["page"] == "personligtrener")
					include("./pages/personligtrener.php");
				elseif($_GET["page"] == "intervju")
					include("./pages/intervju.php");
				elseif($_GET["page"] == "trenerne")
					include("./pages/trenerne.php");
				elseif($_GET["page"] == "lenker")
					include("./pages/lenker.php");
				elseif($_GET["page"] == "omoss")
					include("./pages/omoss.php");
				elseif($_GET["page"] == "kontakt")
					include("./pages/kontakt.php");
				elseif($_GET["page"] == "dessert")
					include("./pages/oppskrifter/dessert.php");
				elseif($_GET["page"] == "fisk")
					include("./pages/oppskrifter/fisk.php");
				elseif($_GET["page"] == "kylling")
					include("./pages/oppskrifter/kylling.php");
				elseif($_GET["page"] == "matpakke")
					include("./pages/oppskrifter/matpakke.php");
				elseif($_GET["page"] == "wok")
					include("./pages/oppskrifter/wok.php");
				elseif($_GET["page"] == "smoothie")
					include("./pages/oppskrifter/smoothie.php");
				elseif($_GET["page"] == "suppe")
					include("./pages/oppskrifter/suppe.php");
				elseif($_GET["page"] == "fougasse")
					include("./pages/oppskrifter/fougasse.php");
				elseif($_GET["page"] == "nistepakke")
					include("./pages/oppskrifter/nistepakke.php");
				elseif($_GET["page"] == "pastapecorino")
					include("./pages/oppskrifter/pastapecorino.php");
				elseif($_GET["page"] == "pizza")
					include("./pages/oppskrifter/pizza.php");
				elseif($_GET["page"] == "polarbrod")
					include("./pages/oppskrifter/polarbrod.php");
				elseif($_GET["page"] == "potetomelett")
					include("./pages/oppskrifter/potetomelett.php");
				elseif($_GET["page"] == "potetsalat")
					include("./pages/oppskrifter/potetsalat.php");
				elseif($_GET["page"] == "sitruskylling")
					include("./pages/oppskrifter/sitruskylling.php");
				elseif($_GET["page"] == "sommersalat")
					include("./pages/oppskrifter/sommersalat.php");
				elseif($_GET["page"] == "spaghettispinat")
					include("./pages/oppskrifter/spaghettispinat.php");
				elseif($_GET["page"] == "squashsalat")
					include("./pages/oppskrifter/squashsalat.php");
				elseif($_GET["page"] == "tortellini")
					include("./pages/oppskrifter/tortellini.php");
				elseif($_GET["page"] == "yoghurt")
					include("./pages/oppskrifter/yoghurt.php");
				elseif($_GET["page"] == "kalkulator")
					include("./pages/kalkulator.php");
				elseif($_GET["page"] == "kondisjon")
					include("./pages/kondisjon.php");
				elseif($_GET["page"] == "styrketrening")
					include("./pages/styrketrening.php");
			else
				include("./pages/hjem.php");
			?>

			</div>

			<footer>
				<div id="copyright">&copy 2013</div>
				<img id="minilogo" src="img/logogul.png"  alt="Websidens logo">
				<div id="contentOwners">TTFS</div>
			</footer>

		</div>

		<div class="easteregg">
			<div id="videoframe">
				<img src="img/ramme.png" alt="ramme for video">
				<iframe width="560" height="330" src="//www.youtube.com/embed/eCRsxWCzWpY" frameborder="0" allowfullscreen></iframe>
			</div>
			<p id="tamegtilbake"> ta meg tilbake! </p>

		
	


	</body>
</html>