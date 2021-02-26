<?php
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM studentsinfo WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
First Name: <br>
<input type="text" name="fname"  value="<?php echo $row['fname']; ?>">
<br>
Last Name :<br>
<input type="text" name="lname" value="<?php echo $row['lname']; ?>">
<br>
City:<br>
<input type="text" name="city" value="<?php echo $row['city']; ?>">
<br>
Group ID:<br>
<select name="groupid"> 
    <option value="BBCAP19"> BBCAP19 </option>
    <option value="BBCAP20"> BBCAP20 </option>
    <option value="Others"> Others </option>
</select>
<br>

<input type="submit" name="submit" value="Submit" >
</form>
<?php 
if($_POST['submit']){
    
    $fname = $_POST['fname']; // add lname, city, groupid, no empty
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

    if (empty($fname && $lname && $city && $groupid))
    {
        echo'All fields are required!';        
    }
    else
    {
        $query = mysqli_query($conn,"UPDATE studentsinfo set fname='$fname' where id='$a'");
        $query = mysqli_query($conn,"UPDATE studentsinfo set lname='$lname' where id='$a'");
        $query = mysqli_query($conn,"UPDATE studentsinfo set city='$city' where id='$a'");
        $query = mysqli_query($conn,"UPDATE studentsinfo set groupid='$groupid' where id='$a'");
    }
    if($query)
    {
        echo '<br>';
        echo "Record Modified Successfully <br>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "<br>"."Record Not modified";}
    }
    echo '<br>';
    echo "<a href='update.php'> Home </a>";
$conn->close();
?>
</body>
</html>