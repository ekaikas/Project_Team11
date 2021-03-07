<?php
// Connect to database 
include 'db.php';

$eventName = trim($_POST['eventname']); //event name
$c_name = trim($_POST['name']); // card holder name
$email = trim($_POST['email']); //email address
$t_amnt = trim($_POST['amount']); // ticket quantity
$b_serv = trim($_POST['service']); //bottle service
$purchase_date = date('Y-m-d H:i:s'); //date of purchase

$sql="insert into purchases (event_name, customer, email, bottle_service, ticket_amnt, date_of_purchase)
    values('$eventName', '$c_name', '$email', '$b_serv', '$t_amnt', '$purchase_date')";

if($conn->query($sql) === TRUE) 
{
    echo 1;
}
else
{
    echo 0; // There was an internal error. Try again.
    //$conn->error;
}
$conn->close();


/*
// Get user data from the FORM with $_POST:
include 'user_get.php';
// Check if username and email is  available
include 'user_email_check.php';
// Insert new registration data into database
include 'user_create.php';
*/
?>