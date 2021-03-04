const form = document.getElementById('form');
const form_username = document.getElementById('form_username');
const form_password = document.getElementById('form_password');

// trim to remove the whitespaces
const usernameValue = form_username.value.trim();
const passwordValue = form_password.value.trim();

form.addEventListener('submit', e => {
	e.preventDefault();

	validateUsername();
	validatePassword();
});

// FUNCTIONS: Validation
function validateUsername() {
	if (usernameValue.length < 5) {
		setErrorFor(form_username, 'Username cannot be blank');
	}
	else {
		setSuccessFor(form_username);
	}
}
function validatePassword() {
	if (passwordValue === '') {
		setErrorFor(form_password, 'Password cannot be blank');
	}
	else {
		setSuccessFor(form_password);
	}
}


// FUNCTIONS: Messages:
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