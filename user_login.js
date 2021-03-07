//jQuery >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

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

form.addEventListener('submit', e => {
    // Will prevent event (submit button will not reload the page)! => good for validation
    e.preventDefault();

    // will validate on submit
    validateUsername();
    validatePass();
    sendToDB(); //will trigger pop up window on successful login!
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
function sendToDB() {
    if (validUser && validPass) {
        $.ajax({
            url: 'user_login.php',
            type: 'post',
            data: { username: usernameValue, password: passwordValue },
            success: function (response) {
                if (response == 1) {
                    window.location = "index.php";
                }
                else if (response == 2) {
                    openPopUp("Wrong password!");
                    setErrorFor(password, 'Wrong Password');
                }
                else if (response == 3) {
                    openPopUp("Account does not exist");
                    setErrorFor(username, 'Account does not exist');
                }
                else { // response == 4
                    openPopUp("Error");
                }
            }
        });
    }
    else {
        //$("#message").html('All fields are mandatory!');
        openPopUp('All fields required!');
    }
}

// Pop up messae
//appends an "active" class to .popup and .popup-content when the "Open" button is clicked
function openPopUp(onScreen) {
    $("p").html(onScreen);
    $(".popup-overlay, .popup-content").addClass("active");
    $(".page-bckgrnd").addClass("active");
    $(".loginbox").addClass("active");
}

//removes the "active" class to .popup and .popup-content when the "Close" button is clicked 
$(".close, .popup-overlay").on("click", function () {
    $(".popup-overlay, .popup-content").removeClass("active");
    $(".page-bckgrnd").removeClass("active");
    $(".loginbox").removeClass("active");
});