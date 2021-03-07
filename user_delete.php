<?php
session_start();
include 'db.php';

$delete_cmd = trim($_POST['delete_cmd']);
if($delete_cmd == 'delete')
{
    $sql="DELETE FROM users where id = '".$_SESSION['id']."'";
    $query = mysqli_query($conn, $sql);
    if($query){
        //header('location: index.php');
        include_once 'user_logout.php';    
    }       
    else
    {
        echo 1; //Error, account not deleted
    }
}
$conn->close();
?>
</body>