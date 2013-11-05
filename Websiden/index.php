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

		<div id="frame">

			<header>
				<a href="index.php?page=hjem">
					<img id="logo" src="img/logogul.png" width="260px" alt="Websidens logo">
				</a>
				<h1 id="tittel">TTFS</h1>
				<h2 id="undertittel">-Treningstips for studenter</h2>
			</header>

			<nav id="hovednavigering">
				
				<div id="trening">Trening

					<div id="treningsNav" class="undersideNav">
						<div class="clickable">
							Hvorfor trene?
							<a href="index.php?page=hvorfortrene"></a>
						</div>
						<div class="clickable">
							Øvelser
							<a href="index.php?page=ovelser"></a>
						</div>
						<div class="clickable">
							Før/etter-prosjekt
							<a href="index.php?page=treningsprosjekt"></a>
						</div>
						<div class="clickable">
							Treningstips!
							<a href="index.php?page=treningstips"></a>
						</div>
						<div class=" clickable undersideSisteKnapp">
							Trene hvor?
							<a href="index.php?page=hvor"></a>
						</div>
					</div>

				</div>


				<div id="kosthold">Kosthold

					<div id="kostholdsNav" class="undersideNav">
						<div class="clickable">
							Om kosthold
							<a href="index.php?page=kosthold"></a>
						</div>
						<div class="clickable">
							Oppskrifter
							<a href="index.php?page=oppskrifter"></a>
						</div>
						<div class="clickable">
							Ukesmeny
							<a href="index.php?page=ukesmeny"></a>
						</div>
						<div class="clickable">
							Våre favoritter
							<a href="index.php?page=favoritter"></a>
						</div>
						<div class="clickable undersideSisteKnapp">
							Ernæring
							<a href="index.php?page=ernering"></a>
						</div>
					</div>

				</div>


				<div id="pt">Personlig<br>trener

					<div id="ptNav" class="undersideNav">
						<div class="clickable">
							Personlig Trener
							<a href="index.php?page=personligtrener"></a>
						</div>
						<div class="clickable">
							Intervju
							<a href="index.php?page=intervju"></a>
						</div>
						<div class=" clickable undersideSisteKnapp">
							Trenerne
							<a href="index.php?page=trenerne"></a>
						</div>
					</div>

				</div>


				<div id="lenker">Lenker

					<div id="lenkeNav" class="undersideNav">
						<div class="clickable undersideSisteKnapp">
							Treningsrelaterte lenker
							<a href="index.php?page=lenker"></a>
						</div>
					</div>

				</div>



				<div id="om">Om oss

					<div id="omNav" class="undersideNav">
						<div class="clickable">
							Om oss
							<a href="index.php?page=omoss"></a>
						</div>
						<div class="clickable undersideSisteKnapp">
							Kontakt oss
							<a href="index.php?page=kontakt"></a>
						</div>
					</div>

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