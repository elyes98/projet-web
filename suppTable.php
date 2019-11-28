<?PHP
include "../Core/utilisateurAdmin.php";
include "../config.php";
if(isset($_POST['supprimer']))
{$comptes = new utilisateurAdmin();
$comptes->deleteCompte($_POST['cin']);
header('Location: table.php');
}
    ?>