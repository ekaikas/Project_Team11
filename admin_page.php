<?php 
    $title = "admin table";
    $meta_desc = "Admin page for Forum Nightclub";
    $meta_keywords = "";  //intentionally left blank
    include "header.php";
    include "access_admin.php";
?> 

<div class="panel">
    <button class="button2" type="button" onclick="document.location='user_retrieve.php'">Users</button>
    <button class="button2" type="button" onclick="document.location='ticket_retrieve.php'">Events </button>
    <button class="button2" type="button" onclick="document.location='purchase_retrieve.php'">Sales</button>
</div>

<div class="logo_vector">
    <p><img src="Img/forum_logo.png"></p>
</div>

<?php
//include 'footer.php';
?>
