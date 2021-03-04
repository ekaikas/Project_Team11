<?php
require_once 'db.php';

session_start();

$sql = "select * from users where username = '".$_SESSION['username']."'";
$result = $conn->query($sql);
if($result ->num_rows > 0)
{
    if($row = $result ->fetch_assoc())
    {
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone'] = $row['phone'];
    }    
}
else 
{
    $conn->error;
}
$conn->close();
?>