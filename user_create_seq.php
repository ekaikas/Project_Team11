<?php
// Connect to database 
include 'db.php';
// Get user data from the FORM with $_POST:
include 'user_get.php';
// Check if username and email is  available
include 'user_email_check.php';
// Insert new registration data into database
include 'user_create.php';
?>