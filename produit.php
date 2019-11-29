<?PHP
class produit{
	protected $nom;
	protected $desrciption;
	protected $prix;
    protected $valable;
	
	function __construct($nom,$description,$prix,$valable){
		$this->nom=$nom;
		$this->description=$description;
        $this->prix=$prix;
        $this->valable=$valable;

	}
	function getnom(){
		return $this->nom;
	}
	function setnom($nom){
		$this->nom=$nom;
	}
	function getdescription(){
		return $this->description;
	}
	function setdescription($description){
		$this->description=$description;
	}
	function getprix(){
		return $this->prix;
	}
	function setprix($prix){
		$this->prix=$prix;
    }
    function getvalable(){
		return $this->valable;
	}
	function setvalable($valable){
		$this->valable=$valable;
	}
	
}

?>