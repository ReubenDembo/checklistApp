var myUsername = document.getElementById("username").value;
var myPassword = document.getElementById("password").value;
var myButton = document.querySelector("button");

function errorMessage(){

	if((myUsername != "admin") && (myPassword !="1Respect!")){

       document.getElementById('erromsg').innerHTML = "Incorrect username or password";
	}
	else
	{
		location.replace("checklist.php");
	}

}

myButton.addEventListener('click', errorMessage);