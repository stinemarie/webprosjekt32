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
		<img id="bakgrunn" src="img/bakgrunn.jpg" alt="">
		<img id="superhemmelig" src="img/superhemmeligkapp.png" alt="">

		<div id="frame">
			<header>
				<a href="index.php?page=hjem">
					<img id="logo" src="img/logogul.png" width="260px" alt="Websidens logo">
				</a>
				<h1 id="tittel">TTFS</h1>
				<h2 id="undertittel">-Treningstips for studenter</h2>
			</header>

			<nav id="hovednavigering">
				
				<div id="trening">
					<a href="index.php?page=hvorfortrene">Trening</a>

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
						<div class="clickable">
							<a href="index.php?page=treningstips">Treningstips!</a>
						</div>
						<div class=" clickable undersideSisteKnapp">
							<a href="index.php?page=hvor">Trene hvor?</a>
						</div>
					</div>
				</div>


				<div id="kosthold">
					<a href="index.php?page=kosthold">Kosthold</a>

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

					<div id="ptNav" class="undersideNav">
						<div class="clickable">
							<a href="index.php?page=personligtrener">Personlig Trener</a>
						</div>
						<div class="clickable">
							<a href="index.php?page=intervju">Intervju</a>
						</div>
						<div id="trenerne" class="clickable undersideSisteKnapp">
							<a href="index.php?page=trenerne">Trenerne</a>
						</div>
					</div>

				</div>


				<div id="lenker">
					<a href="index.php?page=lenker">Lenker</a>
				</div>


				<div id="om">
					<a href="index.php?page=omoss">Om oss</a>
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
			elseif($_GET["page"] == "treningstips")
				include("./pages/treningstips.php");
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
			else
				include("./pages/hjem.php");
			?>


			</div>




			<footer>

				<img id="minilogo" src="img/logogul.png" width="40px" alt="Websidens logo">

			</footer>

		</div>

	</body>
</html>