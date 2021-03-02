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
</head>

<body>
    <div class="loginbox scroll">
        <img src="img/avatar2.png" alt="avatar image" class="avatar">
        <h1>Create Account</h1>
        <form name= "registration" method="post" action="">
            Username: <input type="text" name="username" placeholder="Enter your username"><br>
            Name: <input type="text" name="name" placeholder="Enter your full name"><br>
            Email: <input type="email" name="email" placeholder="Enter your email"><br>
            Phone: <input type="tel" name="phone" placeholder="Enter your phone number"><br>
            Password: <input type="password" name="password" placeholder="Enter your password"><br>
            Confirm password: <input type="password" name="password" placeholder="Confirm your password" disabled><br>
            <a href="Login_Page.php">Login</a>
            <br>
            <a href="index.php">Back to Main Page</a>
            <br>
            <br>
            <input type="submit" name="submit" value="Register">
        </form>
    </div>

</body>

</html>