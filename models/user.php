<?php
    class User{
        public $conn;
        public $id ;
        public $name ;
        public $password ;
        public $privillege ;
       
    
    public function __construct($db){
        
        $this->conn = $db;
    }
    // read all question in database
    function read(){    
        $query = "SELECT * From Users";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    //show question by id
    function show_by_id(){    
        
        $query = "SELECT * From Users Where id=?";
                 
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindparam(1,$this->id);
        $stmt->execute();
        if( $stmt->rowCount() == 0){
            #echo "not found";
            exit;
        }
            
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
        
        
        $this->name = $dataRow['name'];
        $this->password = $dataRow['password'];
        $this->privillege = $dataRow['privillege'];
        #var_dump(($this));
    }
    //create qeuestion
    function create(){
        $query = "Insert Into Users Set 
        name=:name,
        password=:password,
        privillege=:privillege";
        
        $stmt = $this->conn->prepare($query);

        //sanitize
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->privillege = htmlspecialchars(strip_tags($this->privillege));
        

        //bind para
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":privillege", $this->privillege);
        

        if($stmt->execute()){
            return true;
        }
        return false;
    }

    function update()
    {
        $query = "Update Users 
        Set 
            name=:name,
            password=:password,
            privillege=:privillege
        Where
            id = :id";
        
        $stmt = $this->conn->prepare($query);

        //sanitize
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->privillege = htmlspecialchars(strip_tags($this->privillege));
        

        //bind para
        $stmt->bindParam(":id", $this->id);

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":privillege", $this->privillege);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
    function delete(){
        $query = "Delete From Users 
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