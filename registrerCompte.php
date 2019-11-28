<?PHP
session_start() ;
include "../Core/utilisateurAdmin.php";
include "../entities/utilisateur.php";
include "../config.php";
function verif_alpha($str){
    
    preg_match("/([^A-Za-z\s])/",$str,$result);
    
    if(!empty($result)){
      return false;
    }
    return true;
  }
    $test=0;
    $msg='';
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];  
    $cin=$_POST['cin'];
    $mail=$_POST['mail']; 
    $tel=$_POST['tel']; 
    $passe=$_POST['passe'];
    if($_POST['male']='yes')
    $gender="male";
    else
    $gender="female";

    if(!(isset($tel))||(empty($tel))||(strlen($tel)!=8))
    {
        $test=1; 
    }
    if(!(isset($cin))||(empty($cin))||(strlen($cin)!=8))
    {
        $test=2;
    }
    if(!(isset($nom))||(empty($nom))||(strlen($nom)>20)||(verif_alpha($nom)==false))
    {
        $test=3; 
    }
    if(!(isset($prenom))||(empty($prenom))||(strlen($prenom)>20)||(verif_alpha($prenom)==false))
    {
        $test=4; 
    }
    if(!(isset($mail))||(empty($mail))||(strlen($mail)>30))
    {
        $test=5; 
    }
    
    if ($test==0)
    {$compte=new utilisateur($cin,$nom,$prenom,$gender,$mail,$tel,1,$passe);
        $comptes = new utilisateurAdmin();
        $comptes->creerCompte($compte);
$_SESSION["c"]=$cin;
header('Location: index.php');
        
    }
    else
    header('Location: register.php');


?>