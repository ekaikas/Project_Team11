<?php
require_once 'db.php';
session_start();
$a=array();

$sql = "select event_name, price_in_usd from tickets_avlbl";
$result = $conn->query($sql);
if($result ->num_rows > 0)
{
    while($row = $result ->fetch_assoc())
    {
        
        foreach ($row as $key => $value)
        {
            /* For debugging purposes
            echo $key.' => ' . $value;
            echo "<br>";
            echo "<br>";
            */
            array_push($a,$key,$value);
        }        
    }
        
}
else
{
    $conn->error;
}

$conn->close();
?>