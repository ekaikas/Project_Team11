<?php
// Declaring booleans for validation:
$isuser_avbl = false;
$isemail_avbl = false;

// Checking if username exist in the database.
$sql_check_user = "SELECT count(*) as cntUser FROM users WHERE username='$username'";
$result_user = mysqli_query($conn,$sql_check_user);
$row_user = mysqli_fetch_array($result_user);
$count_user = $row_user['cntUser'];
if($count_user > 0)
{
    $isuser_avbl = false;
}
else
{
    $isuser_avbl = true; //username is not taken
}

// Checking if email is exist in the database.
$sql_check_email = "SELECT count(*) as cntEmail FROM users WHERE email='$email'";
$result_email = mysqli_query($conn,$sql_check_email);
$row_email = mysqli_fetch_array($result_email);
$count_email = $row_email['cntEmail'];
if($count_email > 0)
{
    $isemail_avbl = false;
}
else
{
    $isemail_avbl = true; //email is not taken
}

?>