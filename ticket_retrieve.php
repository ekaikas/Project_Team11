<?php 
    $title = "event table";
    $meta_desc = "Admin page for Forum Nightclub";
    $meta_keywords = "";  //intentionally left blank
    include "header.php";
    include "db.php";
?> 

<div class="panel">
    <button class="button2" type="button" onclick="document.location='user_retrieve.php'">Users</button>
    <button class="button2" type="button" onclick="document.location='ticket_retrieve.php'">Events </button>
    <button class="button2" type="button" onclick="document.location='purchase_retrieve.php'">Sales</button>
</div>

<h1>Available Tickets</h1>
<div class=main>
    <table class='id-table'>
        <tr>
            <th>Event ID</th>
            <th>Event Name</th>
            <th>Date</th>
            <th>Available Quantity</th>
            <th>Price in $</th>
        </tr>
        <tr>
            <?php
            $sql = "select * from tickets_avlbl";
            $result = $conn->query($sql);
            if($result ->num_rows > 0) {
            //fetch_assoc(): It fetches result as an associative array.
                while($row = $result ->fetch_assoc()){
                    echo 
                    "<tbody>    
                        <tr>
                            <td>". $row["event_id"] ."</td>
                            <td>". $row["event_name"]."</td>
                            <td>". $row["event_date"]."</td>
                            <td>". $row["available_quantity"]."</td>
                            <td>". $row["price_in_usd"]."</td>
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
</div>

<?php
include 'footer.php';
?>
