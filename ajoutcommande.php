<?php
session_start();
?>
<HTML>

<head>
</head>
<h1>Ajouter une commande</h1>
<?php
include "../config.php";

	include "../entities/commande.php";
	$p=$_GET["id"];
	$d=$_GET["name"];
if(isset($_POST["ajouter"])){
	
	  //connection au serveur
	  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
	  //sélection de la base de données:
	  $db  = mysql_select_db( "goombas" ) ;
	 
	  //récupération des valeurs des champs:    
		
	  //ref:
	  $ref    = $_POST["ref"] ;
	  //date:
	  $date = $_POST["date"] ;
	  //payment:
	  $payment = $_POST["payment"] ;
	  //description:
	  $description     = $_GET["name"];
	  //prix:
	  $prix      = $_GET["prix"];
	  //prix:
	  $cinUtilisateur     = $_SESSION["id"] ;
	 
	  //création de la requête SQL:
	  $sql = "INSERT  INTO commande (ref, date, payment, description, prix,cinUtilisateur)
				VALUES ( '$ref', '$date', '$payment', '$description', '$prix','$cinUtilisateur') " ;
	 
	  //exécution de la requête SQL:
	  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
	 
	  //affichage des résultats, pour savoir si l'insertion a marchée:
	  if($requete)
	  {
		echo("L'insertion a été correctement effectuée") ;
		header('Location:../views/listeCommande.php');

	  }
	  else
	  {
		echo("L'insertion à échouée") ;
	  }

	
// redirection vers la liste des comptes
//




}
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
              <h2>Passer la commande</h2>
           
            </div>
          </div>
        </div>
      </div>

      <div class="container">
<form form name="insertion" action="ajoutcommande.php?prix=<?php echo $p?>&name=<?php echo $d;?>" method="POST">
	<table>
    <tr>
<td>saisir votre CIN</td>
<td><input type="text" name="cinUtilisateur"    value=" <?PHP echo $_SESSION["id"];   ?> " readonly > </td>
</tr>
<tr>
<td>ref de la commande</td>
<td><input type="number" name="ref"></td>
</tr>
<tr>
<td>payment</td>
<td><input type="number" name="payment"></td>
</tr>
<tr>
<td>la description</td>
<td><?php echo $d; ?></td>
</tr>
<tr>
<td>date</td>
<td><input type="date" name="date"></td>
</tr>
<tr>
<td>prix</td>
<td><?php  echo $p;?> dt</td>
</tr>

<tr>

<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>

	</table>
</form>
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


