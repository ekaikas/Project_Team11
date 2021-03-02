<?php

// Start the session
session_start();

// if the user is already logged in then redirect user to welcome page
if(isset($_SESSION["id"]) === true)
{
    echo 'You are already logged in.';
    echo '<br>';
    echo '<a href="logout.php" class="top">Logout </a>';
    exit;
}

?>