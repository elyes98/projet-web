<?PHP
include "../Core/commandecore.php";
include "../config.php";

$id=$_GET["id"];
if(isset($_POST['submit'])){
$date=$_POST["date"];

$commande = new commandecore();
$commande-> updatecommande($date,$id);
header('Location:listeCommande.php');

}

?>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

<form action="modifiercommande.php?id=<?php echo $_GET["id"]; ?>" method="POST"> 
   <table>
                                        <strong>modifer la commande</strong> 
                                        <br>
                                        <br>
                                       
                                                   
                                                    <label for="text-input" >1- Date </label> <br>
                                                    <input type="date" name="date"> <br>
                                                   

                                                    <br>
                                                    <br>
                                                    <br>
                                                    <input type="hidden" name="ref" value="<?PHP echo $_GET['id'];  ?>">

                                        <input type="submit" name="submit" value="modifier" class="btn btn-danger btn-sm">

</table>
</form>
</body>

</html>
