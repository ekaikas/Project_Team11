<?php 
    $title = "purchase table";
    $meta_desc = "Admin page for Forum Nightclub";
    $meta_keywords = "";  //intentionally left blank
    include "header.php";
    include "access_admin.php";
    include "db.php";
?> 

<div class="panel">
    <button class="button2" type="button" onclick="document.location='user_retrieve.php'">Users</button>
    <button class="button2" type="button" onclick="document.location='ticket_retrieve.php'">Events </button>
    <button class="button2" type="button" onclick="document.location='purchase_retrieve.php'">Sales</button>
</div>

<h1>Sales</h1>
<div class=main>
    <table class='id-table'>
        <tr>
            <th>Event ID</th>
            <th>User ID</th>
            <th>Customer</th>
            <th>Email</th>
            <th>Event Name</th>
            <th>Bottle Service</th>
            <th>Quantity Sold</th>
            <th>Date of Purchase</th>
        </tr>
        <tr>
            <?php
            $sql = "select * from purchases";
            $result = $conn->query($sql);
            if($result ->num_rows > 0) {
            //fetch_assoc(): It fetches result as an associative array.
                while($row = $result ->fetch_assoc()){
                    echo 
                    "<tbody>    
                        <tr>
                            <td>". $row["purchase_id"] ."</td>
                            <td>". $row["user_id"]."</td>
                            <td>". $row["customer"]."</td>
                            <td>". $row["email"]."</td>
                            <td>". $row["event_name"]."</td>
                            <td>". $row["bottle_service"]."</td>
                            <td>". $row["ticket_amnt"]."</td>
                            <td>". $row["date_of_purchase"]."</td>
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
        </tr>
    </table>
</div>

<?php
include 'footer.php';
?>
