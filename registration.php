<?php include 'db.php' ;

$name = trim($_POST['name']);
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$password_normal = trim($_POST['password']);
$password = password_hash($password_normal, PASSWORD_DEFAULT);
$created_on = date('Y-m-d H:i:s'); //NOTE: server time (UTC) may be displayed

#$confirm_password = trim($_POST['confirm_password']);
#$password_hash = password_hash($password, PASSWORD_BCRYPT);


$sql="insert into users (name, username, password, email, phone, created_on)
values('$name', '$username', '$password', '$email', '$phone', '$created_on')"; # update to $password_hash

if($conn->query($sql) === TRUE) 
{
    //echo "New record added";
    //echo "<a href='update.php' class='top'>Home </a>";
    header("location: Login_Page.php");
    echo 'password:'. $password_hash;
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}


$conn->close();

?>