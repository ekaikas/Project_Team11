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
    header("location: welcome.php");
    
}
else 
{
    echo $_SESSION["id"];
    echo "Enter your email and password.";

}


$conn->close();
?>

<form name= "form_login" method="post" action="">
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>    
<br>
<input type="submit" value="Log In">
</form>