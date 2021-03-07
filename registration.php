<?php
// Logged in user cannot reach this page.
session_start();
if(isset($_SESSION["username"]) === true)
{
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style_user.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="page-bckgrnd-reg">
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
                <input type="text" name="email" placeholder="Enter your email" id="email"><br>
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
            
                <a href="https://passwordsgenerator.net/">Password generator</a>
                <br>
                <a href="index.php">Back to main page</a>
                <br>
                <a href="login.php">Login</a>
                <br>
                <br>
                <input type="submit" name="submit" value="Register" id="but_submit">
        </form>
    </div>
</div>

</div>
<!-- ******************************************* POP UP BOX ******************************************* -->
<div class='container'>
    <div>
            <!--Creates the popup body-->
        <div class="popup-overlay html-pop">
        <!--Creates the popup content-->
        <div class="popup-content html-pop">
            <!--<img class='error-pic' src="img/avatar2.png" alt="sad face">-->
            <h2 class='error-message'>Error!</h2>
            <div id = "pop_message"></div>
            <p> </p>
            <!--popup's close button-->
            <button class="close">Close</button> 
        </div>
    </div>
</div>
</body>
</html>
<!-- ******************************************************************* JAVASCRIPT *******************************************************************-->
<!-- jQuery has to be loaded 1st-->
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Has to be the last in load order!-->
<script src="user_validation.js"></script>
<script src="user_create.js"></script>