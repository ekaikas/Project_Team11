// GETTERS **********************************************
var form = document.getElementById('form');
var username = document.getElementById('username');
var Name = document.getElementById('Name');
var email = document.getElementById('email');
var phone = document.getElementById('phone');
var password = document.getElementById('password');
var password2 = document.getElementById('password2');

// VARIABLES *******************************************
var usernameValue;
var nameValue;
var emailValue;
var phoneValue;
var passwordValue;
var password2Value;

var validUser = false;
var validName = false;
var validEmail = false;
var validPhone = false;
var validPass1 = false;
var validPass2 = false;

// EVENT NADLER ****************************************
username.addEventListener("input", validateUsername);
email.addEventListener("input", validateEmail);
phone.addEventListener("input", validatePhone);
password.addEventListener("input", validatePass);
password2.addEventListener("input", validatePass2);
Name.addEventListener("input", validateName);

form.addEventListener('submit', e => {
	e.preventDefault();
	validateUsername();
	validateName();
	validateEmail();
	validatePhone();
	validatePass();
	validatePass2();
});


// FUNCTIONS *******************************************
//FUNCTIONS Validators:
function validateUsername() {
	validUser = false;
	usernameValue = username.value.trim();
	if (usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
	}
	else if (usernameValue.length < 5) {
		setErrorFor(username, 'Less than 5 character long');
	}
	else {
		setSuccessFor(username, 'Valid format');
		validUser = true;
	}
}

function validateName() {
	validName = false;
	nameValue = Name.value.trim();
	if (nameValue.length = 0) {
		setErrorFor(Name, 'Name cannot be blank');
	}
	else if (nameValue.length < 5) {
		setErrorFor(Name, 'At least 5 characters');
	}
	else if (nameValue.length >= 50) {
		setErrorFor(Name, 'Name is too long');
	}
	else {
		setSuccessFor(Name, 'Valid format');
		validName = true;
	}

}

function validateEmail() {
	validEmail = false;
	emailValue = email.value.trim();
	if (emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	}
	else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	}
	else if (emailValue.length > 50) {
		setErrorFor(email, 'Email is too long');
	}
	else {
		setSuccessFor(email, 'Valid format');
		validEmail = true;
	}
}

function validatePhone() {
	validPhone = false;
	phoneValue = phone.value.trim();
	if (phoneValue === '') {
		setErrorFor(phone, 'Phone cannot be blank');
	}
	else if (!isPhonenumber(String(phoneValue))) {
		setErrorFor(phone, 'Accepted format: +00 0000 0000');
	}
	else {
		setSuccessFor(phone, 'Valid phonenumber');
		validPhone = true;
	}

}

function validatePass() {
	validPass1 = false;
	passwordValue = password.value.trim();
	password2Value = password2.value.trim();
	if (passwordValue.length == 0) {
		setErrorFor(password, 'Cannot be blank');
	}
	else if (passwordValue.length < 15) {
		if (passwordValue != password2Value) {
			setErrorFor(password, 'At least 15 characters...');
			//setErrorFor(password2, 'Passwords do not match');
		}
		else if (passwordValue == password2Value) {
			setErrorFor(password, 'At least 15 characters...');
			//setErrorFor(password2, 'At least 15 characters...');
		}
	}
	else if (!isPassword(passwordValue)) {
		if (passwordValue != password2Value) {
			setErrorFor(password, 'Weak password')
			//setErrorFor(password2, 'Passwords do not match');
		}
		else if (passwordValue == password2Value) {
			setErrorFor(password, 'Weak password')
			//setErrorFor(password2, 'Weak password')
		}
	}
	else if (isPassword(passwordValue)) {
		if (passwordValue != password2Value) {
			setErrorFor(password, 'Passwords do not match')
			setErrorFor(password2, 'Passwords do not match')
		}
		else if (passwordValue == password2Value) {
			setSuccessFor(password, 'Matching passwords')
			setSuccessFor(password2, 'Matching passwords')
			validPass1 = true;
			validPass2 = true;
		}
	}
}

function validatePass2() {
	validPass2 = false;
	passwordValue = password.value.trim();
	password2Value = password2.value.trim();
	if (password2Value.length == 0) {
		setErrorFor(password2, 'Cannot be blank');
	}
	else if (password2Value.length < 15) {
		if (passwordValue != password2Value) {
			setErrorFor(password2, 'At least 15 characters...');
			//setErrorFor(password, 'Passwords do not match');
		}
		else if (passwordValue == password2Value) {
			setErrorFor(password2, 'At least 15 characters...');
			//setErrorFor(password, 'At least 15 characters...');
		}
	}
	else if (!isPassword(password2Value)) {
		if (passwordValue != password2Value) {
			setErrorFor(password2, 'Weak password')
			//setErrorFor(password, 'Passwords do not match');
		}
		else if (passwordValue == password2Value) {
			setErrorFor(password2, 'Weak password')
			//setErrorFor(password, 'Weak password')
		}
	}
	else if (isPassword(password2Value)) {
		if (passwordValue != password2Value) {
			setErrorFor(password2, 'Passwords do not match')
			setErrorFor(password, 'Passwords do not match')
		}
		else if (passwordValue == password2Value) {
			setSuccessFor(password2, 'Matching passwords')
			setSuccessFor(password, 'Matching passwords')
			validPass1 = true;
			validPass2 = true;
		}
	}
}

// FUNCTIONS Messages:
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

// FUNCTIONS Testers:
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
function isPhonenumber(phone) {
	return /^\+?([0-9]{2})\)?[ ]?([0-9]{4})[ ]?([0-9]{4})$/.test(phone);
}
function isPassword(password) {
	return /^.*(?=.{15,})(?=.{2,}\d)(?=.{2,}[a-z])(?=.{2,}[A-Z])(?=.{2,}[\!\@\#\$\%\^\&\*\-]).*$/.test(password)
	/*
		At least 15 characters
		two or more lower case letters
		two or more upper case letters
		two or more digits
		two or more of the following special characters: !@#$%^&*-
	*/
}