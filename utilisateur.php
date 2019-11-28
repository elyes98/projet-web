<?PHP
class utilisateur{
	protected $cin;
	protected $nom;
    protected $prenom;
    protected $gendre;
    protected $mail;
	protected $tel;
    protected $role;
    protected $mdp;
    

	
	function __construct($cin,$nom,$prenom,$gendre,$mail,$tel,$role,$mdp){
        $this->cin=$cin;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->gendre=$gendre;
        $this->mail=$mail;
        $this->tel=$tel;
		$this->role=$role;
		$this->mdp=$mdp;

	}
	function getNom(){
		return $this->nom;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function getCin(){
		return $this->cin;
	}
	function setCin($cin){
		$this->cin=$cin;
    }
    function getGendre(){
		return $this->gendre;
	}
	function setGendre($gendre){
		$this->gendre=$gendre;
    }
    function getMail(){
		return $this->mail;
	}
	function setMail($mail){
		$this->mail=$mail;
    }
    function getTel(){
		return $this->tel;
	}
	function setTel($tel){
		$this->tel=$tel;
    }
    function getRole(){
		return $this->role;
	}
	function setRole($role){
		$this->role=$role;
    }
    function getMdp(){
		return $this->mdp;
	}
	function setMdp($mdp){
		$this->mdp=$mdp;
    }
    
	
}

?>