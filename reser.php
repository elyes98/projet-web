<?PHP
session_start() ;
include "../Core/reservationAdmin.php";
include "../entities/reservation.php";
include "../config.php";
$test=0;
$new_date = date('Y-m-d', strtotime($_POST['date']));
function verif_alpha($str){
    
    preg_match("/([^A-Za-z\s])/",$str,$result);
    
    if(!empty($result)){
      return false;
    }
    return true;
  }
  $i=1;
  $comptes = new reservationAdmin();
  $d="'".$new_date."'";
 $liste = $comptes->getReservation('date',$d);
  $debut=$_POST['tempsd'];
  $fin=$_POST['tempsf'];
  $nbr=$_POST['nbr'];
  if($debut>$fin)
{$test=1;
    $_SESSION['msg']= $_SESSION['msg']."le temps du fin doit etre superieur au temps debut <br>";
}
if(!isset($_POST['desc'])||(empty($_POST['desc'])))
{$test=2;
    $_SESSION['msg']=$_SESSION['msg']."saisir une description <br>";
}
foreach($liste as $row)
{
if($debut<=$row['tempsDebut'])
if($fin>$row['tempsDebut'])
$i=0;
if(($debut>=$row['tempsDebut'])&&($debut<=$row['tempsFin']))
$i=0;
}
if($i==0)
{$test=3;
    $_SESSION['msg']=$_SESSION['msg']."goombas n est pas disponible pendant cette periode <br>";  
}
    if ($test==0)
    {$reser=new utilisateur('',$new_date,$nbr,$_POST['desc'],$debut,$fin,$_SESSION["id"],0);
        $comptes = new reservationAdmin();
        $comptes->creerReservation($reser);
        $_SESSION['msg']='votre reservation a ete envoye a l administration.veuillez attendre une confirmation de votre reservation';
        header('Location: contact.php');
       
    }
    else
    header('Location: contact.php');
    



?>