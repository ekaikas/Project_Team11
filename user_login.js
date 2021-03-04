$(document).ready(function () {

    $("#but_submit").click(function () {
        var username = $("#form_username").val().trim();
        var password = $("#form_password").val().trim();

        if (username != "" && password != "") {
            $.ajax({
                url: 'user_login.php',
                type: 'post',
                data: { username: username, password: password },
                success: function (response) {
                    var msg = "";
                    if (response == 1) {
                        window.location = "index.php";
                    } else {
                        msg = "Invalid username and password!";
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
