<!DOCTYPE html>
<html lang="en">
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
     <!--header-->
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
                <a href="about.php">About us</a>
                <a href="who.php">Who are we</a>
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
    <!--header-->
<div class="heading" style="background:url(img/cvet.jpg) no-repeat">
<h1>About us</h1>
</div>
        
        
    <section class="about">
        <div class="image">
            <img src="/img/about.jpg" alt="">
        </div>

        <div class="content">
            <h1>Our story</h1>
            <p>Park Istra is a charity organization, located in a beautiful inland of Istria.
                Our mission is to help the local population and support sustainable development in our region.
                Our work is very diverse and ranges from the assistance to the socially deprivileged to the protection
                of cultural and natural heritage, educational activities and support of sustainable activities of local
                communities throughout Slovenian Istria and beyond. We especially like to support the ideas 
                and projects that bring a long-term positive effects to our region and beyond.</p>

        </div>

    </section>
    <section class="drugipar">
    <div class="content">
    <p>In 2019 Park Istra opened its volunteer center in the village of Kastelec, which is the only such center in Slovenia and beyond.
    It can host up to twenty volunteers at all times and responds daily to the needs and challenges of the local environment. We organize several volunteer actions every day to help people whenever they need our hardworking hands. To date, Park Istra has organized about 3500 volunteering actions and has hosted more than 1200 volunteers from 56 countries, who have donated over 100.000 hours of work.</p>
    <p>In 2021 one of Park Istra’s projects was awarded nomination for Salto Award as one of the top five volunteering projects in Europe.

In 2019 Petra Matos received a national award for outstanding achievements in volunteering.

In 2017 Park Istra received the prestigious environmental award Energy Globe Award Slovenia and the status of an organization that works in the public interest.

In 2017, the founder of Park Istra, Petra Matos, was nominated for the national award of Slovenian woman of the year.</p> 
    </div>
    </section>

    <!--footer-->
   <section class="footer">
    <div class = "box-container">

        <div class = "box">
            <h3>CONTACT US</h3>
            
                <a><i class="fas fa-map"></i>Kastelec 21, 6275 Črni kal, Slovenia</a>
                <a><i class="fas fa-phone"></i>00 386 51 212 921</a>
                <a><i class="fas fa-envelope"></i>info@parkistra.com</a>
            
        </div>

        <div class = "box">
            <h3>FOLLOW US</h3>
            <div class="social">
                <a href="https://www.instagram.com/parkistra/"><div class="header-main-social-ig"></div></a>
                <a href="https://www.facebook.com/parkistra/?locale=sl_SI"><div class="header-main-social-fb"></div></a>
                <a href="https://www.youtube.com/@janezmatos/featured"><div class="header-main-social-yt"></div></a>
            </div>
        </div>

        <div class = "prize">
            <img src="/img/pri.png" alt="parkistra prize">
        </div>

    </div>

    <div class="credit">© 2014 <strong>Trajnostni Park Istra</strong> | <a href="https://parkistra.com/feed/">RSS feed </a></div>
    </section>
<!--footer-->










<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="script.js"></script>
</body>
</html>