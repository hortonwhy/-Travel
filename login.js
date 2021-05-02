function isRegisterValid() {
	username = document.forms["register"]["usernameReg"].value;
	password = document.forms["register"]["password"].value;
	if (username == "") {
		alert("You must enter a username and password");
		return false;
	} else if (password == "") {
		alert("You must enter a password");
		return false;
	}


	if (!validUser(username)) {
		alert("You must enter a valid username");
		return false;
	}
	else if (!validPass(password)) {
		alert("You must enter a valid password");
		return false;
	}


	return true;
}



function validUser(u) {
	// the input username should only contains characters A-Z, a-z, and -
	//var re = /^[a-zA-Z\-]+$/;
	var re = "^[A-Za-z_][A-Za-z0-9_]{1,12}$";
	return re.test(u);
}


function validPass(p) {
	// at least one number, one lowercase and one uppercase letter
	//     // at least six characters that are letters, numbers or the underscore
	var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}$/;
	return re.test(p);
}
