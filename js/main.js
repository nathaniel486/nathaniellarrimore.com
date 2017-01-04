

function validateForm() {
    var name = document.forms['contactForm']['name'].value;
	var email = document.forms['contactForm']['email'].value;
	var text = document.forms['contactForm']['text'].value;
	
	if(name == ""){
		document.getElementById("nameError").innerHTML = "PLEASE ENTER YOUR NAME.";
		return false;
	}else{
		document.getElementById("nameError").innerHTML = "";
	}
	
	if(email == ""){
		document.getElementById("emailError").innerHTML = "PLEASE ENTER YOUR EMAIL.";
		return false;
	}else{
		document.getElementById("emailError").innerHTML = "";
	}
	
	if(text == ""){
		document.getElementById("textError").innerHTML = "PLEASE ENTER A MESSAGE.";
		return false;
	}else{
		document.getElementById("textError").innerHTML = "";
	}
}