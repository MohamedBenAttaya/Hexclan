<?PHP
class produit{

	private $id;
	private $nom;
	private $description;
	private $prix;
	private $id_photo;
	
		private $id_user;
	

	function __construct($nom,$prix,$description,$id_photo){
		$this->nom=$nom;
		$this->description=$description;
		$this->prix=$prix;
		$this->id_photo=$id_photo;

			
	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getDescription(){
		return $this->description;
	}
	function getPrix(){
		return $this->prix;
	}
	function getId_photo(){
		return $this->id_photo;
    }
    

	function setId($id){
		$this->id = $id;
	}
	function setNom($nom){
		$this->nom = $nom;
	}
	function setDescription($description){
		$this->description = $description;
	}
	function setPrix($prix){
		$this->prix= $prix;
	}
	function setId_photo($id_photo){
		$this->id_photo = $id_photo;
    }
     
    
}

?>