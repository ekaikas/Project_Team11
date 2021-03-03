<?php
include_once 'registration.php';
?>

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
            <div class="form-control">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Enter your username" id="username"><br>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Name:</label>
                <input type="text" name="name" placeholder="Enter your full name" id="Name"><br>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Email:</label>
                <input type="email" name="email" placeholder="Enter your email" id="email"><br>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Phone:</label>
                <input type="tel" name="phone" placeholder="Enter your phone number" id="phone"><br>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Password:</label>
                <input type="password" name="password" placeholder="Enter your password" id="password"><br>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Confirm password:</label>
                <input type="password" name="password" placeholder="Confirm your password" id="password2"><br>
                <small>Error message</small>
            </div>
                <a href="Login_Page.php">Login</a>
                <br>
                <a href="index.php">Back to Main Page</a>
                <br>
                <br>
                <input type="submit" name="submit" value="Register">
        </form>
    </div>
</div>
    <script src="Registration_FormValidation_EventHandling.js"></script>
</body>

</html>