<?php
session_start();
include 'db.php';

$sql="DELETE FROM users where id = '".$_SESSION['id']."'";

// TODO: Confirmation window???
$query = mysqli_query($conn, $sql);
if($query){
    include_once 'logout.php';
    header('location: index.php');
}
else
{
    // TODO: error msg, not deleted
}
$conn->close();
?>
</body>
</html>