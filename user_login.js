//jQuery
$(document).ready(function () {
    $("#but_submit").click(function () {
        if (usernameValue.length > 0 && passwordValue.length > 0) {
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