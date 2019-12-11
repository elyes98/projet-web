<?php 
session_start();
include "../Core/messageCore.php";
include "../config.php";
include "../entities/message.php";
$test=0;
$msg="";
$desc=$_POST['description'];
if((!isset($desc))||(empty($desc)))
$test=1;
$date=date("Y-m-d");
if($test==0)
{$message=new message($_SESSION["id"],$desc,$date,$_POST['source']);
    $m = new messageCore();
        $m->creerMessage($message);
        header('Location: contact.php');
    
}
else
    {
        echo "<script> alert('veuillez saisir un contenu');</script>";
        
         header('Location: contact.php');
    }

  ?>