function emailValidate() {

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

