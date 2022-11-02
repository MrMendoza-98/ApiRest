<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/Database.php';
include_once '../class/Tickets.php';

$database = new Database();
$db = $database->getConnection();
 
$tickets = new Tickets($db);

$tickets->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';

$result = $tickets->read();

if($result->num_rows > 0){    
    $itemRecords=array();
    $itemRecords["tickets"]=array(); 
	while ($item = $result->fetch_assoc()) { 	
        extract($item); 
        $itemDetails=array(
            "id" => $id,
            "user" => $user,
            "description" => $description,
			"created" => $created,
            "modified" => $modified,
			"status" => $status            
        ); 
       array_push($itemRecords["tickets"], $itemDetails);
    }    
    http_response_code(200);     
    echo json_encode($itemRecords);
}else{     
    http_response_code(404);     
    echo json_encode(array("message" => "No ticket found."));
} 