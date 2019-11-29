<?PHP


class produitcore
{


	function getAllproduit()
    {
		$sql = "SElECT * From produits";
		$db = config::getConnexion();
		try {
			/* query: Exécute une requête SQL, retourne un jeu de résultats  (s'il y en a)
			 en tant qu'objet PDOStatement, ou FALSE si une erreur survient.
			*/
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function suppprod($nom)
	{
	
	   
		$sql = "DELETE FROM produits where nom= :nom";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':nom', $nom);
		try {
			$req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	
}
?>