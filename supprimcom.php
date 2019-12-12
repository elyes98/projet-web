<?PHP
include "../core/commandecore.php";

$id=$_GET['id'];
$commandeC=new commandecore();
$commandeC->deleteCommande($id);

header('Location:listeCommande.php');
	
	?>