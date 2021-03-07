// jQuery
$(document).ready(function () {
    $("#but_submit").click(function () {
        if (validUser && validName && validEmail && validPhone && validPass1 && validPass2) {
            $.ajax({
                url: 'user_create_seq.php',
                type: 'post',
                data: { username: usernameValue, name: nameValue, email: emailValue, phone: phoneValue, password: passwordValue },
                success: function (response) {

                    if (response == 1) {
                        window.location = "login.php";
                    }
                    else if (response == 100) {
                        openPopUp("Username already in use.");
                    }
                    else if (response == 101) {
                        openPopUp("Email address already in use");
                    }
                    else if (response == 102) {
                        openPopUp("Username and email not available.");
                    }
                    else {
                        openPopUp("There was an internal error.Try again.");
                    }
                }

            });
        }
        else {
            openPopUp('All fields required!');
        }
    });

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

});