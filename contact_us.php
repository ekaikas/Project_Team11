  
<?php 
    $title = "Contact Us | Forum Nightclub";
    $meta_desc = "Contact Us at Forum Nightclub";
    $meta_keywords = "contact, address, phone number, map, hours, hours of operation, opening hours, open, closed, close time, forum hours";
    include "header.php";
?>    

<link rel="stylesheet" href="style_pages.css">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<h1>Contact Us</h1>
<div class="container frm">
    <div class="row">
        <div class="col formcss">
            <!--insert db file: insert_contact.php-->

            <!--Start of the contact_us form-->
        <form id="form" class="form" action="insert_contact.php" name="contact_form" method="post">
            <div class="row">
                <div class="col-25">
                <label for="username">Regarding</label>             
                </div>
                    <div class="col-75">
                        <select name="cv_pos" id="cv_pos">                
                        <option cv_posValue="NULL" id="cv_pos">--select--</option>
                        <option value="General Inquiry">General Inquiry</option>
                        <option value="Private Event">Private Event</option>
                        <option value="Bottle Service">Bottle Service</option>
                        <option value="Press Inquiry">Press Inquiry</option>
                        <option value="Reps">Reps</option>
                        </select> 
                        <i class="fa fa-check-circle" style="font-size:15px"></i>
                        <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                        <small>Error message</small>
           
                     </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="username">First Name</label>
                </div>
                    <div class="col-75">
                        <input type="text" placeholder="Type your first name" id="firstname"/>
                        <i class="fa fa-check-circle" style="font-size:15px"></i>
                        <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                        <small>Error message</small>
                    </div>
            </div>
            <div class="row">
                    <div class="col-25">
                    <label for="username">Last Name</label>
                    </div>
                        <div class="col-75">
                            <input type="text" placeholder="Type your last name" id="lastname" />
                            <i class="fa fa-check-circle" style="font-size:15px"></i>
                            <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                            <small>Error message</small>
                        </div>
            </div>
            <div class="row">
                    <div class="col-25">
                    <label for="username">Phone</label>
                    </div>
                        <div class="col-75">
                            <input type="number" placeholder="Type your phone" id="phone" />
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
                            <input type="email" placeholder="Type your email" id="email" />
                            <i class="fa fa-check-circle" style="font-size:15px"></i>
                            <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                            <small>Error message</small>
                        </div>
            </div>
            <div class="row">
                    <div class="col-25">
                    <label for="cv_msg">Message</label>
                    </div>
                        <div class="col-75">
                            <textarea name="cv_msg" placeholder="Message..." style="height:200px" id="cv_msg"></textarea>
                            <i class="fa fa-check-circle" style="font-size:15px"></i>
                            <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                            <small>Error message</small>
                        </div>
            </div>
                    
                <input class="form_btn" type="submit" value="Send">
        </form>
        </div>
        <div class="col">
            <img class="contactpic" src="Img/contactus.jpg?raw=true" alt="image of text saying lonely for you"
            title="Contact Image">
        </div>
    </div>
</div>  

<!--Link to javascript form validation-->

<script src="Contact us_Form validation and Event handling.js"></script>



<?php include "footer.php";
?>
