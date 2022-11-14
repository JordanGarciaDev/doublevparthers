<?php

class Database{
	
	private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "";
    private $database  = "doublevparthers";
    
    public function getConexion(){
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error para conectarse con MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>