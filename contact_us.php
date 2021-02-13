<?php 
    $title = "Contact Us-Forum";
    $meta_desc = "Contact Us at Forum Nightclub";
    $meta_keywords = "contact, address, phone number, map, hours, hours of operation, opening hours, open, closed, close time, forum hours";
    include "header.php";
?>    
  
<div class="container bod">
    <h1>Contact Us</h1>
        <div class="row">
            <div class="col contact_form">
                CONTACT TABLE HERE
                fields:

                regarding: 
                enum("General Inquiry", "Private Event", "Bottle Service", "Press Inquiry", "Representatives")
                name*
                email*
                phone*
                subject*
                message*
                captcha
                send button

                ...note... if signed in grab username
                add all data to customer database

                Fields marked by an asterisk (*) are mandatory
            </div>
            <div class="col">
                <div class="row">
                   <div class="col">
                        Address: <br>
                        828 8th Avenue <br>
                        New York, NY 10001 <br>
                   </div>
                    <div class="col">
                        <img class="map" src="https://github.com/ekaikas/Project_Team11/blob/main/img/location.jpg?raw=true" 
                        alt="map showing location of Forum Nighclub" title="Forum Location">
                    </div>
                </div>
                <div class="row">
                    <p>
                        Reservations: <br>
                        <a href="tel:6468758000">646.875.8000</a> <br>
                        <a href="mailto:info@forumnightclub.com">general emails</a>
                    </p>
                    <p>
                        Events: <br>
                        <a href="tel:6468758008">646.875.8008</a> <br>
                        <a href="mailto:events@forumnightclub.com">events emails</a>
                    </p>
                </p>
                <img src="https://github.com/ekaikas/Project_Team11/blob/main/img/contactus.jpg?raw=true" 
                alt="image of text saying loney for you" title="Contact Image">
            </div>
        </div>
    </div>

<?php include "footer.php";
?>