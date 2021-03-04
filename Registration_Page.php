<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="Reg_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="container">   
    <div class="loginbox scroll">
        <img src="img/avatar2.png" alt="avatar image" class="avatar">
        <h1>Create Account</h1>
        
        <form name= "registration" method="post" action="" id="form" class="form">
            <div class="message" id="message"></div>
            <br>
            <div class="form-control">
                <label for="username">Username*</label>
                <input type="text" name="username" placeholder="Enter your username" id="username"><br>
                <small>At least 5 character long</small>
            </div>
            <div class="form-control">
                <label for="name">Name*</label>
                <input type="text" name="name" placeholder="Enter your full name" id="Name"><br>
                <small>Your full name</small>
            </div>
            <div class="form-control">
                <label for="email">Email*</label>
                <input type="email" name="email" placeholder="Enter your email" id="email"><br>
                <small>Existing email address</small>
            </div>
            <div class="form-control">
                <label for="mobile">Phone*</label>
                <input type="tel" name="phone" placeholder="Enter your phone number" id="phone"><br>
                <small>+00 0000 0000</small>
            </div>
            <div class="form-control">
                <label for="password">Password*</label>
                <input type="password" name="password" placeholder="Enter your password" id="password"><br>
                <small>Strong password</small>
            </div>
            <div class="form-control">
                <label for="password">Confirm password*</label>
                <input type="password" name="password2" placeholder="Confirm your password" id="password2"><br>
                <small>Strong password</small>
            </div>
                <a href="Login_Page.php">Login</a>
                <br>
                <a href="index.php">Back to Main Page</a>
                <br>
                <br>
                <input type="submit" name="submit" value="Register" id="but_submit">
        </form>
    </div>
</div>
    
</body>


<!--
<script type="text/javascript">
    $(document).ready(function(){
        $("#message").html('Please fill in the form.');

        $("#but_submit").click(function(){
            var username = $("#username").val().trim();
            var name = $("#Name").val().trim();
            var email = $("#email").val().trim();
            var phone = $("#phone").val().trim();
            var password = $("#password").val().trim();

            if( username != "" && name != "" && email != "" && phone !="" && password != ""){
                $.ajax({
                    url:'registration.php',
                    type:'post',
                    data:{username:username, name:name, email:email, phone:phone, password:password},
                    success:function(response){
                        var msg = "";
                        if(response == 1)
                        {
                            window.location = "Login_Page.php";
                        }
                        else if(response == 100)
                        {
                            msg = "Username already in use.";
                        }
                        else if(response == 101)
                        {
                            msg = "Email address already in use";
                        }
                        else if(response == 102)
                        {
                            msg = "Username and email not available.";
                        }
                        else
                        {
                            msg = "There was an internal error. Try again.";
                        }
                        $("#message").html(msg);
                    }
                });
            }
            else
            {   
                $("#message").html('Please check your entries!');
            }
        });

    });

</script>
-->
</html>

<!-- ******************************************************************* JAVASCRIPT *******************************************************************-->
<!-- jQuery has to be loaded 1st-->
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Has to be the last in load order!-->
<script src="Registration_FormValidation_EventHandling.js"></script> 
