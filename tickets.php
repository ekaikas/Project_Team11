<?php 
    $title = "Tickets | Forum Nightclub";
    $meta_desc = "Forum Nightclub Tickets";
    $meta_keywords = "events, tickets, concert, dj, party, pre-purchase, online tickets, show pass, press pass";
    include "header.php";
    include 'tickets_avlbl_db_read.php'; // Will fetch event data from DB
    include 'user_read.php'; // Will fetch user data from DB (email and name)
    
?> 

<meta charset="UTF-8">
<h1>Tickets</h1> 
    <div class="container frm">  
        <div class="row">
            <div class="col formcss">
                <!--insert db file: insert_ticket.php-->

                <!--Start of the tickets form-->
                <form id="form" class="form" name="ticket_form" action="insert_ticket.php" method="post">
                <div class="row">
                    <div class="col-25">
                    <label for="cevent">Choose Event</label> 
                    </div>
                    <div class="col-75">
                        <select name="cevent" id="cevent">   
                        <option ceventValue="NULL" id="cevent">--select--</option>             
                        <option value="Full Moon Party"><?php echo $a[1].' - $' .$a[3]; ?></option>
                        <option value="The Summer Party"><?php echo $a[5].' - $' .$a[7]; ?></option>
                        <option value="Pool Party"><?php echo $a[9].' - $' .$a[11]; ?></option>
                        </select> 
                        <i class="fa fa-check-circle" style="font-size:15px"></i>
                        <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                        <small>Error message</small>
                    </div>
                </div>
                <div class="row">
                        <div class="col-25">
                        <label for="cardholder">Cardholder</label>
                        </div>
                        <div class="col-75">
                            <input type="text" placeholder="Type the cardholder name" maxlength="50" id="card_name" value="<?php if($_SESSION['name']){echo $_SESSION['name'];}?>"/>
                            <i class="fa fa-check-circle" style="font-size:15px"></i>
                            <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                            <small>Error message</small>
                        </div>
                </div>
                <div class="row">
                        <div class="col-25">
                        <label for="cnumber">Card Number</label>
                        </div>
                        <div class="col-75">
                            <input type="text" placeholder="xxxx xxxx xxxx xxxx" maxlength="19" id="cnumber" />
                            <i class="fa fa-check-circle" style="font-size:15px"></i>
                            <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                            <small>Error message</small>
                        </div>
                </div>
                <div class="row">
                        <div class="col-25">
                        <label for="snumber">Sec Number</label>
                        </div>
                        <div class="col-75">
                            <input type="number" placeholder="3 digits number on the back of the card" maxlength = "6" min=0 id="snumber" />
                            <i class="fa fa-check-circle" style="font-size:15px"></i>
                            <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                            <small>Error message</small>
                        </div>
                </div>
                <div class="row">
                        <div class="col-25">
                        <label for="username">Email</label>
                        </div>
                        <div class="col-75">
                            <input type="text" placeholder="Type your email" maxlength="50" id="email" value="<?php if($_SESSION['email']){echo $_SESSION['email'];}?>" />
                            <i class="fa fa-check-circle" style="font-size:15px"></i>
                            <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                            <small>Error message</small>
                        </div>
                </div>
                <div class="row">
                        <div class="col-25">
                        <label for="t_amnt">Amount</label>
                        </div>
                        <div class="col-75">
                            <input type="number" min=0 placeholder="Select number of tickets" max="25" id="t_amnt" />
                            <i class="fa fa-check-circle" style="font-size:15px"></i>
                            <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                            <small>Error message</small>
                        </div>
                </div>
                <div class="row">
                        <div class="col-25">
                        <label for="bservice">Bottle Service</label>
                        </div>
                        <div class="col-75">
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
                </div>    
                    <input class="form_btn" type="submit" value="Send" id="but_submit">
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
<!-- ******************************************* POP UP BOX ******************************************* -->

<!--****************************************************Javascript ***************************************************************-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="ticket_purchase.js"></script>

<?php include "footer.php";
?>