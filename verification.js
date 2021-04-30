function isEmail() {
	var email = document.forms["newsletter"]["email"].value;
	const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(String(email).toLowerCase())){
		alert("Please enter a valid email.");
		return false;
	}
	return true;
	// if (!email.match(alphanum)){
	// 	alert("Please remove special characters.")
	// 	return false;
	// }
	// return true;
}

function check(value) {

	var question  = document.getElementsByName(value);
	var i = 0;
	valid = false;

	while (!valid && i < question.length) {
		if (question[i].checked) {
			valid = true;
		}
		i++;
	}

	if (!valid) {
		alert("Please answer all the questions!")
		}
	return valid;

}

function feedbackForm() {
	valid = false;
	if (document.getElementById("media").value == "null") {
		alert("Please select how you found us.");
		return false
	}

	var questions = Array("watch", "rating", "rec");

	for (i=0; i < questions.length; i++) {
		questionCheck = check(questions[i]);
		if (questionCheck == false) {
			break
		} else {
			valid = true;
		}
	}
	return valid
}

