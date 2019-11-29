<?PHP


class commande
{
	private $ref;
	private $date;
	private $payment;
	private $description;
	private $prix;
	private $cinUtilisateur;


	function __construct($ref,$date,$payment,$description,$prix,$cinUtilisateur){
		$this->ref=$ref;
		$this->date=$date;
		$this->payment=$payment;
		$this->description=$description;
		$this->prix=$prix;
		$this->cinUtilisateur=$cinUtilisateur;
	}
	
	function getRef(){
		return $this->ref;
	}
	function getDate(){
		return $this->date;
	}
	function getPayment(){
		return $this->payment;
	}
	function getDescription(){
		return $this->description;
	}
	function getPrix(){
		return $this->prix;
	}
	function getCinUtilisateur(){
		return $this->cinUtilisateur;
	}

	function setRef($ref){
		$this->ref=$ref;
	}
	function setDate($date){
		$this->date=$date;
	}
	function setPayment($payment){
		$this->payment=$payment;
	}
	function setDescription($description){
		$this->description=$description;
	}
	function setPrix($prix){
        $this->prix=$prix;
        
    }
    function setCinUtilisateur($cinUtilisateur){
        $this->cinUtilisateur=$cinUtilisateur;
		
		
	}
	public function Logedin($conn,$username,$password,$role)
	{
		$req="select * from commande where username='$username' && password='$password'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}
	
}

?>