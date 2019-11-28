<?PHP
class utilisateurAdmin
{
    function getAllComptes()
	{
		$sql = "SElECT * From utilisateur";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function deleteCompte($cin)
	{
		$sql = "DELETE FROM utilisateur where cin= :cin";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':cin', $cin);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function getCompte($choix,$value)
	{
		$sql = "SELECT cin,nom,prenom,mail,tel FROM utilisateur WHERE $choix=$value";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function updateCompte($cin,$nom,$prenom,$mail,$tel)
	{

		$sql = "UPDATE utilisateur SET nom ='".$nom ."', prenom ='". $prenom."', mail ='".$mail."', tel=$tel WHERE cin =".$cin;
		$db = config::getConnexion();
		try {
	

			$db->exec($sql);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	function creerCompte($compte)
	{
		$db = config::getConnexion();
		try{
			$cin = $compte->getCin();
			$nom = $compte->getNom();
			$prenom = $compte->getPrenom();
			$gendre = $compte->getGendre();
			$mail = $compte->getMail();
			$tel = $compte->getTel();
			$role = $compte->getRole();
			$mdp = $compte->getMdp();
			
			$db->exec("INSERT INTO utilisateur(cin,nom,prenom,gender,mail,tel,role,mdp) VALUES(". $db->quote($cin) . "," . $db->quote($nom) .",".$db->quote($prenom).",".$db->quote($gendre).",".$db->quote($mail).",".$db->quote($tel).",".$db->quote($role).",".$db->quote($mdp).")"); 
			
			 
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}


}
