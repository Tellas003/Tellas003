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
         body {
      font-family: 'Arial', sans-serif;
      
            justify-content: center;
      align-items: center;
     
    }
        .di {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
      text-align: center;
    }
    h2 {
      color: #333;
    }

    form {
      margin-top: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-top:16px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
    .error{
      color:red;
    }
.background-image {
       background-image: url('assets/images/scorpio.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      height: 100%;
      position: relative;
      margin-top:-40px;
      
     
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
        align-item:center;
      position: sticky;
      color: #333;
      text-align: center;
      font-size:16px;
      padding: 1px;
    }
    #con {
     
      top:400px;
      background-color: rgba(255,255,255,0);
      margin-top: 20px;
      border-radius: 10px;
    }
    h3{
      font-weight: bold;
      font-size:14px;
    }

    
   
    @media (max-width: 768px) {
      .content {
               font-size:12px;
            }

            #con {
                margin-top: 20px;
            }

            .col-lg-8 {
                margin-top: 20px;
                .row{
margin-top:200px;
                }
      }
    }
    
    </style>
       <!-- about section starts -->
      
      <div>
      <div class="background-image">
    <div class="overlay"></div>
    <div class="content">
       <section id="about" class="about section-padding">
        <div class="container" >
            <div class="row" id="con"justify-content-md-center style=" margin-top:300px;">
                <div class="col"><p></p></div>
            <div class="col-md-8">
                                         <div class="di">
                          <h3 style="font-weight:bold;">Enter Certificate Number</h3>
    <form action="verified_certificate.php" method="post">
    <?php if (isset($_GET['error']))  ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
      
      <label for="certificateNo">Certificate Number:</label>
      <div style="display: flex; align-items: center;">
       <span class="input-group-text" id="certificateStripes">Stripes</span>
           <span class="input-group-text">/</span>
        <select id="certificateCourse" name="certificateCourse" required style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; background-color: #eee;">
        <option value="Stripes">Select Course</option>
        <option value="BTRM">BTRM</option>
        <option value="PCCW">PCCW</option>
         <option value="SSBT">SSBT</option>
          <option value="ES">ES</option>
           <option value="SCALE">SCALE</option>
            <option value="VERC">VERC</option>
             <option value="EEAC">EEAC</option>
              <option value="FRAMO">FRAMO</option>
               <option value="BWTS-NK">BWTS-NK</option>
                <option value="ME">ME</option>
                 <option value="BWTS-SP">BWTS-SP</option>
                  <option value="INST">INST</option>
                   <option value="VECME">VECME</option>
                     <option value="SSSHT">SSSHT</option>
      </select>
         <span class="input-group-text">/</span>
                    <input type="text" class="form-control" id="certificateNo" name="certificateNo" required>
       
      </div>
      <div class="mb-3"><br>
                                        <label for="lastName" class="form-label">Student Last Name:</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                                    </div>
      <button type="submit" class="btn btn-success">Verify</button>
    </form>
    </div>
                                                         
                            <!--<a href="#" class="btn btn-warning">Learn More</a>-->
                    </div>
                </div>
            </div>
        </div>
</div>
    </section>
</div></div>
  </div><br><br><br> <br><br><br> <br><br><br><br><br><br> 
    <!-- about section Ends -->
    <!-- FOOTER -->

<?php include'footer.php';?>

<!-- Footer End -->

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    
    
    
</body>
</html>
                          