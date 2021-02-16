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
                            <option value="Full Moon Party">Full Moon Party</option>
                            <option value="The Summer Party">The Summer Party</option>
                            <option value="Pool Party">Pool Party</option>
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
            <div class="container mt-3">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ul>
                
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="eventpic" src="Img/events/1.jpg" alt="event image for valentines day">
                    </div>
                    <div class="carousel-item">
                        <img class="eventpic" src="Img/events/2.jpg" alt="summer flyer for event">
                    </div>
                    <div class="carousel-item">
                        <img class="eventpic" src="Img/events/3.jpg" alt="beach party flyer for event">
                    </div>
                </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php include "footer.php";
?>