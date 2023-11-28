<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <a href="supporting.php">Supporting local organizations</a>
                <a href="preserving.php">Preserving istrian heritage</a>
                <a href="education.php">Education</a>
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
    <!--header-->



    <section class="local">
        <h1 class="heading-title">Education</h1>
        <p>Park Istra is an engine of non-formal education. Volunteers learn through a wide variety of work experiences,
        cooperation with other volunteers and with locals of all ages. In addition, 
        we organize regular workshops for volunteers, visitors and local residents, such as:</p>
         <ul>
            <li>afternoon workshops for volunteers;</li>
            <li>workshops for children and the elderly;</li>
            <li>student practices for students from different countries.</li>
         </ul>
         <p>The purpose of our educational activities is:</p>
         <ul>
            <li>to offer the transformative experience of selfless work for others;</li>
            <li>to teach practical skills;</li>
            <li>to offer new opportunities to vulnerable groups of population;</li>
            <li>to raise awareness and disseminate good practices;</li>
            <li>to promote Istria, its beauty and its culture.</li>
         </ul>
         
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
            <img src="img/pri.png" alt="parkistra prize">
        </div>

    </div>

    <div class="credit">© 2014 <strong>Trajnostni Park Istra</strong> | <a href="https://parkistra.com/feed/">RSS feed </a></div>
    </section>

    <!--footer-->



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="script.js"></script>
</body>
</html>