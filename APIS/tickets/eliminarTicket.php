<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
include_once '../config/db.php';
include_once '../class/tickets.php';
 
$database = new Database();
$db = $database->getConexion();
 
$tickets = new Tickets($db);
 
$datos = json_decode(file_get_contents("php://input"));

if(!empty($datos->id)) {
	$tickets->id = $datos->id;
	if($tickets->delete()){
		http_response_code(200); 
		echo json_encode(array("mensaje" => "Ticket Eliminado!"));
	} else {    
		http_response_code(503);   
		echo json_encode(array("mensaje" => "No se puede eliminar el ticket."));
	}
} else {
	http_response_code(400);    
    echo json_encode(array("mensaje" => "No se pueden eliminar los Tickets. Los datos están incompletos."));
}
?>