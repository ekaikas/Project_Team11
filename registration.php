<?php include 'db.php' ;

$name = trim($_POST['name']);
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$timestamp = date('Y-m-d H:i:s'); //NOTE: server time (UTC) may be displayed

#$confirm_password = trim($_POST['confirm_password']);
#$password_hash = password_hash($password, PASSWORD_BCRYPT);


$sql="insert into users (name, username, password, email, timestamp)
values('$name', '$username', '$password', '$email', '$timestamp')"; # update to $password_hash


if (empty($name && $username && $email && $password))
{
    echo'All fields are required!';
    echo "<a href='registration.php'> Return </a>";
}
else
{
    if($conn->query($sql) === TRUE) 
    {
        echo "New record added";
        echo "<a href='update.php' class='top'>Home </a>";
    }
    else
    {
        echo "ERROR: " .$sql. "<br>" . $conn->error;
    }
}

$conn->close();

?>

<form name= "registration" method="post" action="registration.php">
    Username: <input type="text" name="username"><br>
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    
<br>
<input type="submit" value="Save Data">
</form>