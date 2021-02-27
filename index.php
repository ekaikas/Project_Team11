<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Forum Nightclub Welcome Page">
    <meta name="keywords" content="Night club, club, dance, dj, party, NY, New York, best party, best club, downtown, accessible">
    <meta name="author" content="Team 11 aka The Forum">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Nightclub</title>
    <link rel="shortcut icon" type="image/x-icon" href="Img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="style_index.css">
</head>
<body>
    <section class="showcase">
        <header>
            <!--logo-->
            <a href="tickets.php">
                <img class="logo" src="Img/forum_logo.png" alt="forum logo">
            </a>
            <div class="toggle"></div>
        </header>
        <!--video-->
        <video src="Img/wallpaper.mp4" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="text">
        <p>
            <h3>Join the</h3>
            <h2>Party</h2>
        </p>  
        <p>
            <button>
                <a href="tickets.php">Tickets</a>
            </button>
            <button>
                <a href="bottle_service.php">Bottle Service</a>
            </button>
        </p>
        </div>
        <?php
            // Start the session
            session_start();
            if(isset($_SESSION["id"]) === true)
            {
                echo'
                <ul class="social">
                    <li>
                        <a href="https://facebook.com" target="_blank">
                            <img class="sm" src="Img/facebook.png" alt="facebook logo" title="Facebook">
                        </a>
                    </li>
                    <li>
                        <a href="https://instagram.com" target="_blank">
                            <img class="sm" src="Img/instagram.png" alt="instagram logo" title="Instagram">
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com" target="_blank">
                            <img class="sm" src="Img/twitter.png" alt="twitter logo" title="Twitter">
                        </a>
                    </li>
                    <li>
                        <a class="log" href="Login_Page.php">Hi, '.$_SESSION["username"].'</a><a class="log" href="logout.php">logout</a>
                    </li>
                </ul>';
            }
            else
            {
                echo'
                <ul class="social">
                    <li>
                        <a href="https://facebook.com" target="_blank">
                            <img class="sm" src="Img/facebook.png" alt="facebook logo" title="Facebook">
                        </a>
                    </li>
                    <li>
                        <a href="https://instagram.com" target="_blank">
                            <img class="sm" src="Img/instagram.png" alt="instagram logo" title="Instagram">
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com" target="_blank">
                            <img class="sm" src="Img/twitter.png" alt="twitter logo" title="Twitter">
                        </a>
                    </li>
                    <li>
                        <a class="log" href="Login_Page.php">login</a><a class="log" href="Registration_Page.php">register</a>
                    </li>
                </ul>';
            }
        ?>
    </section>

    <div class="menu">
        <ul>
            <li><a href="index.php">Home</a><hr></li>
            <li><a href="bottle_service.php">Bottle Service</a><hr></li>
            <li><a href="tickets.php">Tickets</a><hr></li>
            <li><a href="about_us.php">About Us</a><hr></li>
            <li><a href="dress_code.php">Dress Code</a><hr></li>
            <li><a href="careers.php">Careers</a><hr></li>
            <li><a href="contact_us.php">Contact Us</a></li>
        </ul>
    </div>    
</body>
</html>
<script>
    const menuToggle = document.querySelector('.toggle');
    const showcase = document.querySelector('.showcase');
    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        showcase.classList.toggle('active');
    })
</script>