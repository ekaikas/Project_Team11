<?php
// Connect to database 
include 'db.php';
// Get user data from the FORM with $_POST:
include 'get_userinfo.php';
// Check if username and email is  available
include 'check_user_email.php';
// Insert new registration data into database
include 'insert_regdata.php';
?>