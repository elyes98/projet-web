<?PHP  
include "../Core/reservationAdmin.php";
include "../config.php";
$comptes = new reservationAdmin();
$liste = $comptes->confirmer($_POST['ref']);
header('Location: calendar.php');
?>
