// GETTERS ***************************************************
var form = document.getElementById('form');
var username = document.getElementById("username");
var password = document.getElementById("password");

// VARIABLES *************************************************
// They will be used in the validation process
var usernameValue;
var passwordValue;

// They will be used in jQuery script in user_login.js => DB operations
var validUser = false;
var validPass = false;


// EVENT LISTENERS ********************************************
// will validate on iput
username.addEventListener("input", validateUsername);
password.addEventListener("input", validatePass);
username.addEventListener("input", validatePass);
password.addEventListener("input", validateUsername);

form.addEventListener('submit', e => {
    // Will prevent event (submit button will not reload the page)! => good for validation
    e.preventDefault();

    // will validate on submit
    validateUsername();
    validatePass();
});

// FUNCTIONS **************************************************
// FUNCTIONS: Validation
function validateUsername() {
    usernameValue = username.value.trim();
    validPass = false;
    if (usernameValue === '') {
        setErrorFor(username, 'Username cannot be blank');
    }
    else {
        setNoteFor(username, 'Ready to submit');
        validUser = true;
    }
}
function validatePass() {
    passwordValue = password.value.trim();
    validPass = false;
    if (passwordValue === '') {
        setErrorFor(password, 'Password cannot be blank');
    }
    else {
        setNoteFor(password, 'Ready to submit');
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
function setNoteFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control notif';
    small.innerText = message;
}
function setSuccessFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control success';
    small.innerText = message;
}