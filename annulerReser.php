<?PHP  
session_start();
include "../Core/reservationAdmin.php";
include "../config.php";
$comptes = new reservationAdmin();
$liste = $comptes->annuler($_POST['ref']);
if($_SESSION["test"]=='consulterReser')
header('Location: consulterReser.php');
else if($_SESSION["test"]=="calendar")
header('Location: calendar.php');
?>