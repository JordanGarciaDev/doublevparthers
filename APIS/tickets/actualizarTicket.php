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

if(!empty($datos->id) && !empty($datos->usuario) &&
!empty($datos->descripcion)){
	
	$tickets->id = $datos->id;
	$tickets->usuario = $datos->usuario;
    $tickets->descripcion = $datos->descripcion;
    $tickets->estatus = $datos->estatus;
    $tickets->fecha_creacion = date('Y-m-d H:i:s');
	
	
	if($tickets->update()){
		http_response_code(200);   
		echo json_encode(array("mensaje" => "el ticket ha sido actualizado correctamente"));
	}else{    
		http_response_code(503);     
		echo json_encode(array("mensaje" => "No se puede actualizar el ticket."));
	}
	
} else {
	http_response_code(400);    
    echo json_encode(array("mensaje" => "No se pueden actualizar los tickets. Los datos están incompletos."));
}
?>