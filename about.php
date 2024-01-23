<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripes Academy</title><LINK REL="SHORTCUT ICON"  HREF="assets/images/StripesLogo.svg">
      <meta name="author" content="A Maria Tellas Bsc.,MCA">

    <link rel="stylesheet" href="assets/about-style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <!--Navbar start-->
    
  <?php include 'navbar.php';?>
    
    <!--navbar end-->
    <style>
        
.background-image {
      background-image: url('assets/images/scorpio.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      height: 100%;
      position: relative;
      margin-top:-120px;
      
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 1) 80%);
    }

    .content {
        flex: 1;
      position: sticky;
      color: #333;
      text-align: center;
      font-size:16px;
      padding: 20px;
    }
    h2{
      font-weight: bold;
    }

    #con {
     
      top:400px;
      background-color: rgba(255,255,255,0.5);
      margin-top: 20px;
      border-radius: 10px;
    }

    .image-container img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    @media (max-width: 768px) {
      .content {
                padding: 10px;
            }

            #con {
                margin-top: 20px;
            }

            .col-lg-8 {
                margin-top: 20px;
      }
    }
    
    </style>
       <!-- about section starts -->
      
      <div>
      <div class="background-image">
    <div class="overlay"></div>
    <div class="content">
       <section id="about" class="about section-padding">
    
        <div class="container">
            <div class="row" id="con" style=" margin-top:300px;">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="assets/about-img">
                        <img src="assets/images/about.png" alt="" class="img-fluid" id="im">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                          <h2 style="font-weight: bold; ">Experience. Educate. Evolve<br/> </h2><br>
                          <p align="left"> At Stripes, we aim to forge a symbiotic relationship between training and performance. Our cutting-edge teaching methodologies serve as a bridge, seamlessly connecting theory to practice and enhancing knowledge transfer. <br>
                           <br> Established in 2023, our institute, strategically located just 15 minutes from the Mumbai International Airport, boasts a tranquil campus that fosters an optimal learning environment away from the city's hustle and bustle.<br>
                            <br> With state-of-the-art facilities and conference-style classrooms, we ensure a personalized learning experience. The open-air cafeteria offers a delightful space for relaxation during breaks.<br>
                            <br> Our greatest asset is our team of highly qualified trainers, renowned in maritime training, complemented by an in-house psychologist providing valuable feedback to participants. 
                            <br><br>To deliver an immersive learning experience, we proudly house India's largest Full Mission Navigation Simulator by ARI. Embracing a customized approach, we collaborate with partners to tailor courses to their unique needs. 
                            <br><br>We are confident that our innovative and rewarding training programs will propel you toward your goals. Thank you for considering Stripes Institute; we eagerly anticipate supporting you in your journey.</p>
                         <br><br><br><br><br>
                            <!--<a href="#" class="btn btn-warning">Learn More</a>-->
                    </div>
                </div>
            </div>
        </div>
</div>
    </section>
</div></div>
  </div>
    <!-- about section Ends -->
    <!-- FOOTER -->

<?php include'footer.php';?>

<!-- Footer End -->

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    
    
    
</body>
</html>