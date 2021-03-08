// GETTERS **********************************************
var form = document.getElementById('form');
var p_event = document.getElementById('cevent');
var c_name = document.getElementById('card_name');
var c_number = document.getElementById('cnumber');
var s_number = document.getElementById('snumber');
var email = document.getElementById('email');
var t_amnt = document.getElementById('t_amnt');
var b_service = document.getElementById('bservice');

// VARIABLES *******************************************
// They will be used in the validation proc.
var p_eventValue;
var c_nameValue;
var c_numberValue;
var s_numberValue;
var emailValue;
var t_amntValue;
var b_serviceValue;

// They will be used in jQuery script in ticket_purch.js => DB operations
var validEvent = false;
var validHolder = false;
var validCard = false;
var validSec = false;
var validEmail = false;
var validAmnt = false;
var validService = false;
var successful_purch = false; // Will be used to validate ticket purchase for tickets_avlbl_db_read.php

// EVENT NADLER ****************************************
// will validate on submission
form.addEventListener('submit', e => {
    e.preventDefault();

    validateEvent();
    validateCardHolder();
    validateCardNum();
    validateSecNum();
    validateEmail();
    validateAmnt();
    validateBotService();
    insertToDB();
});

// FUNCTIONS *******************************************
//FUNCTIONS Validators:
function validateEvent() {
    validEvent = false;
    p_eventValue = p_event.value.trim();
    if (p_eventValue === '--select--') {
        setErrorFor(p_event, 'Make a selection');
    } else {
        setSuccessFor(p_event);
        p_eventValue = p_event.value.trim();
        //p_eventValue = p_eventValue.slice(0, p_eventValue.length - 1) // 6 char has to be sliced bc of the price tag - $89
        validEvent = true;
    }
}

function validateCardHolder() {
    validHolder = false;
    c_nameValue = c_name.value.trim();
    if (c_nameValue.length == 0) {
        setErrorFor(c_name, 'Blank field');
    } else {
        setSuccessFor(c_name);
        validHolder = true;
    }
}

function validateCardNum() {
    validCard = false;
    c_numberValue = c_number.value.trim();
    if (c_numberValue.length == 0) {
        setErrorFor(c_number, 'Card number is blank');
    }
    else if (isBankCard(c_numberValue)) {
        setSuccessFor(c_number);
        validCard = true;
    }
    else {
        setErrorFor(c_number, 'Use: xxxx xxxx xxxx xxxx')
    }
}

function validateSecNum() {
    validSec = false;
    s_numberValue = s_number.value.trim();
    if (s_numberValue.length == 0) {
        setErrorFor(s_number, 'CVV number is blank');
    }
    else if (isSecNum(s_numberValue)) {
        setSuccessFor(s_number);
        validSec = true;
    }
    else {
        setErrorFor(s_number, 'CVV number has 3 digits');
    }
}

function validateEmail() {
    validEmail = false;
    emailValue = email.value.trim();
    if (emailValue.length == 0) {
        setErrorFor(email, 'Email is blank');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Not a valid email');
    } else {
        setSuccessFor(email);
        validEmail = true;
    }
}

function validateAmnt() {
    validAmount = false;
    t_amntValue = t_amnt.value.trim();
    if (t_amntValue.length == 0) {
        setErrorFor(t_amnt, 'Enter the amount');
    }
    else if (t_amntValue == 0) {
        setErrorFor(t_amnt, 'Cannot be zero');
    } else {
        setSuccessFor(t_amnt);
        validAmnt = true;
    }
}

function validateBotService() {
    b_serviceValue = b_service.value.trim();
    //b_serviceValue = b_service.value.trim();
    setSuccessFor(b_service);
    validService = true;
}

// FUNCTIONS Messages:
function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'col-75 error';
    small.innerText = message;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'col-75 success';
}

// FUNCTIONS Testers:
function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
function isSecNum(cvv) {
    return /^([0-9]{3})$/.test(cvv);
}
function isBankCard(card) {
    return /^([0-9]{4})[ ]([0-9]{4})[ ]([0-9]{4})[ ]([0-9]{4})$/.test(card);
}

//End of Javascript Form Validation part

// jQuery ********************************************************************************************************************************************************************
function insertToDB() {
    if (validEvent && validHolder && validCard && validSec && validEmail && validAmnt && validService) {
        $.ajax({
            url: 'ticket_purchase.php',
            type: 'post',
            data: { eventname: p_eventValue, name: c_nameValue, email: emailValue, amount: t_amntValue, service: b_serviceValue },
            success: function (response) { // response (echo) comes from: ticket_purchase.php
                if (response == 1) {
                    alert("Thank you for your purchase. You will receive an email shortly.");
                    //window.location.href = 'index.php';
                }
                else {
                    alert("There was an internal error. Try again later.")
                }
            }
        });
    }
    else {
        alert("All fields required!");
    }
}

//for debugging purpose:
//alert('event: ' + p_eventValue + ', holder: ' + c_nameValue + ', card: ' + c_numberValue + ', CVV: ' + s_numberValue + ', email: ' + emailValue + ', amount: ' + t_amntValue + ', service: ' + b_serviceValue)
//alert('event: ' + validEvent + ', holder: ' + validHolder + ', card: ' + validCard + ', CVV: ' + validSec + ', email: ' + validEmail + ', amount: ' + validAmnt + ', service: ' + validService)
