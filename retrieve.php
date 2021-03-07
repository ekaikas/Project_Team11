<?php
include 'db.php';

//include 'header.php';
?> 

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<style type="text/css">
body {
	background-color: white;
	font-family: Calibri, Myriad;
}

#main {
	width: auto;
	padding: 20px;
	margin: auto;

}

table.userTable {
	margin: auto;
	width: 600px;
	border-collapse: collapse;
	border: 1px solid #fff; /*for older IE*/
	border-style: hidden;
    background-color: white;
}

table.userTable caption {
	background-color: #f79646;
	color: #fff;
	font-size: x-large;
	font-weight: bold;
	letter-spacing: .3em;
}

table.userTable thead th {
	padding: 8px;
	background-color: #fde9d9;
	font-size: large;
}

table.userTable thead th#thDay {
	width: 40%;	
}

table.userTable thead th#thRegular, table.userTable thead th#thOvertime, table.userTable thead th#thTotal {
	width: 20%;
}

table.userTable th, table.userTable td {
	padding: 3px;
	border-width: 1px;
	border-style: solid;
	border-color: #f79646 #ccc;
}

table.userTable td {
	text-align: right;
}

table.userTable tbody th {
	text-align: left;
	font-weight: normal;
}

table.userTable tfoot {
	font-weight: bold;
	font-size: large;
	background-color: #687886;
	color: #fff;
}

table.userTable tr.row {
	background-color: #fde9d9;
}

/* *************************************** */

</style>

<title>User Table</title>
</head>

<body>
    <div id="main">
    <?php
        $sql = "select * from users";
        $result = $conn->query($sql);
        if($result ->num_rows > 0) {
        //fetch_assoc(): It fetches result as an associative array.
        echo "
        
        <table class='userTable'>
        <caption>User Accounts</caption>
            <thread>
                <tr class='row'>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Created On</th>
                    <th>Updated On</th>
                </tr>
            <thread>";
            while($row = $result ->fetch_assoc()){
                echo 
                "<tbody>    
                    <tr>
                        <td>". $row["id"] ."</td>
                        <td>". $row["username"]."</td>
                        <td>". $row["name"]."</td>
                        <td>". $row["password"]."</td>
                        <td>". $row["phone"]."</td>
                        <td>". $row["email"]."</td>
                        <td>". $row["created_on"]."</td>
                        <td>". $row["updated_on"]."</td>
                    </tr>
                <tbody>";
            }
            echo "</table>";
        }
        // You can type different sql queries based on your needs
        // The output as of now does not look good. Your task is to format it properly with HTML tables. 
        else 
        {
            echo "no results";
        }
        $conn->close();
?>
    <!--
        <table class="userTable">
            <caption>Employee userTable</caption>
            <thead>
                <tr>
                    <th id="thDay">Day</th>
                    <th id="thRegular">Regular</th>
                    <th id="thOvertime">Overtime</th>
                    <th id="thTotal">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd">
                    <th>Monday</th>
                    <td>8</td>
                    <td>0</td>
                    <td>8</td>
                </tr>
                <tr class="row">
                    <th>Tuesday</th>
                    <td>8</td>
                    <td>2.5</td>
                    <td>10.5</td>
                </tr>
                <tr class="odd">
                    <th>Wednesday</th>
                    <td>8</td>
                    <td>0</td>
                    <td>8</td>
                </tr>
                <tr class="row">
                    <th>Thursday</th>
                    <td>8</td>
                    <td>0</td>
                    <td>8</td>
                </tr>
                <tr class="odd">
                    <th>Friday</th>
                    <td>8</td>
                    <td>0</td>
                    <td>8</td>
                </tr>
                <tr class="row">
                    <th>Saturday</th>
                    <td>0</td>
                    <td>5</td>
                    <td>5</td>
                </tr>
                <tr class="odd">
                    <th>Sunday</th>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Total weekly hours:</th>
                    <td>40</td>
                    <td>8.5</td>
                    <td>48.5</td>
                </tr>
            </tfoot>
        </table>
    -->    
    </div>
</body>
<?php
include 'footer.php';
?>

</html>