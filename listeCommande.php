<?PHP
include "../Core/commandecore.php";
include "../config.php";
$commandeC = new commandecore();
$listeCommande = $commandeC->getAllCommandes();

?>

	

	
	






<!-- 
////////////////////////////////////////////////////////////////

Author: Free-Template.co
Author URL: http://free-template.co.
License: https://creativecommons.org/licenses/by/3.0/
License URL: https://creativecommons.org/licenses/by/3.0/
Site License URL: https://free-template.co/template-license/
  
Website:  https://free-template.co
Facebook: https://www.facebook.com/FreeDashTemplate.co
Twitter:  https://twitter.com/Free_Templateco
RSS Feed: https://feeds.feedburner.com/Free-templateco

////////////////////////////////////////////////////////////////
-->
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
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html">Goomba's</a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link" href="index.html"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="recipes.html"></a>
            
            
              <li class="nav-item">
                <a class="nav-link" href="news.html"></a>
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
    



    
    <section class="section bg-light pt-0 bottom-slant-gray">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h3>commande recu</h3>
           
            </div>
          </div>
        </div>
	  </div>

	  <div class="container">
	           <div class="row no-gutters">
          
             
                
	 <form >
   <table  border="1">
				
	<tr>
		
		<td>Cin</td>
		<td>Prix</td>
		<td>Description</td>
		<td>Date</td>
		
		<td>supprimer</td>
		<td>modifier</td>
  </tr>
  <?PHP
	foreach ($listeCommande as $row) {
		?>
		
	<tr>
			
			<td><?PHP echo $row['cinUtilisateur']; ?></td>
			<td><?PHP echo $row['prix'] ; ?></td>
			<td><?PHP echo $row['description']; ?></td>
      <td><?PHP echo $row['date']; ?></td>
      
      
	
		
				<form method="POST" action="suppTable.php">
        <td>
					<input type="submit" name="supprimer" value="supprimer">
					<input type="hidden" name="ref" value="<?PHP echo $row['ref'];  ?>">
				</form>
      </td>
      
      <form action=" modifiercommande.php" method="POST" >
			                                <td>
                                            <input type="hidden" name="ref" value="<?PHP echo $row['ref'];  ?>">
                                             <input type="submit" name="modifier" value="modifier"> 
                                             </form>
                                            </td>
                                    
		
          
    </tr>
    <?php

}

?>
		</table>
			
      </form>
       </div>
         
      <form method="POST" action="pdf.php">
                                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-print" aria-hidden="true"></i></button>
                                <input type="hidden" value="<?PHP echo $row['ref']; ?>" name="ref">
                            </form>
              
 </div>
	  </section> <!-- .section -->
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
     
 
     <script src="js/main.js"></script>
     
   </body>
 </html>

























