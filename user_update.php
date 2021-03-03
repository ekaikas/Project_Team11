<?php include 'db.php' ;
session_start();

$name = trim($_POST['name']);
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$password_vis = trim($_POST['password']);
$password_hash = password_hash($password_vis, PASSWORD_DEFAULT);
$updated_on = date('Y-m-d H:i:s'); //NOTE: server time (UTC) may be displayed

$sql="UPDATE users set name='$name', username='$username', email='$email', phone='$phone', password='$password_hash', updated_on='$updated_on'  where id = '".$_SESSION['id']."'";

if($_POST['submit'])
{
    $query = mysqli_query($conn, $sql);
    if($query){
        include 'read_profile.php';
    }
    else { echo "Record Not modified";}
}
$conn->close();
?>