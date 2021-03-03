const form = document.getElementById('form');
const form_username = document.getElementById('form_username');
const form_password = document.getElementById('form_password');

form.addEventListener('submit', e => {
	e.preventDefault();

	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
	const usernameValue = form_username.value.trim();
	const passwordValue = form_password.value.trim();

	if (usernameValue === '') {
		setErrorFor(form_username, 'Username cannot be blank');
	}
	else {
		setSuccessFor(form_username);
	}

	if (passwordValue === '') {
		setErrorFor(form_password, 'Password cannot be blank');
	}
	else {
		setSuccessFor(form_password);
	}

}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}