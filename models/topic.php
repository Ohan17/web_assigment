<?php
    class Topic{
       
        public $id ;
        public $name ;
       
    public function __construct($db){
        
        $this->conn = $db;
    }
    // read all question in database
    function read(){    
        $query = "SELECT * From topics";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    //show question by id
    function show_by_id(){    
        $query = "SELECT * From topics Where id =?";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindparam(1,$this->id);
        $stmt->execute();
        
        if( $stmt->rowCount() == 0){
            #echo "not found";
            exit;
        }
            
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
        
       
        $this->name = $dataRow['name'];
        
    }
    //create qeuestion
    function create(){
        $query = "Insert Into Topics Set 
        name=:name";
        
        $stmt = $this->conn->prepare($query);

        //sanitize
        $this->name = htmlspecialchars(strip_tags($this->name));
        

        //bind para
        $stmt->bindParam(":name", $this->name);
        
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    function update(){
        $query = "Update Topics 
        Set 
        name=:name
            
        Where
            id = :id";
        
        $stmt = $this->conn->prepare($query);

        //sanitize
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->name = htmlspecialchars(strip_tags($this->name));
        

        //bind para
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":name", $this->name);
      

        if($stmt->execute()){
            return true;
        }
        return false;
    }
    function delete(){
        $query = "Delete From Topics
        Where
            id = :id";
        
        $stmt = $this->conn->prepare($query);

        //sanitize
        $this->id = htmlspecialchars(strip_tags($this->id));
        
        //bind para
        $stmt->bindParam(":id", $this->id);
        
        if($stmt->execute()){
            return true;
        }
        return false;
    }
}
?>