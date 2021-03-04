<?php
// Makes $_SESSION[] available
session_start();
// Read user data from DB
include 'read_profile.php';

// Redirect user, if user is manually trying to access location when not logged in.
if(isset($_SESSION["username"]) === false)
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
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="style_user.css">
</head>

<body class="page-bckgrnd-edit">
    <div class="loginbox">
        <img src="img/avatar2.png" alt="avatar image" class="avatar">
        <h1>Edit Profile</h1>
            <form name= "editprofile" method="post" action="" id="form" class="form">
            <div class="message" id="message"></div>
            <br>
            <div class="form-control">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Enter your username" value="<?php echo $_SESSION["username"];?>" id="username"><br>
                <small>At least 5 character long</small>
            </div>
            <div class="form-control">
                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="Enter your full name" value="<?php echo $_SESSION["name"];?>" id="Name"><br>
                <small>Your full name</small>
            </div>
            <div class="form-control">
                <label for="email">Email:</label>
                <input type="text" name="email" placeholder="Enter your email" value="<?php echo $_SESSION["email"];?>" id="email"><br>
                <small>Existing email address</small>
            </div>
            <div class="form-control">
                <label for="mobile">Phone:</label>
                <input type="tel" name="phone" placeholder="Enter your phone number" value="<?php echo $_SESSION["phone"];?>" id="phone"><br>
                <small>+00 0000 0000</small>
            </div>
            <div class="form-control">
                <label for="password">New password:</label>
                <input type="password" name="password" placeholder="Enter your password" id="password"><br>
                <small>Strong password</small>
            </div>
            <div class="form-control">
                <label for="password">Confirm password:</label>
                <input type="password" name="password2" placeholder="Confirm your password" id="password2"><br>
                <small>Strong password</small>
            </div>
                <a href="https://passwordsgenerator.net/">Password generator</a>
                <br>
                <a href="user_delete.php">Delete account</a>
                <br>
                <a href="index.php">Back to main page</a>
                <br>
                <br>
            <input type="submit" name="submit" value="Save" id="but_submit">
        </form>
    </div>
</body>
</html>

<!-- ******************************************************************* JAVASCRIPT *******************************************************************-->
<!-- jQuery has to be loaded 1st-->
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Has to be the last in load order!-->
<script src="reg_edit_validation.js"></script>
<script src="reg_update.js"></script>