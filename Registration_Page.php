<?php
include_once 'registration.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="Reg_style.css">
</head>

<body>
    <div class="loginbox">
        <img src="img/avatar2.png" alt="avatar image" class="avatar">
        <h1>Create Account</h1>
        <form name= "registration" method="post" action="">
            Username: <input type="text" name="username"><br>
            Name: <input type="text" name="name"><br>
            Email: <input type="email" name="email"><br>
            Password: <input type="password" name="password"><br>
            <a href="Login_Page.php">Login</a>
            <br>
            <a href="index.php">Back to Main Page</a>
            <br>
            <input type="submit" value="Register">
        </form>
    </div>

</body>

</html>