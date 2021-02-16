<?php 
    $title = "Contact Us-Forum";
    $meta_desc = "Contact Us at Forum Nightclub";
    $meta_keywords = "contact, address, phone number, map, hours, hours of operation, opening hours, open, closed, close time, forum hours";
    include "header.php";
?>    

<h1>Contact Us</h1>
<div class="container frm">
    <div class="row">
        <div class="col formcss">
            <!--insert db file: insert_contact.php-->
            <form name="contact_form" action="insert_contact.php" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="contact_reg">Regarding</label>
                    </div>
                    <div class="col-75">
                        <!--contact_reg-->
                        <select name="contact_reg">
                            <option value="NULL">--select--</option>
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Private Event">Private Event</option>
                            <option value="Bottle Service">Bottle Service</option>
                            <option value="Press Inquiry">Press Inquiry</option>
                            <option value="Reps">Reps</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="contact_fname">First Name</label>
                    </div>
                    <div class="col-75">
                        <!--contact_fname-->
                        <input type="text" name="contact_fname" placeholder="Your first name..">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="contact_lname">Last Name</label>
                    </div>
                    <div class="col-75">
                        <!--contact_lname-->
                        <input type="text" name="contact_lname" placeholder="Your last name..">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="contact_phone">Phone</label>
                    </div>
                    <div class="col-75">
                        <!--contact_phone-->
                        <input type="text" name="contact_phone" placeholder="Your number..">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="contact_email">Email</label>
                    </div>
                    <div class="col-75">
                        <!--contact_email-->
                        <input type="text" name="contact_email" placeholder="Your email..">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="ccontact_msg">Message</label>
                    </div>
                    <div class="col-75">
                        <!--contact_msg-->
                        <textarea name="contact_msg" placeholder="What would make you a good addition to our team.." style="height:200px"></textarea>
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

<?php include "footer.php";
?>