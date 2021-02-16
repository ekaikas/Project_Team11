<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=<?php echo "$meta_desc";?>>
    <meta name="keywords" content=<?php echo "$meta_keywords";?>>
    <meta name="author" content="Team 11 aka The Forum">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity=
    "sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>
        <?php echo "$title";?>
    </title>
    <link href=style_pages.css type="text/css" rel="stylesheet">
<body>
    <header>
        <div class="container head">
            <nav role="navigation">
                <div class="row">
                    <div class="col">
                        <div id="menuToggle">
                        <!--hamburger menu-->
                            <input type="checkbox" />
                                <span></span>
                                <span></span>
                                <span></span>
                        
                            <ul id="menu">
                                <a href="index.php"><li>Home</li></a><hr>
                                <a href="bottle_service.php"><li>Bottle Service</li></a><hr>
                                <a href="tickets.php"><li>Tickets</li></a><hr>
                                <a href="about_us.php"><li>About Us</li></a><hr>
                                <a href="dress_code.php"><li>Dress Code</li></a><hr>
                                <a href="careers.php"><li>Careers</li></a><hr>
                                <a href="contact_us.php"><li>Contact Us</li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                    <!--logo-->
                        <a href="index.php">
                            <img class="header_logo" src="Img/forum_logo.png" 
                            alt="Forum company logo" title="Forum Logo">
                        </a>
                    </div>
                    <div class="col">
                        <div class="row">
                        <!--top row for social media-->
                            <ul class="social">
                                <li>
                                    <a href="https://facebook.com" target="_blank">
                                        <img class="sm" src="Img/fb_logo.png" alt="facebook logo" title="Facebook">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://instagram.com" target="_blank">
                                        <img class="sm" src="Img/instagram_logo.png" alt="instagram logo" title="Instagram">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com" target="_blank">
                                        <img class="sm" src="Img/twitter_logo.png" alt="twitter logo" title="Twitter">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                        <!--bottom row for login and register-->
                            <ul class="login">
                                <li>
                                    <a class="log" href="#">Sign In</a>
                                </li>
                                <li class="log">
                                    |
                                </li>
                                <li>
                                    <a class="log" href="#">Register</a>
                                </li>          
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>    
        </div>
    </header>
    