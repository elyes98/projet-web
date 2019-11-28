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

	
}