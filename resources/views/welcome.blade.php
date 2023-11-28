
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
                <a href="supporting.php">Supporting local organizations</a>
                <a href="preserving.php">Preserving istrian heritage</a>
                <a href="education.php">Education</a>
            </div>
            </div>
            <a href="gallery.php">Gallery</a>

            <div class="dropdown">
            <button class="dropbtn" onclick="location.href='about.php'">About us</button>
            <div class="dropdown-content">
                <a href="about.php">About us</a>
                <a href="who.php">Who are we</a>
                <a href="testimonials.php">Testimonials</a>
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







    <!-- Slideshow container -->
    <section class="home">
       <div class="swiper home-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide" style="background:url(img/cvet.jpg) no-repeat">
                <div class="content">
                    <h>Park Istra</h>
                        <span>Bring up the hero in you</span>
                </div>
            </div>

            <div class="swiper-slide" style="background:url(img/Panorama.jpg) no-repeat">
                <div class="content">
                <h>Park Istra</h>
                <span>Do you need help?
                    </span>
                </div>
            </div>

            <div class="swiper-slide" style="background:url(img/Slap.jpg) no-repeat">
                <div class="content">
                <h>Park Istra</h>
                <span>Do you know someone who needs help?
                    </span>
                </div>
            </div>

            <div class="swiper-slide" style="background:url(img/skale.jpg) no-repeat">
                <div class="content">
                <h>Park Istra</h>
                <span>Do you want to help?
                    </span>
                </div>
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

       </div>
    </section>
    <!-- Slideshow container -->

    <!-- Button section -->
 <section class=buttons>
    <div class="volunteer">
        <a href="#" class="btn">Become a volunteer</a>
    </div>

    <div class="help">
        <a href="#" class="btn">I need help</a>
    </div>

    <div class="donate">
        <a href="#" class="btn">Donate</a>
    </div>
 </section>

    <!-- Button section -->
    <!-- project box -->
    <section class="project-package">
        <h1 class="heading-title">Projects</h1>
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="img/localcom.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Helping local communities</h3>
                    
                    <a href="helpinglocal.php" class="btn">Read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/org.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Supporting local organizations</h3>
                    
                    <a href="supporting.php" class="btn">Read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/her.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Preserving istrian heritage</h3>
                    
                    <a href="preserving.php" class="btn">Read more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- project box -->

    <!-- testimonials -->
    <section class="testimonials">
        <h1>Testimonials</h1>
        <div class="swiper testimonials-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <p>This experience has made me better and I feel I’ve learned much more than in years and years of school.</p>
                    <h3>Christiana, Italy</h3>
                </div>

            
                <div class="swiper-slide">
                    <p>I will carry with me few of the best times of my life from this place.</p>
                    <h3>Lyly, Quebec</h3>
                
                </div>

            
                <div class="swiper-slide">
                    <p>The project is an inspiration for me. My time here was a blessing!</p>
                    <h3>Ivano, South Africa</h3>
                </div>
            

            
                <div class="swiper-slide">
                    <p>Thank you so much for this amazing life experience. <br>
                        You gave me hope for the future; and motivation for present time. I enjoyed every moment spent here.</p>
                    <h3>Laurane, France</h3>
                
            </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
</section>
    <!-- testimonials -->
 <!-- testimonials -->


 <section class="follow">
        <h1 class="heading-title">Follow us</h1>
       
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