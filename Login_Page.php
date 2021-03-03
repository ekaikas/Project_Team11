<?php
    include_once 'login.php';
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
        <form name="form_login" method="post" action="" id="form" class="form">
            <div class="form-control">
                <label for="username">Email:</label>
                <input type="email" name="email" placeholder="Enter your email" id="email"><br>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Password:</label>
                <input type="password" name="password" placeholder="Enter your password" id="password"><br>
                <small>Error message</small>
            </div>            <br>
            <a href="Registration_Page.php">Registration</a>
            <br>
            <a href="index.php">Back to Main Page</a>
            <br>
            <br>
            <input type="submit" name="submit" value="Log In">
        </form>
    </div>
</body>
<script src="Login_FormValidation_EventHandling.js"></script>
  
</html>