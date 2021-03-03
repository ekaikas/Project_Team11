<?php 
require_once 'read_profile.php';
include 'user_update.php';

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

<body>
    <div class="loginbox">
        <img src="img/avatar2.png" alt="avatar image" class="avatar">
        <h1>Edit Profile</h1>
        <form name= "registration" method="post" action="">
            Username: <input type="text" name="username" value="<?php echo $_SESSION["username"];?>"> <br>
            Name: <input type="text" name="name" value="<?php echo $_SESSION["name"];?>"><br>
            Email: <input type="email" name="email" value="<?php echo $_SESSION["email"];?>"><br>
            Phone: <input type="tel" name="phone" value="<?php echo $_SESSION["phone"];?>"><br>
            New password: <input type="password" name="password" placeholder="Enter new password" ><br>
            Confirm password: <input type="password" name="password" placeholder="Confirm new password" disabled><br>
            <a href="user_delete.php">Delete account</a>
            <br>
            <a href="index.php">Back to main page</a>
            <br>
            <br>
            <input type="submit" name="submit" value="Save">
        </form>
    </div>
</body>

</html>