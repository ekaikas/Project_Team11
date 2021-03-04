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

<body>
    <div class="loginbox">
        <img src="img/avatar.png" alt="avatar image" class="avatar">
        <h1>Login Here</h1>

        <form name="login" method="post" action="" id="form" class="form">
            <div class="message" id="message"></div>
            <br>
            <div class="form-control">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Enter your username" id="username"><br>
                <small>Minimum 5 letters.</small>
            </div>
            <div class="form-control">
                <label for="username">Password:</label>
                <input type="password" name="password" placeholder="Enter your password" id="password"><br>
                <small>Between 6-20 characters</small>
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
</html>


<!-- Javascript -->
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="Login_FormValidation_EventHandling2.js"></script>
<script src="user_login.js"> </script>