<?php 
    $title = "Tickets | Forum Nightclub";
    $meta_desc = "Forum Nightclub Tickets";
    $meta_keywords = "events, tickets, concert, dj, party, pre-purchase, online tickets, show pass, press pass";
    include "header.php";
?> 

<link rel="stylesheet" href="style_pages.css">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<h1>Tickets</h1> 
<div class="container frm">  
    <div class="row">
        <div class="col formcss">
            <!--insert db file: insert_ticket.php-->

            <!--Start of the tickets form-->
            <form id="form" class="form" name="ticket_form" action="insert_ticket.php" method="post">
            <div class="row">
                <label for="cevent">Choose Event</label>
                <select name="cevent" id="cevent">   
                <option ceventValue="NULL" id="cevent">--select--</option>             
                <option value="Full Moon Party">Full Moon Party</option>
                <option value="The Summer Party">The Summer Party</option>
                <option value="Pool Party">Pool Party</option>
                </select> 
                <i class="fa fa-check-circle" style="font-size:15px"></i>
                <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                <small>Error message</small>
            </div>
            <div class="row">
                <label for="cardholder">Cardholder</label>
                <input type="text" placeholder="Type the cardholder name" id="card_name"/>
                <i class="fa fa-check-circle" style="font-size:15px"></i>
                <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                <small>Error message</small>
            </div>
            <div class="row">
                <label for="cnumber">Card Number</label>
                <input type="number" placeholder="Type the card number" id="cnumber" />
                <i class="fa fa-check-circle" style="font-size:15px"></i>
                <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                <small>Error message</small>
            </div>
            <div class="row">
                <label for="snumber">Sec Number</label>
                <input type="number" placeholder="3 digits number on the back of the card" id="snumber" />
                <i class="fa fa-check-circle" style="font-size:15px"></i>
                <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                <small>Error message</small>
            </div>
            <div class="row">
                <label for="username">Email</label>
                <input type="email" placeholder="Type your email" id="email" />
                <i class="fa fa-check-circle" style="font-size:15px"></i>
                <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                <small>Error message</small>
            </div>
            <div class="row">
                <label for="t_amnt">Amount</label>
                <input type="number" placeholder="Select number of tickets" id="t_amnt" />
                <i class="fa fa-check-circle" style="font-size:15px"></i>
                <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                <small>Error message</small>
            </div>
            <div class="row">
                <label for="bservice">Bottle Service</label>
                <select name="bservice" id="bservice">   
                <option bserviceValue="NULL" id="bservice">--none--</option>             
                <option value="Girls Night Out">Girls Night Out</option>
                <option value="Friday Feature">Friday Feature</option>
                <option value="Rockstars">Rockstars</option>
                <option value="The Baller">The Baller</option>
                </select> 
                <i class="fa fa-check-circle" style="font-size:15px"></i>
                <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                <small>Error message</small>
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

<!--Link to javascript form validation-->
<script src="Tickets_Form validation and Event handling.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php include "footer.php";
?>