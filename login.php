<?php
// Logged in user cannot reach this page.
include 'user_session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="Log_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class = "page-bckgrnd">
    <div class="loginbox">
        <img src="img/avatar.png" alt="avatar image" class="avatar">
        <h1>Login Here</h1>

        <form name="login" method="post" action="" id="form" autocomplete="on" class="form">
            <div class="message" id="message"></div>
            <br>
            <div class="form-control">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Enter your username" id="username"><br>
                <small>Username</small>
            </div>
            <div class="form-control">
                <label for="username">Password:</label>
                <input type="password" name="password" placeholder="Enter your password" id="password"><br>
                <small>Password</small>
            </div>
            <a href="registration.php">Registration</a>
            <br>
            <a href="index.php">Back to Main Page</a>
            <br>
            <br>
            <input type="submit" name="submit" value="Log In" id="but_submit">
        </form>
    </div>
</body>

<!-- ******************************************* POP UP BOX ******************************************* -->
<div class='container'>
    <div>
            <!--Creates the popup body-->
        <div class="popup-overlay html-pop">
        <!--Creates the popup content-->
        <div class="popup-content html-pop">
            <!--<img class='error-pic' src="img/avatar2.png" alt="sad face">-->
            <h2 class='error-message'>Login Error</h2>
            <div id = "pop_message"></div>
            <p> </p>
            <!--popup's close button-->
            <button class="close">Close</button> 
        </div>
    </div>
</div>

</html>

<!-- Javascript -->
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="login_validation.js"></script>
<script src="user_login.js"> </script>