
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
                url: 'user_update.php',
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