<?php
require_once 'db.php';
require_once 'session.php';

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


/*
function test()
{   
    $test = 'test';
    return $test;
}

function saveMeassage($variable)
{
    $_SESSION['error'] = $message;
    return $_SESSION['error'];
}

unset($message);
$email = trim($_POST['email']);
$password = trim($_POST['password']);

// ************** LOGIN PROCESS STARTS HERE **************
$sql_hash = "select password from users where email = '$email'"; // SQL query to check if hash/password is ok
$res_hash = $conn->query($sql_hash);
if($res_hash ->num_rows > 0) 
{
    $row_hash = $res_hash ->fetch_assoc();
    $hash = $row_hash['password']; // Selecting encrypted password (hash)
    if(password_verify($password, $hash)) //Comparing typed pw with db pw (hash)
    {
        $sql_userdata = "select id, username from users where email = '$email' and password = '$hash'"; // SQL query to select user specific details
        $result = $conn->query($sql_userdata);
        if($result ->num_rows > 0) 
        {
            $row = $result ->fetch_assoc(); // User specific details are stored in a GLOBAL VARIABLE/ARRAY called $_SESSION[], that may be accessed on other pages only if user is logged in.
            $_SESSION["id"] = $row['id']; //Will be used to confirm successful login
            $_SESSION["username"] = $row['username']; //Will be displayed on main page
            $message="Successful log in!";
            header('location: index.php');
            die;
 
        }
        else 
        {
            //do something: error
            //echo '<script>alert("Something went wrong. Please try it later.")</script>'; 
            $message="Something went wrong. Please try it later.";
            saveMeassage($message);
        }
    }
    else
    {
        //do something: error
        //echo '<script>alert("Password is incorrect. Try again.")</script>';
        $message="Password is incorrect. Try again.";
        saveMeassage($message);
    }
}
else 
{
    //do something: error
    //echo '<script>alert("Email is incorrect.")</script>';
    $message="Email is incorrect.";
    saveMeassage($message);
}
$conn->close();

*/
?>
