<?php
//Will show $_SESSION[] vars!
session_start();
$user_id = $_SESSION['id']; // User ID is created in user_login.php

// Connect to database 
include 'db.php';

// Variables Posted from ticket_purchase.js file ******************************************************************************
$eventName = trim($_POST['eventname']); //event name
$c_name = trim($_POST['name']); // card holder name
$email = trim($_POST['email']); //email address
$t_amnt = trim($_POST['amount']); // ticket quantity
$b_serv = trim($_POST['service']); //bottle service
$purchase_date = date('Y-m-d H:i:s'); //date of purchase
// ticket amnt:
$avlbl_amnt;
$new_amnt;

// Check avlbl ticket amnt ****************************************************************************************************
$sql_read="select available_quantity from tickets_avlbl where event_name = '$eventName'";
$result = $conn->query($sql_read);
if($result ->num_rows > 0)
{
    if($row = $result ->fetch_assoc())
    {
        $avlbl_amnt = $row['available_quantity'];
        echo 1;
    }
    else
    {
        echo 0; // Tickats are sold out!
        //echo 0; // There was an internal error. Try again.
    }   
    //Calculate the new avlbl amnt fot the tcickets **************************************************************************
    $new_amnt = $avlbl_amnt - $t_amnt;

    // 1) Check user availability => SQL query (LOGGED IN USER VS TEMP USER) *************************************************
    if(isset($_SESSION['id']))
    {
        $sql_ins="insert into purchases (event_name, user_id, customer, email, bottle_service, ticket_amnt, date_of_purchase)
        values('$eventName', '$user_id', '$c_name', '$email', '$b_serv', '$t_amnt', '$purchase_date')";
        if($conn->query($sql_ins))
        {
            $sql_del="UPDATE tickets_avlbl set available_quantity='$new_amnt' where event_name='$eventName'";
            if($conn->query($sql_del))
            {
                echo 1; //Successful purchase!
            }
            else
            {
                echo 0; //ticket_avlvbl table not accessable!
            }
        }
        else
        {
            echo 0; //ticket_avlvbl table not accessable!
        }
        $conn->close();
    }
    else
    {
        $sql_ins="insert into purchases (event_name, customer, email, bottle_service, ticket_amnt, date_of_purchase)
        values('$eventName', '$c_name', '$email', '$b_serv', '$t_amnt', '$purchase_date')";

        if($conn->query($sql_ins))
        {
            $sql_del="UPDATE tickets_avlbl set available_quantity='$new_amnt' where event_name='$eventName'";
            if($conn->query($sql_del))
            {
                echo 1; //Successful purchase!
            }
            else
            {
                echo 0; //ticket_avlvbl table not accessable!
            }
        }
        else
        {
            echo 0; //ticket_avlvbl table not accessable!
        }
        $conn->close();
    }
    // 2) Send SQL query => response => JS file: ticket_purchase.js
  
}
else 
{
    echo 0; // There was an internal error. Try again.
    //$conn->error;
}

$conn->close();
?>