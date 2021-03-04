const form = document.getElementById('form');
const username = document.getElementById('username');
const Name = document.getElementById('Name');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
	e.preventDefault();

	checkInputs();
});

function checkInputs() {
	// Booleans for DB connection
	const validUser = false;
	const validName = false;
	const validEmail = false;
	const validPhone = false;
	const validPass1 = false;
	const validPass2 = false;

	// Trim to remove the whitespaces
	const usernameValue = username.value.trim();
	const NameValue = Name.value.trim();
	const emailValue = email.value.trim();
	const phoneValue = phone.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();

	// Validate username
	if (usernameValue === '') {
		validUser = false;
		setErrorFor(username, 'Username cannot be blank');
	}
	else if (usernameValue.length < 5) {
		validUser = false;
		setErrorFor(username, 'Less than 5 character long');
	}
	else {
		validUser = true;
		setSuccessFor(username, 'Valid format');
	}
	// Validate full name
	if (NameValue === '') {
		validName = false;
		setErrorFor(Name, 'Name cannot be blank');
	}
	else if (NameValue.lentgth > 50) {
		validName = false;
		setErrorFor(Name, 'Name is too long');
	}
	else {
		validName = true;
		setSuccessFor(Name, 'Valid format');
	}
	// Validate email
	if (emailValue === '') {
		validEmail = false;
		setErrorFor(email, 'Email cannot be blank');
	}
	else if (!isEmail(emailValue)) {
		validEmail = false;
		setErrorFor(email, 'Not a valid email');
	}
	else if (emailValue.length > 50) {
		validEmail = false;
		setErrorFor(email, 'Email is too long');
	}
	else {
		validEmail = true;
		setSuccessFor(email, 'Valid format');
	}
	// Validate phone
	if (phoneValue === '') {
		validPhone = false;
		setErrorFor(phone, 'Phone cannot be blank');
	}
	else if (!isPhonenumber(String(phoneValue))) {
		validPhone = false;
		setErrorFor(phone, 'Accepted format: +00 0000 0000');
	}
	else {
		validPhone = true;
		setSuccessFor(phone, 'Valid phonenumber');
	}
	// Validate password
	if (passwordValue === '') {
		validPass1 = false;
		setErrorFor(password, 'Password cannot be blank');
	}
	else if (passwordValue !== password2Value) {
		validPass1 = false;
		setErrorFor(password, 'Passwords does not match');
	}
	else {
		validPass1 = true;
		setSuccessFor(password, 'Matching password');
	}
	// Validate confirmation password
	if (password2Value === '') {
		validPass2 = false;
		setErrorFor(password2, 'Confirmation Password cannot be blank');
	} else if (password2Value !== passwordValue) {
		validPass2 = false;
		setErrorFor(password2, 'Passwords does not match');
	} else {
		validPass2 = true;
		setSuccessFor(password2, 'Matching password');
	}
}

// jQuery
$(document).ready(function () {

	$("#message").html('Please fill in the form.');
	$("#but_submit").click(function () {

		var username = $("#username").val().trim();
		var name = $("#Name").val().trim();
		var email = $("#email").val().trim();
		var phone = $("#phone").val().trim();
		var password = $("#password").val().trim();



		if (username != "" && name != "" && email != "" && phone != "" && password != "") {
			$.ajax({
				url: 'registration.php',
				type: 'post',
				data: { username: username, name: name, email: email, phone: phone, password: password },
				success: function (response) {
					var msg = "";
					if (response == 1) {
						window.location = "Login_Page.php";
					}
					else if (response == 100) {
						msg = "Username already in use.";
					}
					else if (response == 101) {
						msg = "Email address already in use";
					}
					else if (response == 102) {
						msg = "Username and email not available.";
					}
					else {
						msg = "There was an internal error. Try again.";
					}
					$("#message").html(msg);
				}
			});
		}
		else {
			$("#message").html('Please check your entries!');
		}
	});

});

// FUNCTIONS
function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control success';
	small.innerText = message;
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
function isPhonenumber(phone) {
	return /^\+?([0-9]{2})\)?[ ]?([0-9]{4})[ ]?([0-9]{4})$/.test(phone);
}