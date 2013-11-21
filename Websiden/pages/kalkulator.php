<h2> Body mass index kalkulator</h2>


	<p>BMI er en forkortelse for "Body mass index" og kan bli brukt til å bedømme kroppsvekt.
	BMI er et veldig grovt mål som ikke tar hensyn til faktorer som alder, kjønn eller muskelmass. Derfor kan en som er meget veltrent få en høyere bmi og bli klassifisert som overvektig. </p>

	<div class="bmikalk">
	<form name="bmiKalk">
		Din vekt i kilogram: <input id="vekt" type="text" name="vekt" size="10">
		Din høyde i centimeter: <input id="hoyde" type="text" name="høyde" size="10">
		<input type="button" id="button" value="Kalkuler BMI" onClick="kalkulerBmi()"><br /><br /><br />
		Din BMI: <input id="visBmi" type="text" name="visBmi" size="10" readonly>
		Dette betyr: <input id="betydning" type="text" name="betydning" size="35" readonly>
		<input id="reset" type="reset" value="Tilbakestill" />
	</form>
	</div>

<h2>Basal metabolic rate kalkulator</h2>
	<p> BMR er en forkortelse for "Basal metabolic rate" som er mengden energi et menneske forbrenner ved hvile. Du kan under her prøve ut vår BMR kalkulator som er basert på formelen du finner på <a href="http://www.bmi-calculator.net/bmr-calculator/bmr-formula.php" target="_blank">denne siden</a>.</p>

	<div class="bmrkalk">
	<form name="BMRkalk">
	  	Kvinne <input type="radio" id="k1" name="kjønn" checked >
	  	Mann <input type="radio" id="m1" name="kjønn" ><br />
	  	Din vekt i kilogram: <input id"bmrvekt" type="text" name="bmrvekt" size="10">
	  	Din høyde i cm: <input id="bmrhøyde" type="text" name="bmrhøyde" size="10">
	  	Alder <input id="alder" type="text" name="bmralder" size="10">
	  	<input id="bmrbutton" type="Button" value="Kalkuler BMR" onClick="kalkulerBmr()"><br /><br /><br />
	  	<div class="resultattext">
	  	Resultat:  <Input id="resultat" type="text" name="resultat" size="10" readonly> er din daglige forbrenning uten at du er i aktivitet.
	  	</div>
	  	<input id="resetbmr" type="reset" value="Tilbakestill">
	</form>
	</div>
