<?php
$servername="localhost:3307";
$db_username="root";
$password="root";
$db_name ="forum_db";
// creating connection 
$conn = new mysqli($servername, $db_username, $password, $db_name);

// Check connection
if ($conn->connect_error) 
    die("Connection failed: ".$conn->connect_error); // can use root 1
?>
