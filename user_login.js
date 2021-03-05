//jQuery
$(document).ready(function () {
    $("#message").html('Welcome');
    $("#but_submit").click(function () {
        if (validUser && validPass) {
            $.ajax({
                url: 'user_login.php',
                type: 'post',
                data: { username: usernameValue, password: passwordValue },
                success: function (response) {
                    var msg = "";
                    if (response == 1) {
                        window.location = "index.php";
                    }
                    else if (response == 2) {
                        msg = "Wrong password!";
                    }
                    else if (response == 3) {
                        msg = "Account does not exist"
                    }
                    else if (response == 4) {
                        msg = "Error";
                        alert('un is: ' + usernameValue + 'unBool is: ' + validUser + 'pwBool is: ' + validPass + 'pw is: ' + passwordValue)
                    }
                    $("#message").html(msg);
                }
            });
        }
        else {
            $("#message").html('All fields are mandatory!');
        }
    });
});
