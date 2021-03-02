<?php
require_once 'db.php';
require_once 'session.php';

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$sql_hash = "select password from users where email = '$email'";
$res = $conn->query($sql_hash);

if($res ->num_rows > 0) 
{
    $row_hash = $res ->fetch_assoc();
    $hash = $row_hash['password'];
    if(password_verify($password, $hash))
    {
        $sql_login = "select id, username from users where email = '$email' and password = '$hash'";
        $result = $conn->query($sql_login);
        if($result ->num_rows > 0) 
        {
            $row = $result ->fetch_assoc();
            $_SESSION["id"] = $row['id'];
            $_SESSION["username"] = $row['username'];
            header('location: index.php'); 
        }
        else 
        {
            //do something: error
        }
    }
    else
    {
        //do something: error
    }
}
else 
{
    //do something: error
}
$conn->close();
?>
