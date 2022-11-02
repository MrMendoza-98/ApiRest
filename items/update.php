<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
include_once '../config/Database.php';
include_once '../class/Tickets.php';
 
$database = new Database();
$db = $database->getConnection();
 
$tickets = new Tickets($db);
 
$data = json_decode(file_get_contents("php://input"));

if(!empty($data->id) && !empty($data->user) && 
!empty($data->description) && !empty($data->modified) && 
!empty($data->status)){ 
	
	$tickets->id = $data->id; 
	$tickets->user = $data->user;
    $tickets->description = $data->description;
	$tickets->modified = date('Y-m-d H:i:s'); 
    $tickets->status = $data->status;
	
	if($tickets->update()){     
		http_response_code(200);   
		echo json_encode(array("message" => "Ticket was updated."));
	}else{    
		http_response_code(503);     
		echo json_encode(array("message" => "Unable to update tickets."));
	}
	
} else {
	http_response_code(400);    
    echo json_encode(array("message" => "Unable to update tickets. Data is incomplete."));
}
?>