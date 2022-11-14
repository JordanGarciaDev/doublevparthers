<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/db.php';
include_once '../class/tickets.php';

$database = new Database();
$db = $database->getConexion();
 
$tickets = new Tickets($db);

$tickets->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';

$result = $tickets->read();

if($result->num_rows > 0){    
    $ticketRecords=array();
    $ticketRecords["tickets"]=array();
	while ($ticket = $result->fetch_assoc()) {
        extract($ticket);
        $ticketDetalle=array(
            "id" => $id,
            "usuario" => $usuario,
            "descripcion" => $descripcion,
			"estatus" => $estatus,
			"fecha_creacion" => $fecha_creacion,
            "fecha_actualizacion" => $fecha_actualizacion
        ); 
       array_push($ticketRecords["tickets"], $ticketDetalle);
    }    
    http_response_code(200);     
    echo json_encode($ticketRecords);
}else{     
    http_response_code(404);     
    echo json_encode(
        array("mensaje" => "Ticket NO Encontrado!.")
    );
} 