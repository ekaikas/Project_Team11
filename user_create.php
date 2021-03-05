<?php
// ************************** NOTES *****************************
//This code is used in multiple files 
//isuser_avbl & isemail avbl are defined earlier
//please check user_create_seq.php & user_update_seq.php files!!!
// **************************************************************

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