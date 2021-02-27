<?php
require_once 'db.php';
require_once 'session.php';

$email = trim($_POST['email']);
$password = trim($_POST['password']);



$sql = "select id from users where email = '$email' and password = '$password'";
$result = $conn->query($sql);
if($result ->num_rows > 0) 
{
    $_SESSION["id"] = $sql;
    //$error_msg = "";    
    //header("location: index.php");
}
else 
{

    //$message = "Username and/or Password incorrect. Try again.";
    //echo "<script type='text/javascript'>alert('$message');</script>";

    //die();
    //echo $_SESSION["id"];
    //echo "Wrong email and password.";
    //$error_msg = "Wrong email and password.";

}


$conn->close();
?>
