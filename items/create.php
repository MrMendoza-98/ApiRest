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

if(!empty($data->user) && !empty($data->description) &&
!empty($data->created) &&
!empty($data->status)){

    $tickets->user = $data->user;
    $tickets->description = $data->description;
    $tickets->created = date('Y-m-d H:i:s'); 
    $tickets->status = "abierto";

    if($tickets->create()){ 
    http_response_code(201); 
    echo json_encode(array("message" => "Ticket was created."));
    } else{ 
    http_response_code(503); 
    echo json_encode(array("message" => "Unable to create ticket."));
    }
}else{ 
    http_response_code(400); 
    echo json_encode(array("message" => "Unable to create ticket. Data is incomplete."));
}
?>