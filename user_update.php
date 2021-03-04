<?php
if($isuser_avbl == true && $isemail_avbl == true)
{
    $updated_on = date('Y-m-d H:i:s');
    $sql="UPDATE users set username='$username', name='$name', password='$password_hash', 
    email='$email', phone='$phone', updated_on='$updated_on' where id = '".$_SESSION['id']."'";
    if($conn->query($sql) === TRUE) 
    {
        echo 1;
    }
    else
    {
        //echo 0; // There was an internal error. Try again.
        $conn->error;
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