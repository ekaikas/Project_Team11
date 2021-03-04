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
	// Trim to remove the whitespaces
	const usernameValue = username.value.trim();
	const NameValue = Name.value.trim();
	const emailValue = email.value.trim();
	const phoneValue = phone.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();

	// Validate username
	if (usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
	}
	else if (usernameValue.length < 5) {
		setErrorFor(username, 'Less than 5 character long');
	}
	else {
		setSuccessFor(username, 'Valid format');
	}
	// Validate full name
	if (NameValue === '') {
		setErrorFor(Name, 'Name cannot be blank');
	}
	else if (NameValue.lentgth > 50) {
		setErrorFor(Name, 'Name is too long');
	}
	else {
		setSuccessFor(Name, 'Valid format');
	}
	// Validate email
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
	}
	// Validate phone
	if (phoneValue === '') {
		setErrorFor(phone, 'Phone cannot be blank');
	}
	else if (!isPhonenumber(String(phoneValue))) {
		setErrorFor(phone, 'Accepted format: +00 0000 0000');
	}
	else {
		setSuccessFor(phone, 'Valid phonenumber');
	}
	// Validate password
	if (passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	}
	else if (passwordValue !== password2Value) {
		setErrorFor(password, 'Passwords does not match');
	}
	else if (!isPassword(passwordValue)) {
		setErrorFor(password, 'Strong password required');
	}
	else {
		setSuccessFor(password, 'Matching password');
	}
	// Validate confirmation password
	if (password2Value === '') {
		setErrorFor(password2, 'Confirmation Password cannot be blank');
	}
	else if (password2Value !== passwordValue) {
		setErrorFor(password2, 'Passwords does not match');
	}
	else if (!isPassword(password2Value)) {
		setErrorFor(password2, 'Strong password required');
	} else {
		setSuccessFor(password2, 'Matching password');
	}
}

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