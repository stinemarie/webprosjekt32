function kalkulerBMI() {
var vekt = document.bmiForm.vekt.value
var h�yde = document.bmiForm.height.value
if(vekt > 0 && h�yde > 0){	
var finalBmi = vekt/(h�yde/100*h�yde/100)
document.bmiForm.bmi.value = finalBMI
if(finalBmi < 18.5){
document.bmiForm.mening.value = "Du er klassifisert som undervektig."
}
if(finalBmi > 18.5 && finalBmi < 25){
document.bmiForm.mening.value = "Du er klassifisert som normalvektig."
}
if(finalBmi > 25){
document.bmiForm.mening.value = "Du er klassifisert som overvektig"
}
}
else{
alert("Vennligst fyll in alt korrekt.")
}
}