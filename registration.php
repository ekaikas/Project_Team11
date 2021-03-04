<?php include 'db.php' ;

$name = trim($_POST['name']);
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$password_vis = trim($_POST['password']);
$password_hash = password_hash($password_vis, PASSWORD_DEFAULT);
$created_on = date('Y-m-d H:i:s'); //NOTE: server time (UTC) may be displayed
$isuser_avbl = false;
$isemail_avbl = false;

// ********************************************** Checking unique items (username and email) from DB *************************************************
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

// ************************************************************* Final Decision *************************************************************
// Insert new registration data into database
if($isuser_avbl == true && $isemail_avbl == true) 
{
    $sql="insert into users (name, username, password, email, phone, created_on)
    values('$name', '$username', '$password_hash', '$email', '$phone', '$created_on')";

    if($conn->query($sql) === TRUE) 
    {
        echo 1;
    }
    else
    {
        echo 0; // There was an internal error. Try again.
        //$conn->error;
    }
}
// Error, in case of conditons are not met
else if ($isuser_avbl == false && $isemail_avbl == true)
{
    echo 100; //username already exists 
}
else if ($isuser_avbl == true && $isemail_avbl == false)
{
    echo 101; //email already exists
}
else
{
    echo 102; //username and email not available.
}
$conn->close();
?>