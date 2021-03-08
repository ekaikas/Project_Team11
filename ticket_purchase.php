<?php
//Will show $_SESSION[] vars!
session_start();
$user_id = $_SESSION['id']; // User ID is created in user_login.php


// Connect to database 
include 'db.php';

$eventName = trim($_POST['eventname']); //event name
$c_name = trim($_POST['name']); // card holder name
$email = trim($_POST['email']); //email address
$t_amnt = trim($_POST['amount']); // ticket quantity
$b_serv = trim($_POST['service']); //bottle service
$purchase_date = date('Y-m-d H:i:s'); //date of purchase

$avlbl_amnt;
$new_amnt;

$sql_read="select available_quantity from tickets_avlbl where event_name = '$eventName'";
$result = $conn->query($sql_read);
if($result ->num_rows > 0)
{
    if($row = $result ->fetch_assoc())
    {
        $avlbl_amnt = $row['available_quantity'];
    }    
}
else 
{
    $conn->error;
}

$new_amnt = $avlbl_amnt - $t_amnt;

// 1) Check user availability => SQL query
if($_SESSION['id'])
{
    $sql_ins="insert into purchases (event_name, user_id, customer, email, bottle_service, ticket_amnt, date_of_purchase)
    values('$eventName', '$user_id', '$c_name', '$email', '$b_serv', '$t_amnt', '$purchase_date')";
}
else
{
    $sql_ins="insert into purchases (event_name, customer, email, bottle_service, ticket_amnt, date_of_purchase)
    values('$eventName', '$c_name', '$email', '$b_serv', '$t_amnt', '$purchase_date')";
}
$sql_del="UPDATE tickets_avlbl set available_quantity='$new_amnt' where event_name='$eventName'";
$conn->query($sql_del);
// 2) Send SQL query => response => JS file: ticket_purchase.js
if($conn->query($sql_ins) === TRUE) 
{
    echo 1;
}
else
{
    echo 0; // There was an internal error. Try again.
    //$conn->error;
}
$conn->close();
?>