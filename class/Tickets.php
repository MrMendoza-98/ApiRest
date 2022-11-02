<?php
class Tickets{
    private $conn;
    private $itemsTable;
    public function __construct($db){
        $this->conn = $db;
        $this->itemsTable = 'tickets';
    }
    function create(){
    
        $stmt = $this->conn->prepare(" INSERT INTO ".$this->itemsTable."(`user`, `description`, `created`, `status`) VALUES(?,?,?,?)");
    
        $this->user = htmlspecialchars(strip_tags($this->user));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->created = htmlspecialchars(strip_tags($this->created));
        $this->status = htmlspecialchars(strip_tags($this->status));
    
    
        $stmt->bind_param("ssss", $this->user, $this->description, $this->created, $this->status);
    
        if($stmt->execute()){
            return true;
        }
    
        return false; 
    }
    function read(){ 
        if($this->id) {
            $stmt = $this->conn->prepare("SELECT * FROM ".$this->itemsTable." WHERE id = ?");
            $stmt->bind_param("i", $this->id); 
        } else {
            $stmt = $this->conn->prepare("SELECT * FROM ".$this->itemsTable); 
        } 
        $stmt->execute(); 
        $result = $stmt->get_result(); 
        return $result; 
    }
    function update(){
    
        $stmt = $this->conn->prepare("UPDATE ".$this->itemsTable." SET user= ?, description = ?, status = ?, modified = ? WHERE id = ?");
        
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->user = htmlspecialchars(strip_tags($this->user));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->modified = htmlspecialchars(strip_tags($this->modified));
        $this->status = htmlspecialchars(strip_tags($this->status));
        
        $stmt->bind_param("ssssi", $this->user, $this->description, $this->status, $this->modified, $this->id);
        
        if($stmt->execute()){
            return true;
        }
        
        return false;
    }
    function delete(){
    
        $stmt = $this->conn->prepare("DELETE FROM ".$this->itemsTable." WHERE id = ?");
        
        $this->id = htmlspecialchars(strip_tags($this->id));
        
        $stmt->bind_param("i", $this->id);
        
        if($stmt->execute()){
            return true;
        }
        
        return false; 
    }
}
?>