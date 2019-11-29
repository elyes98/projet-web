<?PHP
include "core/commandecore.php";
$commandeC=new commandecore();
	if (isset($_POST["ref"])) {
		$commandeC->deleteCommande($_POST["ref"]);
		header('Location:listeCommande.php');
	}
	?>