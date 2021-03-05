// GETTERS ***************************************************
var form = document.getElementById('form');
var username = document.getElementById("username");
var password = document.getElementById("password");

// VARIABLES *************************************************
var usernameValue;
var passwordValue;

var validUser = false;
var validPass = false;


// EVENT LISTENERS ********************************************
username.addEventListener("input", validateUsername); // will validate on iput
password.addEventListener("input", validatePass); // will validate on iput

form.addEventListener('submit', e => {
    e.preventDefault();
    validateUsername(); // will validate on submit
    validatePass(); // will validate on submit
});

// FUNCTIONS **************************************************
// FUNCTIONS: Validation
function validateUsername() {
    usernameValue = username.value.trim();
    validPass = false;
    if (usernameValue === '') {
        setErrorFor(username, 'Username cannot be blank');
    }
    else if (usernameValue.length < 5) {
        setErrorFor(username, 'Less than 5 character long');
    }
    else {
        setSuccessFor(username, 'Seems OK');
        validUser = true;
    }
}
function validatePass() {
    passwordValue = password.value.trim();
    validPass = false;
    if (passwordValue === '') {
        setErrorFor(password, 'Password cannot be blank');
    }
    else if (passwordValue.length < 6) {
        setErrorFor(password, 'A bit short...');
    }
    else {
        setSuccessFor(password, 'Seems OK');
        validPass = true;
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