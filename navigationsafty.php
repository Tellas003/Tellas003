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
                        <img src="assets/images/courses_1.png" alt="" class="img-fluid" id="im">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                          <h2 style="font-weight: bold; ">Navigate Safely with Stripes <br/> Our wide range of navigational courses include -<br/> </h2><br>
                          <p align="left";><img src= "assets/images/p4.webp" style="height: 25px;width: 25px;" alt=""> Bridge resource management with emphasis on the “Role based bridge model”,</p>
                            <p align="left";><img src= "assets/images/p4.webp" style="height: 25px;width: 25px;" alt="">the Ship master’s Command & Leadership evaluation,</p>
                            <p align="left";><img src= "assets/images/p4.webp" style="height: 25px;width: 25px;" alt="">Bridge Watchkeeping for Junior Officers</p>
                            <p align="left";><img src= "assets/images/p4.webp" style="height: 25px;width: 25px;" alt="">Ship to Ship transfer,</p>
                            <p align="left";><img src= "assets/images/p4.webp" style="height: 25px;width: 25px;" alt="">Polar Navigation,</p>
                            <p align="left";><img src= "assets/images/p4.webp" style="height: 25px;width: 25px;" alt="">ECDIS training etc.</p>
                            <p align="left";>These trainings are conducted on vessels such as LNG carriers, VLCC’s, Capesize Bulk carriers etc, at various ports and straits around the world, using our state-of-the-art full mission simulator.</p>
                                                          <br><br><br><br><br>
  <br><br><br>


                                                          
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
                          