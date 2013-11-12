<h2> Body mass index kalkulator</h2>


<p>BMI er en forkortelse for "Body mass index" og kan bli brukt til å bedømme kroppsvekt.
BMI er et veldig grovt mål som ikke tar hensyn til faktorer som alder, kjønn eller muskelmass. Derfor kan en som er meget veltrent få en høyere bmi og bli klassifisert som overvektig. </p>

<div>
<form name="bmiKalk">
	Din vekt i kilogram: <input id="vekt" type="text" name="vekt" size="10">
	Din høyde i centimeter: <input id="hoyde" type="text" name="høyde" size="10">
	<input type="button" id="button" value="Kalkuler BMI" onClick="kalkulerBmi()"><br /><br /><br />
	Din BMI: <input id="visBMI" type="text" name="visBmi" size="10">
	Dette betyr: <input id="betydning" type="text" name="betydning" size="35">
	<input id="reset" type="reset" value="Tilbakestill" />
</form>
</div>