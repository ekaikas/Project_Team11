// GETTERS
var form = document.getElementById('form');
var username = document.getElementById("username")
var password = document.getElementById("password")

// EVENT LISTENERS
username.addEventListener("input", validateUsername);
password.addEventListener("input", validatePass)

// FUNCTIONS: Validation
function validateUsername() {
    var usernameValue = username.value.trim();
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
    var passwordValue = password.value.trim();
    if (passwordValue === '') {
        setErrorFor(password, 'Password cannot be blank');
    }
    else if (passwordValue.length < 6) {
        setErrorFor(password, 'A bit short...');
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