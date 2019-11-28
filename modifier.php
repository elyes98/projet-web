<?PHP
include "../Core/utilisateurAdmin.php";
include "../config.php";
$comptes = new utilisateurAdmin();
    $comptes->updateCompte($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['tel']);
    header('Location: table.php');
    
  ?>