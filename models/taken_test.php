<?php
    class Taken_test{
       
        public $id ;
        public $topic ;
        public $score;
        public $date;
        public $userId;
    public function __construct($db){
        
        $this->conn = $db;
    }
    // read all question in database
    function read(){    
        $query = "SELECT * From taken_tests";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    //show question by id
    function show_by_id(){    
        $query = "SELECT * From taken_tests Where id =?";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindparam(1,$this->id);
        $stmt->execute();
        
        if( $stmt->rowCount() == 0){
            #echo "not found";
            exit;
        }
            
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
        
       
        $this->topic = $dataRow['topic'];
        $this->score = $dataRow['score'];
        $this->date = $dataRow['date'];
        $this->userId = $dataRow['userId'];
        
    }
    //create qeuestion
    function create(){
        $query = "Insert Into taken_tests Set 
        topic=:topic,
        score=:score,

        userId=:userId";
        $stmt = $this->conn->prepare($query);

        //sanitize
        $this->topic = htmlspecialchars(strip_tags($this->topic));
        $this->score = htmlspecialchars(strip_tags($this->score));
       
        $this->userId = htmlspecialchars(strip_tags($this->userId));
        

        //bind para
        $stmt->bindParam(":topic", $this->topic);
        $stmt->bindParam(":score", $this->score);
        $stmt->bindParam(":userId", $this->userId);

        
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    
    function show_by_userID(){    
        $query = "SELECT * From Taken_tests  Where userId =?  ";

        $stmt = $this->conn->prepare($query);
        
        $stmt->bindparam(1,$this->userId);
        $stmt->execute();
       
        if( $stmt->rowCount() == 0){
            #echo "not found";
            exit;
        }
        
        return $stmt;

            
        
    }
}
?>