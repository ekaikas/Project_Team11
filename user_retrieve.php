<?php 
    $title = "admin table";
    $meta_desc = "Admin page for Forum Nightclub";
    $meta_keywords = "";  //intentionally left blank
    include "header.php";
    include "db.php";
?> 

<h1>User Accounts</h1>
<div class=main>
    <table class='id-table'>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Created On</th>
            <th>Updated On</th>
        </tr>
        <tr>
            <?php
            $sql = "select * from users";
            $result = $conn->query($sql);
            if($result ->num_rows > 0) {
            //fetch_assoc(): It fetches result as an associative array.
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
</div>

<?php
include 'footer.php';
?>
