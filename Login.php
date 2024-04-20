<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/905bed9ec4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login-.css">
    <link rel="icon" href="Images/arcad.png" type="image/icon type">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            
            <li><a href="#">Shop &#x25BE</a>
                <ul class="d">
                    <li><a href="games.php">Games</a></li>
                    <li><a href="#">Cards</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul>
            </li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
            <li class="search-box">
                <form action="#" method="get">
                    <input type="text" name="search" placeholder="Search...">
                    <button type="submit">Search</button>
                </form>
            </li>
            <li><a href="Login.php"><i class="fa-solid fa-user"></i></a></li>
        </ul>
    </nav>
    <div class="L">
        <img class="img" src="Images/arcad.png" alt="">
    </div>
    <div class="H">
        <div class="box">
            <h1>Login</h1>
            <form action="SignUp/login.php" method="post">
                <input type="text" name="mailuid" placeholder="Enter Username">
                <br>
                <input type="password" name="pwd" placeholder="Enter Password">
                <br>
                <button type="submit" name="Login">LOGIN</button>
            </form>
            <p>Not signed up already? <a class="signUp" href="Signup.php">Sign up here</a></p>
        </div>
    </div>
    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h2>Follow Us</h2>
                 <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                 <a href="#"><i class="fab fa-instagram instagram-bg"></i></a>
                 <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                 <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="footer-section contact-form">
                <h2>Send us your thoughts!</h2>
                <form action="#" method="post" id="op">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Your email address" id="pp">
                    <textarea name="message" class="text-input contact-input" placeholder="Your message"></textarea>
                    <button type="submit" class="btn contact-btn">Send</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 Arcade Pulse. All rights reserved.
        </div>
    </footer>
</body>
</html>
