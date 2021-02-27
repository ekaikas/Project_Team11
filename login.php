<?php
require_once 'db.php';
require_once 'session.php';

$email = trim($_POST['email']);
$password = trim($_POST['password']);


$sql = "select id, username from users where email = '$email' and password = '$password'";
$result = $conn->query($sql);
if($result ->num_rows > 0) 
{
    if($row = $result ->fetch_assoc())
    {
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
    }    
}
else 
{
    //do something
}

$conn->close();
?>
