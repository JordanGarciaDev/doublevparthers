<?php
class Tickets{
    
    private $Tabla = "tickets";
    public $id;
    public $name;
    public $description;
    public $price;
    public $category_id;   
    public $fcreacion;
	public $fecha_actualizacion;
    private $conn;
	
    public function __construct($db){
        $this->conn = $db;
    }	
	
	function read(){	
		if($this->id) {
			$stmt = $this->conn->prepare("SELECT * FROM ".$this->Tabla." WHERE id = ?");
			$stmt->bind_param("s", $this->id);
		} else {
			$stmt = $this->conn->prepare("SELECT * FROM ".$this->Tabla);
		}		
		$stmt->execute();			
		$result = $stmt->get_result();		
		return $result;	
	}
	
	function create(){
		
		$stmt = $this->conn->prepare("
			INSERT INTO ".$this->Tabla."(`usuario`, `descripcion`, `estatus`, `fecha_creacion`)
			VALUES(?,?,?,?)");
		
		$this->usuario = htmlspecialchars(strip_tags($this->usuario));
		$this->descripcion = htmlspecialchars(strip_tags($this->descripcion));
		$this->estatus = htmlspecialchars(strip_tags($this->estatus));
		$this->fecha_creacion = htmlspecialchars(strip_tags($this->fecha_creacion));
		
		
		$stmt->bind_param("ssss", $this->usuario, $this->descripcion, $this->estatus, $this->fecha_creacion);
		
		if($stmt->execute()){
			return true;
		}
	 
		return false;		 
	}
		
	function update(){
	 
		$stmt = $this->conn->prepare("
			UPDATE ".$this->Tabla." 
			SET usuario= ?, descripcion = ?, estatus = ?, fecha_creacion = ?
			WHERE id = ?");
	 
		$this->id = htmlspecialchars(strip_tags($this->id));
		$this->usuario = htmlspecialchars(strip_tags($this->usuario));
		$this->descripcion = htmlspecialchars(strip_tags($this->descripcion));
		$this->estatus = htmlspecialchars(strip_tags($this->estatus));
		$this->fecha_creacion = htmlspecialchars(strip_tags($this->fecha_creacion));
	 
		$stmt->bind_param("sssss", $this->usuario, $this->descripcion, $this->estatus,$this->fecha_creacion, $this->id);
		
		if($stmt->execute()){
			return true;
		}
	 
		return false;
	}
	
	function delete(){
		
		$stmt = $this->conn->prepare("DELETE FROM ".$this->Tabla."  WHERE id = ?");
			
		$this->id = htmlspecialchars(strip_tags($this->id));
	 
		$stmt->bind_param("s", $this->id);
	 
		if($stmt->execute()){
			return true;
		}
	 
		return false;		 
	}
}
?>