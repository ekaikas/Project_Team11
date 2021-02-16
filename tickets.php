<?php 
    $title = "Tickets-Forum";
    $meta_desc = "Forum Nightclub Tickets";
    $meta_keywords = "events, tickets, concert, dj, party, pre-purchase, online tickets, show pass, press pass";
    include "header.php";
?>    
<h1>Tickets</h1> 
<div class="container frm">  
    <div class="row">
        <div class="col formcss">
            <!--insert db file: insert_ticket.php-->
            <form name="ticket_form" action="insert_ticket.php" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="t_event">Choose Event</label>
                    </div>
                    <div class="col-75">
                        <!--t_event-->
                        <select name="t_event">
                            <option value="NULL">--select--</option>
                            
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="t_name">Cardholder</label>
                    </div>
                    <div class="col-75">
                        <!--t_name-->
                        <input type="text" name="t_name" placeholder="Name on card..">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="t_number">Card Number</label>
                    </div>
                    <div class="col-75">
                        <!--t_number-->
                        <input type="text" name="t_number" placeholder="Credit card number..">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="t_sec">Sec Number</label>
                    </div>
                    <div class="col-75">
                        <!--t_sec-->
                        <input type="text" name="t_sec" placeholder="Number on back..">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="t_email">Email</label>
                    </div>
                    <div class="col-75">
                        <!--t_email-->
                        <input type="email" name="t_email" placeholder="Your email..">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="t_amnt">Amount</label>
                    </div>
                    <div class="col-75">
                        <!--t_amnt-->
                        <input type="number" name="t_amnt" placeholder="How many tickets..">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="t_btl">Bottle Service</label>
                    </div>
                    <div class="col-75">
                        <!--t_btl-->
                        <select name="t_btl">
                            <option value="none">--none--</option>
                            <option value="Girls Night Out">Girls Night Out</option>
                            <option value="Friday Feature">Friday Feature</option>
                            <option value="Rockstars">Rockstars</option>
                            <option value="The Baller">The Baller</option>
                        </select>                    
                    </div>
                </div>
                <input class="form_btn" type="submit" value="Send">
            </form>
        </div>
        <div class="col">
            event image slideshow here
        </div>
    </div>
</div>

<?php include "footer.php";
?>