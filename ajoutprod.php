<HTML>

<?php
include "../config.php";

	include "../entities/produit.php";
	

	
	  //connection au serveur
	  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
	  //sélection de la base de données:
	  $db  = mysql_select_db( "goombas" ) ;
	 
	  //récupération des valeurs des champs:    
		
	  //nom:
	  $nom  = $_POST["nom"] ;
	  //description:
	  $description = $_POST["description"] ;
	  //prix:
	  $prix= $_POST["prix"] ;
	  //valable:
	  $valable = $_POST["valable"] ;
	
	 
	  //création de la requête SQL:
	  $sql = "INSERT  INTO produits (nom, description, prix, valable)
				VALUES ( '$nom', '$description', '$prix', '$valable') " ;
	 
	  //exécution de la requête SQL:
	  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
	 
	  //affichage des résultats, pour savoir si l'insertion a marchée:
	  if($requete)
	  {
		echo("L'insertion a été correctement effectuée") ;
	  }
	  else
	  {
		echo("L'insertion à échouée") ;
	  }

	

// redirection vers la liste des comptes
header('Location:listeProduits.php');

	
?>
<body>
<form form name="insertion" action="ajoutprod.php"  method="POST">
<table>
<caption>Ajouter un produit</caption>
<tr>
<td>nom</td>
<td><input type="text" name="nom"></td>
</tr>
<tr>
<td>description</td>
<td><input type="text" name="description"></td>
</tr>
<tr>
<td>prix</td>
<td><input type="float" name="prix"></td>
</tr>
<tr>
<td>valable</td>
<td><input type="number" name="valable"></td>
</tr>
<tr>

<tr>
<td></td>
<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>
</table>
</form>
</body>
</HTMl>