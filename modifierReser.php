<?php 
session_start();
if(!isset($_SESSION["id"])||empty($_SESSION["id"]))
header('Location: login.html');
else
{
    $_SESSION["test"]='modifierReser';
    include "../Core/reservationAdmin.php";
include "../config.php"; 
$comptes = new reservationAdmin();
$liste = $comptes->getReservation('ref',$_POST["ref"]);
foreach ($liste as $row) { }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Goomba's</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />

    <link rel="shortcut icon" href="logo-Goombas.jpg">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
     <!-- Theme Style -->
     <link rel="stylesheet" href="css/style.css">
     <style>
    .dropbtn {
 
  
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  
  min-width: 100px;
 
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
    </head>
    <body>
      
      <header role="banner">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <div class="container">
            <a class="navbar-brand" href="index.php">Goomba's</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarsExample05">
              <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                <li class="nav-item">
                  <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="recipes.php">Menu</a>
                </li>
                
               
                <li class="nav-item">
                  <a class="nav-link" href="news.php">News</a>
                </li>
              </ul>

              <ul class="navbar-nav ml-auto">
            <li class="nav-item cta-btn">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li class="nav-item cta-btn">
              <div class="dropdown">
  <img src="images/icon/admin.jpg" alt="" height="42 px" width="60 px">
  <div class="dropdown-content">
    <a href="modifierUtil">Compte</a>
    <a href="consulterMs.php">message</a>
    <a href="consulterReser.php">reservation</a>
    <a href="deconnecter.php">logout</a>
  </div>
</div>
                
              </li>
            </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- END header -->
      
      <div class="slider-wrap">
        <section class="home-slider owl-carousel">
  
  
          <div class="slider-item" style="background-image: url('img/burger2.jpg');">
            
            <div class="container">
              <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 ">
                  <h1 data-aos="fade-up">Enjoy Your Burger at Goomba's</h1>
                  <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Eat clean to stay fit, have a burger to stay sane </p>
                  <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Get Started</a></p>
                </div>
              </div>
            </div>
  
          </div>
  
        
  
        </section>
      <!-- END slider -->
    </div> 
    

    
    <section class="section  pt-5 top-slant-white2 relative-higher bottom-slant-gray">
      
     <div class="container">
        <div class="row">
          <div class="col-lg-6">
          <form action="modifierR.php" method="POST">
                  <label for="name">Date</label>
                  <input type="date" id="name" name="date" class="form-control" value="<?php echo $row['date'];  ?>" min="<?php echo date('Y-m-d'); ?>" >
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">nombre de places</label>
                  <input type="number" id="phone" name="nbr" class="form-control" value="<?php echo $row['nbPlaces'];  ?>" min="5" max="50" required>
                </div>
              </div>
              <div class="row">
              <div class="col-md-6 form-group">
                <label for="phone">temps de debut</label>
                  <input type="number" id="phone" name="tempsd" class="form-control" value="<?php echo $row['tempsDebut'];  ?>" min="12" max="23" required>
                </div>
                <div class="col-md-6 form-group">
                <label for="phone">temps fin</label>
                  <input type="number" id="phone" name="tempsf" class="form-control" value="<?php echo $row['tempsFin'];  ?>" min="13" max="24" required>
                </div>
                <div class="col-md-9 form-group">
                <label for="phone">description</label>
                  <textarea name="desc" id="" cols="50" rows="8"><?php echo $row['description'];  ?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                <input type="hidden" name="ref" value="<?php echo $row['ref'];  ?>" class="btn btn-primary">
                  <input type="submit" name="submit" value="modifier" class="btn btn-primary">
                </div>
              </div>
              </form> 
            <p style="color:red;"> <?PHP echo $_SESSION['msg']; ?></p>
          </div>
          
        </div>
      </div>

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="owl-carousel centernonloop2">
              <div class="slide" data-aos="fade-left" data-aos-delay="100">
                <blockquote class="testimonial">
                  <p>&ldquo; cooking is very importan to me as it is an awesome way of experessing my feelings.it is important to express your feelingq on a regular basis.this is how i express mine on a daily basis. &rdquo;</p>
                  <div class="d-flex author">
                    <img src="img/imagemourad.jpg" alt="" class="mr-4">
                    <div class="author-info">
                      <h4>Ben Aljia Houssem </h4>
                     
                    </div>
                  </div>  
                </blockquote>
              </div>
              
        

        
      </div>
    </section> <!-- .section -->
    

  

           
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>About Us</h3>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
            <div class="mb-5">
              <h3>Opening Hours</h3>
              <p><strong class="d-block font-weight-normal text-black">Sunday-Thursday</strong> 5AM - 10PM</p>
            </div>
            <div>
              <h3>Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block text-black">Address:</span>
                  <br><a href="https://www.google.com/maps/place/Goomba's+Pizza/@36.8556248,10.2896448,15z/data=!4m5!3m4!1s0x0:0x2d5115526765890f!8m2!3d36.8556248!4d10.2896448"  target="_blank">V74Q+6V Ain Zaghouan</a>
                  <li class="d-block"><span class="d-block text-black">Phone:</span><span>+216 23132132 </span></li>
                  <li class="d-block"><span class="d-block text-black">Email:</span><br><a href="mailto:houssembenaljia23@gmail.com">houssembenaljia23@gmail.com</a></li>
                </ul>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">About</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Disclaimers</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p>
              <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
    
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    

    <script src="js/main1.js"></script>
    
  </body>
</html>
<?php 
$_SESSION["msg"]='';
}
?>