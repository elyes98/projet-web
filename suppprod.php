<?PHP
include "../Core/produitcore.php";


$produitCore=new produitcore();
if (isset($_POST["nom"])){
	$produitCore->suppprod($_POST["nom"]);
	header('Location:../views/listeProduits.php');
}

?>