<?php
require_once 'db.php';

session_start();

$sql = "select * from users where id = '".$_SESSION['id']."'";
$result = $conn->query($sql);
if($result ->num_rows > 0)
{
    if($row = $result ->fetch_assoc())
    {
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone'] = $row['phone'];
        //$_SESSION['hash'] = $row['password'];
    }    
}
else 
{
    //do something
}
$conn->close();
?>