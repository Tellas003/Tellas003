<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripes Academy</title><LINK REL="SHORTCUT ICON"  HREF="assets/images/StripesLogo.svg">
      <meta name="author" content="A Maria Tellas Bsc.,MCA">

    <link rel="stylesheet" href="assets/about-style.css">
    <link href="assets/teamstyle.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
  <body>
     <!-- ======= Team Section ======= -->
     <div class="background-image">
    <div class="overlay"></div>
     <section id="team" class="team section-bg">
        <div class="container">
        <div class="content">
  
          
          <div class="row"  style="margin-top:200px;">
          <div class="section-title">
            <h2>Our Team</h2>
            <div class="underline"></div>
          
            <!--<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, ducimus.</p>-->
          </div>
  
            <div class="col-lg-6">
              <div class="member d-flex align-items-start" >
                <div class="teampic"><img src="assets/images/Untitled.jpeg" class="img-fluid" alt=""></div>
                <div class="member-info">
                 &nbsp &nbsp <h4>Capt.Vincent Fernandes</h4>
                  <span>Director & Principal</span>
                  <!--<p>The Principal and Director of Stripes Academy, also the author of "The ECDIS Blues - A Practical Guide to Safe Passage on ECDIS." </p>-->
                  
                  <div class="social">
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                    <a href=""> <i class="bi bi-whatsapp"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start" >
                <div class="teampic"><img src="assets/images/melissa.jpg" class="img-fluid" alt=""></div>&nbsp&nbsp
                <div class="member-info">
                  <h4>Ms. Melissa Dunbar</h4>
                  <span>Psychologist & Management Assistant</span>
                  <!--<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, ducimus.</p>-->
                  <div class="social">
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                    <a href=""> <i class="bi bi-whatsapp"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" >
               <div class="teampic"><img src="assets/images/rajiv.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Capt.Rajiv Bidap</h4>
                  <span>Training Faculty</span>
                  
                  <div class="social">
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                    <a href=""> <i class="bi bi-whatsapp"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" >
                <div class="teampic"><img src="assets/images/clevis.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Clevis Carvalho</h4>
                  <span>Floor Manager</span>
                  
                  <div class="social">
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                    <a href=""> <i class="bi bi-whatsapp"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
           <!-- <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" >
                  <div class="teampic"><img src="./img/team4.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Charlotte</h4>
                    <span>Senior software engineer</span>
                    
                    <div class="social">
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                      <a href=""> <i class="bi bi-whatsapp"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
          </div>-->
  
        </div>
      </section><!-- End Team Section -->
</div><br><br><br><br><br><br>
   
    <!-- FOOTER -->

<?php include'footer.php';?>

<!-- Footer End -->

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    
    
    
</body>
</html>