<?php
require_once 'db.php';
require_once 'user_session.php';

$uname = $_POST['username'];
$password_vis = $_POST['password'];

// Get the password hash from the database:
if ($uname != "" && $password_vis != "")
{
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
            echo 1;
        }    
        else
        {
            echo 0;
        }
    }   
}
?>
