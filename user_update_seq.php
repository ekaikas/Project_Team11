<?php
// Makes $_SESSION[] available
session_start();

// Read existing user data from DB:
// include 'read_profile.php'; => located in the user_profile page, bc this file only executed on submit.

// Connect to database 
include 'db.php';
// Get user data from the FORM with $_POST:
include 'user_get.php';
// Check if username and email is  available
include 'user_email_check.php';
// Insert new registration data into database
include 'user_update.php';
?>