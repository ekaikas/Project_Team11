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


// jQuery
$(document).ready(function () {

    $("#message").html('Please fill in the form.');
    $("#but_submit").click(function () {
        var validUser = false;
        var validName = false;
        var validEmail = false;
        var validPhone = false;
        var validPass1 = false;
        var validPass2 = false;

        var username = $("#username").val().trim();
        var name = $("#Name").val().trim();
        var email = $("#email").val().trim();
        var phone = $("#phone").val().trim();
        var password = $("#password").val().trim();
        var password2 = $("#password2").val().trim();

        // Validate username
        if (username == '' || username.length < 5) {
            validUser = false;
        }
        else {
            validUser = true;
        }
        // Validate full name
        if (name == '' || name.lentgth > 50) {
            validName = false;
        }
        else {
            validName = true;
        }
        // Validate email
        if (email == '' || email.length > 50 || !email.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
            validEmail = false;
        }
        else {
            validEmail = true;
        }
        // Validate phone
        if (phone == '' || !phone.match(/^\+?([0-9]{2})\)?[ ]?([0-9]{4})[ ]?([0-9]{4})$/)) {
            validPhone = false;
        }
        else {
            validPhone = true;
        }
        // Validate password
        if (password == '' || password != password2 || !password.match(/^.*(?=.{15,})(?=.{2,}\d)(?=.{2,}[a-z])(?=.{2,}[A-Z])(?=.{2,}[\!\@\#\$\%\^\&\*\-]).*$/)) {
            validPass1 = false;
        }
        else {
            validPass1 = true;
        }
        // Validate confirmation password
        if (password2 == '' || password2 != password || !password.match(/^.*(?=.{15,})(?=.{2,}\d)(?=.{2,}[a-z])(?=.{2,}[A-Z])(?=.{2,}[\!\@\#\$\%\^\&\*\-]).*$/)) {
            validPass2 = false;
        }
        else {
            validPass2 = true;
        }

        if (validUser && validName && validEmail && validPhone && validPass1 && validPass2) {
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
            $("#message").html('Validation failed!');
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