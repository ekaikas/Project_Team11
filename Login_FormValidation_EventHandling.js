const form = document.getElementById('form');
const username = document.getElementById('username');
const password = document.getElementById('password');


form.addEventListener('submit', e => {
	e.preventDefault();

	validateUsername();
	validatePass();
});

// FUNCTIONS: Validation
function validateUsername() {
	const usernameValue = username.value.trim();
	if (usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
	}
	else if (usernameValue.length < 5) {
		setErrorFor(username, 'Less than 5 character long');
	}
	else {
		setSuccessFor(username, 'Seems OK');
	}
}
function validatePass() {
	const passwordValue = password.value.trim();

	if (passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	}
	else if (passwordValue.length < 8) {
		setErrorFor(password, 'A bit longer...');
	}
	else {
		setSuccessFor(password, 'Seems OK');
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