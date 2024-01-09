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
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
    
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    
        h2 {
            text-align: center;
        }
    
        form {
            display: flex;
            flex-direction: column;
        }
    
        label, select, input, button {
            margin-bottom: 15px;
        }
    
        select, input, button {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    
        button {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
         <!--header-->
         <section class="header">
        <a href="/" class="logo"></a>

        <div class="topnav">
            <a href="/">Go to the Homepage</a>
            
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

    

    <div class="container">
        <h2>Update Page</h2>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="post" action="{{ route('admin.update') }}" enctype="multipart/form-data">
            @csrf
            <label for="update_type">Choose what to update:</label>
            <select name="update_type" id="update_type" required>
                <option value="">Select an option</option>
                <option value="projects">Projects</option>
                <option value="testimonials">Testimonials</option>
                <option value="gallery">Gallery</option>
            </select>
            

            <div id="testimonialFields" style="display: none;">
                <label for="testimonial_name">Name:</label>
                <input type="text" name="testimonial_name" id="testimonial_name" >
                <br>
            
                <label for="testimonial_text">Testimonial:</label>
                <input type="text" name="testimonial_text" id="testimonial_text" >
                <br>
                
                <label for="testimonial_location">Location:</label>
                <input type="text" name="testimonial_location" id="testimonial_location" >
                <br>
            </div>


            <div id="projectFields" style="display: none;">
                <label>Would you like to:</label>
                <div>
                    <input type="radio" name="project_action" value="upload" id="upload_action" >
                    <label for="upload_action">Upload</label>
                </div>
                <div>
                    <input type="radio" name="project_action" value="delete" id="delete_action" >
                    <label for="delete_action">Delete</label>
                </div>

                <div id="uploadFields" style="display: none;">
                    <label for="project_title">Title:</label>
                    <input type="text" name="project_title" id="project_title" >
                    <br>

                    <label for="project_picture">Choose Picture:</label>
                    <input type="file" name="project_picture" id="project_picture" >
                </div>
            </div>

            <button type="submit">Update</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            
            document.getElementById('update_type').addEventListener('change', function () {
                var selectedType = this.value;

                // Hide/show project fields based on the selected type
                if (selectedType === 'projects') {
                    document.getElementById('projectFields').style.display = 'block';
                    document.getElementById('testimonialFields').style.display = 'none';
                } else {
                    document.getElementById('projectFields').style.display = 'none';
                }
                if(selectedType === 'testimonials'){
                    document.getElementById('testimonialFields').style.display = 'block';
                    document.getElementById('projectFields').style.display = 'none';
                }
                else {
                    document.getElementById('testimonialFields').style.display = 'none';
                }
                
            });

        

            // Add event listener to update the display of upload fields based on the selected action
            document.querySelectorAll('input[name="project_action"]').forEach(function (radio) {
                radio.addEventListener('change', function () {
                    var selectedAction = this.value;

                    // Hide/show upload fields based on the selected action
                    if (selectedAction === 'upload') {
                        document.getElementById('uploadFields').style.display = 'block';
                    } else {
                        document.getElementById('uploadFields').style.display = 'none';
                    }
                });
            });
            document.querySelector('form').addEventListener('submit', function (event) {

            // Prevent the default form submission
             event.preventDefault();

            // Submit the form programmatically
                this.submit();
            });
        });
    </script>
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
