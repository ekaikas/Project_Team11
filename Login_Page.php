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
</head>

<body>
    <div class="loginbox">
        <img src="img/avatar.png" alt="avatar image" class="avatar">
        <h1>Login Here</h1>
        <form name="form_login" method="post" action="">
            Email: <input type="email" name="email"><br>
            Password: <input type="password" name="password">
            <br>
            <a href="Registration_Page.php">Registration</a>
            <br>
            <a href="index.php">Back to Main Page</a>
            <br>
            <br>
            <input type="submit" name="submit" value="Log In">
        </form>
    </div>
</body>
    <script>
        document.querySelector('.loginbox input[type="submit"]').addEventListener('click', function()
        {
            alert("Username and/or Password incorrect. Try again.");
        });
    </script>  
</html>