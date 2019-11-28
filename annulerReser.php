<?PHP  
include "../Core/reservationAdmin.php";
include "../config.php";
$comptes = new reservationAdmin();
$liste = $comptes->annuler($_POST['ref']);
header('Location: calendar.php');
?>