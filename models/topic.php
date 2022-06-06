<?php
    class Topic{
       
        public $id ;
        public $name ;
        public $level;
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
        $this->level = $dataRow['level'];
        
    }
    //create qeuestion
    function create(){
        $query = "Insert Into Topics Set 
        name=:name,
        level=:level";
        $stmt = $this->conn->prepare($query);

        //sanitize
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->level = htmlspecialchars(strip_tags($this->level));

        

        //bind para
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":level", $this->level);

        
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    function update(){
        $query = "Update Topics 
        Set 
        name=:name,
        level=:level
        Where
            id = :id";
        
        $stmt = $this->conn->prepare($query);

        //sanitize
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->level = htmlspecialchars(strip_tags($this->level));
        

        //bind para
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":level", $this->level);
      
        
        if($stmt->execute()){
            echo 1;
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
    function show_by_level(){    
        $query = "SELECT * From Topics  Where level =?  ";

        $stmt = $this->conn->prepare($query);
        
        $stmt->bindparam(1,$this->level);
        $stmt->execute();
       
        if( $stmt->rowCount() == 0){
            #echo "not found";
            exit;
        }
        
        return $stmt;

            
        
    }
}
?>