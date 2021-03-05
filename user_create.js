// jQuery
$(document).ready(function () {

    $("#message").html('Please fill in the form.');
    $("#but_submit").click(function () {

        //For DEBUGGING
        /*
        alert("bools: " + validUser + validName + validEmail + validPhone + validPass1 + validPass2 +
            "values: " + usernameValue + nameValue + emailValue + phoneValue + passwordValue + password2Value)
        */

        if (validUser && validName && validEmail && validPhone && validPass1 && validPass2) {
            $.ajax({
                url: 'user_create_seq.php',
                type: 'post',
                data: { username: usernameValue, name: nameValue, email: emailValue, phone: phoneValue, password: passwordValue },
                success: function (response) {
                    var msg = "";
                    if (response == 1) {
                        window.location = "login.php";
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