<?PHP



class commandecore
{

	function ajouterCommande($commande)
	{
		$sql = "insert into commande (ref,date,payment,description,prix,cinUtilisateur) values (:ref,:date,:payment,:description,:prix,:cinUtilisateur)";
		include "../config.php";
		$db = config::getConnexion();
		try {
			/* prepare: Prépare une requête SQL à être exécutée 
	par la méthode PDOStatement::execute(). Le modèle de déclaration peut contenir 
	zéro ou plusieurs paramètres nommées (:nom) ou marqueurs (?) pour lesquels 
	les valeurs réelles seront substituées lorsque la requête sera exécutée.
	Si la préparation de la requête SQL est exécutée avec succès, 
	PDO::prepare() retourne un objet PDOStatement. 
	Sinon, PDO::prepare() retourne FALSE ou émet une exception PDOException.
*/
			$req = $db->prepare($sql);

			$cinUtilisateur= $commande->getCinUtilisateur();
			$prix = $commande->getPrix();
            $description = $commande->getDescription();
            $date=$commande->getDate();

			/* bindValue: Associe une valeur à un nom correspondant (paramètre fictif) 
   dans la requête SQL qui a été utilisé pour préparer la requête.
*/
			$req->bindValue(':cinUtilisateur', $cinUtilisateur);
			$req->bindValue(':prix', $prix);
            $req->bindValue(':description', $description);
            $req->bindValue(':date', $date);
            

			/* execute(): Exécute une requête préparée. 
		retourne TRUE en cas de succès ou FALSE si une erreur survient.
		*/
		$req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	function getAllCommandes()
	{
		$sql = "SElECT * From commande inner join utilisateur on commande.cinUtilisateur =utilisateur.cin";
		
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	

	function updatecommande($date,$ref)
	{

		$sql = "UPDATE commande SET  date=:date WHERE ref =:ref";
		$db = new PDO('mysql:host=localhost;dbname=goombas', 'root', '');

		$req = $db->prepare($sql);
		$req->bindValue(':ref', $ref);
		$req->bindValue(':date', $date);

		try { 		$req->execute();

		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
    }

	function deletecommande($ref)
	{
		$sql = "DELETE FROM commande where ref= :ref";
		$db = new PDO('mysql:host=localhost;dbname=goombas', 'root', '');
		$req = $db->prepare($sql);
		$req->bindValue(':ref', $ref);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	

	function trie(){
		$sql="SELECT * from commande order by date desc";
		$db = new PDO('mysql:host=localhost;dbname=goombas', 'root', '');
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

    }

}
