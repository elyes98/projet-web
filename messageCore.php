<?PHP
class messageCore
{
    function getAllMessages()
	{
		$sql = "SElECT * From message";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function deleteMessage($cinUtilisateur)
	{
		$sql = "DELETE FROM message where cinUtilisateur= :cinUtilisateur";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':cinUtilisateur', $cinUtilisateur);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function creerMessage($message)
	{
		$db = config::getConnexion();
		try{
			$cinUtilisateur = $message->getCinUtilisateur();
			$contenu = $message->getContenu();
			$date = $message->getDate();
			$source = $message->getSource();
			$db->exec("INSERT INTO message(cinUtilisateur,contenu,date,source) VALUES(". $db->quote($cinUtilisateur) . ",".$db->quote($contenu).",".$db->quote($date).",".$db->quote($source).")"); 
			
			 
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	
	}
	function getMessage($choix,$value)
	{
		$sql = "SELECT * FROM message WHERE $choix='".$value."'";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function getMessageAdmin()
	{
		$sql = "SELECT * FROM message WHERE source='u' && checked=0";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}


}
?>