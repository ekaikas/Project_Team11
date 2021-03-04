<?php

// Start the session
session_start();

// if the user is already logged in then redirect user to welcome page
if(isset($_SESSION["username"]) === true)
{
    // pop up message?
    echo 'You are already logged in.';
    echo '<br>';
    echo '<a href="user_logout.php" class="top">Logout </a>';
    exit;
}

?>