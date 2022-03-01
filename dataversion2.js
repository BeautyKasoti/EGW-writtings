/*function display(){ 
var registration_Number= document.getElementById("reg#").value;
var first_name= document.getElementById("first_name").value;
var last_name= document.getElementById("last_name").value;
var email = document.getElementById("email").value;
var location = document.getElementById("location").value;
//display the data
document.getElementById("1").innerHTML= registration_Number;
document.getElementById("2").innerHTML= first_name;
document.getElementById("3").innerHTML= last_name;
document.getElementById("4").innerHTML= email;
document.getElementById("5").innerHTML= location;
return false;
}*/

var dataEntered= document.getElementsByClassName("inputs");
var dataShow = document.getElementsBYClassName("outputs");

function show_data(){
	for(var i = 0; i < dataEntered.length; i++){
		dataShow[i] = dataEntered[i].value;
	}
return false;
}
