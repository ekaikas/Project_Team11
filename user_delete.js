//jQuery conf_del
$(document).ready(function () {
    $("#del_btn").click(function () {
        openPopUp("You are about to delete your account.");
    });

    // Pop up messae
    //appends an "active" class to .popup and .popup-content when the "Open" button is clicked
    function openPopUp(onScreen) {
        $("p").html(onScreen);
        $(".popup-overlay_del, .popup-content_del").addClass("active");
        $(".page-bckgrnd-edit").addClass("active");
        $(".loginbox").addClass("active");
    }

    //removes the "active" class to .popup and .popup-content when the "Close" button is clicked 
    $(".close, .popup-overlay_del").on("click", function () {
        $(".popup-overlay_del, .popup-content_del").removeClass("active");
        $(".page-bckgrnd-edit").removeClass("active");
        $(".loginbox").removeClass("active");
    });

    $("#delete_acc").on("click", function () {
        $.ajax({
            url: 'user_delete.php',
            type: 'post',
            data: { delete_cmd: 'delete' },
            success: function (response) {
                if (response == 1) {
                    alert('Error! Try again later.')
                }
                else {
                    alert('Account deleted!');
                    window.location = 'index.php';
                }
            }

        });
    });
});