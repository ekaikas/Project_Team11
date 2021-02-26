<?php include 'db.php' ;
$fname = $_POST['fname'];
$lname= $_POST['lname'];
$city= $_POST['city'];
$groupid= $_POST['groupid'];
$sql="insert into studentsinfo (fname, lname, city, groupid)
values('$fname', '$lname', '$city', '$groupid')";


if (empty($fname && $lname && $city && $groupid))
{
    echo'All fields are required!';
    echo "<a href='form.php'> Return </a>";
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