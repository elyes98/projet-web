<?PHP
class reservationAdmin
{
    function getNewReservations()
	{
		$sql = "SElECT * From reservation where acceptation=0";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function annulerReservation()
	{
		$sql = "SElECT * From reservation where acceptation=2";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function confirmerReservation()
	{
		$sql = "SElECT * From reservation where acceptation=1";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function confirmer($ref)
	{
		$sql = "UPDATE reservation SET acceptation =1 WHERE ref =".$ref;
		$db = config::getConnexion();
		try {
			$db->exec($sql);
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function annuler($ref)
	{
		$sql = "UPDATE reservation SET acceptation =2 WHERE ref =".$ref;
		$db = config::getConnexion();
		try {
			$db->exec($sql);
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function getReservation($choix,$value)
	{
		$sql = "SELECT * FROM reservation WHERE $choix=$value";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function creerReservation($compte)
	{
		$db = config::getConnexion();
		try{
			$ref = $compte->getRef();
			$date = $compte->getDate();
			$nbr = $compte->getNbplaces();
			$desc = $compte->getDescription();
			$td = $compte->getTempsdebut();
			$tf = $compte->getTempsfin();
			$cin = $compte->getCinutilisateur();
			$acc = $compte->getAcceptation();
$db->exec("INSERT INTO reservation(ref,date,nbPlaces,description,tempsDebut,tempsFin,cinUtilisateur,acceptation) VALUES(". $db->quote($ref) . "," . $db->quote($date) .",".$db->quote($nbr).",".$db->quote($desc).",".$db->quote($td).",".$db->quote($tf).",".$db->quote($cin).",".$db->quote($acc).")"); 
			
			 
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	function updateReservation($date,$nb,$desc,$d,$f,$ref)
	{
		$db = config::getConnexion();
		$sql = "UPDATE reservation SET date =".$db->quote($date).",nbPlaces=". $db->quote($nb).",description=".$db->quote($desc).", tempsDebut=".$db->quote($d).",tempsFin=".$db->quote($f)." WHERE ref =$ref";
		
		try {
	

			$db->exec($sql);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	function getMostReservation()
	{
		$sql = "SELECT cinUtilisateur, count(*) as nb FROM `reservation` WHERE acceptation=1 group by cinUtilisateur order by nb DESC limit 10";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function getStatReservation()
	{
		$sql = "SELECT nbPlaces,count(*) as nb FROM `reservation` group by nbPlaces order by nb DESC limit 20  ";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function calculerOccMonth($num)
	{
		$sql = "SELECT count(*) as nb FROM `reservation` WHERE extract(month from date)=$num";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
}




