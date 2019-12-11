<?PHP
class message{
	protected $cinUtilisateur;
    protected $contenu;
    protected $date;
	protected $source;
    

	
	function __construct($cinUtilisateur,$contenu,$date,$source){
        $this->cinUtilisateur=$cinUtilisateur;
        $this->contenu=$contenu;
		$this->date=$date;
		$this->source=$source;

	}
	function getCinUtilisateur(){
		return $this->cinUtilisateur;
	}
	function setCinUtilisateur($cinUtilisateur){
		$this->cinUtilisateur=$cinUtilisateur;
	}
    function getContenu(){
		return $this->contenu;
	}
	function setContenu($contenu){
		$this->contenu=$contenu;
    }
    function getDate(){
		return $this->Date;
	}
	function setDate($date){
		$this->date=$date;
	}
	function getSource(){
		return $this->source;
	}
	function setSource($source){
		$this->source=$source;
    }
}

?>