<?php

echo " Administrator register page ";
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="header">
        <a href="welcome.blade.php" class="logo">ParkIstra</a>

        <div class="topnav">
            <a href="welcome.blade.php">Home</a>
            

            <div class="dropdown">
            <button class="dropbtn" onclick="location.href='projects.php'">Projects</button>
            <div class="dropdown-content">
                <a href="helpinglocal.php">Helping local communities</a>
                <a href="#">Supporting local organizations</a>
                <a href="#">Preserving istrian heritage</a>
                <a href="#">Education</a>
            </div>
            </div>
            <a href="gallery.php">Gallery</a>

            <div class="dropdown">
            <button class="dropbtn" onclick="location.href='about.php'">About us</button>
            <div class="dropdown-content">
                <a href="#">About us</a>
                <a href="#">Who are we</a>
                <a href="#">Testimonials</a>
            </div>
            </div>

            <a href="contact.php">Contact</a>
            <a href="login.php">Log in</a>
        </div> 


        <div class="header-main-social">
        <a href="https://www.instagram.com/parkistra/"><div class="header-main-social-ig"></div></a>
                <a href="https://www.facebook.com/parkistra/?locale=sl_SI"><div class="header-main-social-fb"></div></a>
                <a href="https://www.youtube.com/@janezmatos/featured"><div class="header-main-social-yt"></div></a>
        </div>

        <div class="search-box">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
            </div>
        <div class="language">
            <a href="https://parkistra.com/" class="btn">SLO</a>
        </div>

    </section>
<div class="middle">
<section class="signup-form">
    <h1> Insert your information</h1>
    <form action="includes/signupDODATNO.php" method="post"> 
         <p> Username </p>   <input type="text" name="ime" placeholder="Enter username"> 
         <p> Email </p>   <input type="text" name="mejl" placeholder="Enter email"> 
         <p> Password </p>  <input type="password" name="lozinka" placeholder="Enter password">  
         <p>Repeat password </p>   <input type="password" name="ponovolozinka" placeholder="Repeat password">  <br>
         <button type="submit" name="submit" class="button">Done </button>
        </form>
<h3> Already have an account? <a href="login.php"> click here!</a> </h3>
</section>
</div>



            
</body>
</html>