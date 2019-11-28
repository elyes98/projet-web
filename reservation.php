<?PHP
class utilisateur{
	protected $ref;
	protected $date;
    protected $nbplaces;
    protected $description;
    protected $tempsdebut;
    protected $tempsfin;
	protected $cinutilisateur;
    protected $acceptation;
    

	
	function __construct($ref,$date,$nbplaces,$description,$tempsdebut,$tempsfin,$cinutilisateur,$acceptation){
        $this->ref=$ref;
        $this->date=$date;
        $this->nbplaces=$nbplaces;
        $this->description=$description;
        $this->tempsdebut=$tempsdebut;
        $this->tempsfin=$tempsfin;
		$this->cinutilisateur=$cinutilisateur;
		$this->acceptation=$acceptation;

	}
	function getRef(){
		return $this->ref;
	}
	function setRef($ref){
		$this->ref=$ref;
	}
	function getDate(){
		return $this->date;
	}
	function setDate($date){
		$this->date=$date;
	}
	function getNbplaces(){
		return $this->nbplaces;
	}
	function setNbplaces($nbplaces){
		$this->nbplaces=$nbplaces;
    }
    function getDescription(){
		return $this->description;
	}
	function setDescription($description){
		$this->description=$description;
    }
    function getTempsdebut(){
		return $this->tempsdebut;
	}
	function setTempsdebut($tempsdebut){
		$this->tempsdebut=$tempsdebut;
    }
    function getTempsfin(){
		return $this->tempsfin;
	}
	function setTempsfin($tel){
		$this->tempsfin=$tempsfin;
    }
    function getCinutilisateur(){
		return $this->cinutilisateur;
	}
	function setCinutilisateur($cinutilisateur){
		$this->cinutilisateur=$cinutilisateur;
    }
    function getAcceptation(){
		return $this->acceptation;
	}
	function setAcceptation($acceptation){
		$this->acceptation=$acceptation;
    }
    
	
}

?>