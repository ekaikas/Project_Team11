<?php
// Start the session
session_start();

// if the user is already logged in then redirect user to welcome page
if($_SESSION["username"] != 'admin' )
{
    // pop up message?
    header("location: index.php");
}
?>