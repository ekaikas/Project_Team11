<?php 
    $title = "About Us-Forum";
    $meta_desc = "Forum Nightclub About Us";
    $meta_keywords = "who we are, introduction, forum, night club, party, mission, vision, description";
    include "header.php";
?>    
  
<div class="container bod">
    <h1>About Us</h1>

    <div class="row">
        <div class="col ab1">
            <h2>Forum Nightclub</h2>
            <p>
                Relax in an exclusive social environment with specialty cocktails, bottle service offerings, top hits, and the
                best parties in New York City every weekend. <br>
                Guests must be 18 years or older. Reservations are recommended. 
            </p>
            <p>
                Reservations:
                <button class="but" type="button">
                    <a class="links" href="tel:6468758000"> 
                        <img class="phone" src="Img/email/phone1.png" alt="phone logo vector white">
                    </a> 
                </button>
                <button class="but" type="button" href="#">
                    <a class="but" href="contact_us.php">Book Online&nbsp;&nbsp;</a>
                </button>
            </p>
        </div>
        <div class="col">
            <img class="dancing" src="Img/1490244.jpg" alt="people dancing in a night club">
        </div>
    </div>

    <div class="row">
        <div class="col ab1">
            <h2>Private Events</h2>
            Forum offers a versatile collection of spaces for everything from an intimate cocktail party to a full-scale event taking 
            over the entire venue. The Special Events team can help to create a fully branded, immersive, and unique experience. <br><br>
            For more information, contact us at:
            <button class="but" type="button">
                <a class="links" href="tel:6468758008">
                    <img class="phone" src="Img/email/phone1.png" alt="phone logo vector white">
                </a>
            </button> 
            <button class="but" type="button">
                <a class="links" href="mailto: events@forumnightclub.com">
                    <img class="phone" src="Img/email/mail.png" alt="email logo vector white">
                </a> 
            </button>
        </div>
        <div class="col">
            <img class="dancing" src="Img/dj_deck_blurred.jpg" 
            alt="blurred image of dj deck in nigh club" title="dj deck">
        </div>
    </div>

</div>

<?php include "footer.php";
?>