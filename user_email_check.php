<?php
// Declaring booleans for validation:
$isuser_avbl = false;
$isemail_avbl = false;

// Checking if username exist in the database.
$sql_check_user = "SELECT id FROM users WHERE username='$username'";
$result_user = mysqli_query($conn,$sql_check_user);
$row_user = mysqli_fetch_array($result_user);
if(!isset($row_user['id']))
{
    $isuser_avbl = true; // username is used by none -> available
}
else if($row_user['id'] == $_SESSION['id'])
{
    $isuser_avbl = true; // username is used by the user -> available
}
else
{
    $isuser_avbl = false; //username is taken - NOT available
}

// Checking if email is exist in the database.
$sql_check_email = "SELECT id FROM users WHERE email='$email'";
$result_email = mysqli_query($conn,$sql_check_email);
$row_email = mysqli_fetch_array($result_email);
if(!isset($row_email['id']))
{
    $isemail_avbl = true; // email is used by none -> available
}
else if($row_email['id'] == $_SESSION['id'])
{
    $isemail_avbl = true; // email is used by the user -> available
}
else
{
    $isemail_avbl = false; //email is taken - NOT available
}
?>