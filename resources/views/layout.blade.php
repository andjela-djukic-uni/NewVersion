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
        <a href="/" class="logo"></a>

        <div class="topnav">
            <a href="/">Home</a>
            

            <div class="dropdown">
            <button class="dropbtn" onclick="location.href='projects'">Projects</button>
            <div class="dropdown-content">
                <a href="helpinglocal">Helping local communities</a>
                <a href="supporting">Supporting local organizations</a>
                <a href="preserving">Preserving istrian heritage</a>
                <a href="education">Education</a>
            </div>
            </div>
            <a href="gallery">Gallery</a>

            <div class="dropdown">
            <button class="dropbtn" onclick="location.href='about'">About us</button>
            <div class="dropdown-content">
                <a href="about">About us</a>
                <a href="who">Who are we</a>
                <a href="testimonials">Testimonials</a>
            </div>
            </div>

            <a href="contact">Contact</a>
            @auth
                <a href="admin/update">Update</a>
            @endauth
            <a href="login">Log in</a>
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
        <a href="https://parkistra.com/"><div class="lan"></div></a>
        </div>

    </section>
    <!--header-->



    @yield('content')


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