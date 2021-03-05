<?php
require_once 'db.php';
require_once 'user_session.php';

$uname = trim($_POST['username']);
$password_vis = trim($_POST['password']);

if(isset($uname) && isset($password_vis))
{
    // Get the password hash from the database:
    $sql = "SELECT password FROM users WHERE username='$uname'"; 
    $result = mysqli_query($conn,$sql);
    if($result ->num_rows > 0) 
    {
        $row = mysqli_fetch_array($result);
        $password_hash = $row['password'];

        // Verify password/hash
        if(password_verify($password_vis, $password_hash))
        {
            $_SESSION['username'] = $uname; //username has been validated already.
            echo 1; // Success
        }    
        else
        {
            echo 2; //Wrong pw
        }
    }
    else{
        echo 3; // No user with that name
    }  
}
else
{
    echo 4; //Error
}
?>
