// jQuery
$(document).ready(function () {
    var msg = "";
    $("#message").html('Please complete the form.');
    $("#but_submit").click(function () {

        if (validUser && validName && validEmail && validPhone && validPass1 && validPass2) {
            $.ajax({
                url: 'user_update_seq.php',
                type: 'post',
                data: { username: usernameValue, name: nameValue, email: emailValue, phone: phoneValue, password: passwordValue },
                success: function (response) {

                    if (response == 1) {
                        //window.location = "profile.php";
                        window.location.href = "#message";
                        msg = "Changes were saved."


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
                    $("p").html(msg);

                }
            });
        }
        else {
            //$("#message").html('Validation failed!');
            msg = "Incomplete submission!";
            $("p").html(msg);
        }
    });

    // Pop up messae
    //appends an "active" class to .popup and .popup-content when the "Open" button is clicked
    $("#but_submit").on("click", function () {
        $(".popup-overlay, .popup-content").addClass("active");
        $(".page-bckgrnd-edit").addClass("active");
        $(".loginbox").addClass("active");

    });

    //removes the "active" class to .popup and .popup-content when the "Close" button is clicked 
    $(".close, .popup-overlay").on("click", function () {
        $(".popup-overlay, .popup-content").removeClass("active");
        $(".page-bckgrnd-edit").removeClass("active");
        $(".loginbox").removeClass("active");
    });

});