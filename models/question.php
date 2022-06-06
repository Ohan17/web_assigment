<?php
    class Question{
        public $conn;
        public $id ;
        public $content ;
        public $topic ;
        public $level ;
        public $ans_a ;
        public $ans_b ;
        public $ans_c ;
        public $ans_d ;
        public $ans_correct ;
    
    public function __construct($db){
        
        $this->conn = $db;
    }
    // read all question in database
    function read(){    
        $query = "SELECT * From Questions";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    //show question by id
    function show_by_topic(){    
        $query = "SELECT * From Questions  Where topic =?  ORDER BY RAND() LIMIT 10";

        $stmt = $this->conn->prepare($query);
        
        $stmt->bindparam(1,$this->topic);
        $stmt->execute();
       
        if( $stmt->rowCount() == 0){
            #echo "not found";
            exit;
        }
        
        return $stmt;

            
        
    }
    function show_by_id(){    
        $query = "SELECT * From Questions Where id =?";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindparam(1,$this->id);
        $stmt->execute();
        
        if( $stmt->rowCount() == 0){
            #echo "not found";
            exit;
        }
            
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
        
       
        $this->content = $dataRow['content'];
        $this->topic = $dataRow['topic'];
        $this->level = $dataRow['level'];
        $this->ans_a = $dataRow['ans_a'];
        $this->ans_b = $dataRow['ans_b'];
        $this->ans_c = $dataRow['ans_c'];
        $this->ans_d = $dataRow['ans_d'];
        $this->ans_correct = $dataRow['ans_correct'];
        #var_dump(($this));
    }
    //create qeuestion
    function create(){
        $query = "Insert Into Questions Set 
        content=:content,
        topic=:topic,
        level=:level,
        ans_a=:ans_a,
        ans_b=:ans_b,
        ans_c=:ans_c,
        ans_d=:ans_d,
        ans_correct=:ans_correct";
        $stmt = $this->conn->prepare($query);

        //sanitize
        $this->content = htmlspecialchars(strip_tags($this->content));
        $this->topic = htmlspecialchars(strip_tags($this->topic));
        $this->level = htmlspecialchars(strip_tags($this->level));
        $this->ans_a = htmlspecialchars(strip_tags($this->ans_a));
        $this->ans_b = htmlspecialchars(strip_tags($this->ans_b));
        $this->ans_c = htmlspecialchars(strip_tags($this->ans_c));
        $this->ans_d = htmlspecialchars(strip_tags($this->ans_d));
        $this->ans_correct = htmlspecialchars(strip_tags($this->ans_correct));

        //bind para
        $stmt->bindParam(":content", $this->content);
        $stmt->bindParam(":topic", $this->topic);
        $stmt->bindParam(":level", $this->level);
        $stmt->bindParam(":ans_a", $this->ans_a);
        $stmt->bindParam(":ans_b", $this->ans_b);
        $stmt->bindParam(":ans_c", $this->ans_c);
        $stmt->bindParam(":ans_d", $this->ans_d);
        $stmt->bindParam(":ans_correct", $this->ans_correct);


        if($stmt->execute()){
            return true;
        }
        return false;
    }

    function update(){
        $query = "Update Questions 
        Set 
            content=:content,
            topic=:topic,
            level=:level,
            ans_a=:ans_a,
            ans_b=:ans_b,
            ans_c=:ans_c,
            ans_d=:ans_d,
            ans_correct=:ans_correct
        Where
            id = :id";
        
        $stmt = $this->conn->prepare($query);

        //sanitize
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->content = htmlspecialchars(strip_tags($this->content));
        $this->topic = htmlspecialchars(strip_tags($this->topic));
        $this->level = htmlspecialchars(strip_tags($this->level));
        $this->ans_a = htmlspecialchars(strip_tags($this->ans_a));
        $this->ans_b = htmlspecialchars(strip_tags($this->ans_b));
        $this->ans_c = htmlspecialchars(strip_tags($this->ans_c));
        $this->ans_d = htmlspecialchars(strip_tags($this->ans_d));
        $this->ans_correct = htmlspecialchars(strip_tags($this->ans_correct));

        //bind para
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":content", $this->content);
        $stmt->bindParam(":topic", $this->topic);
        $stmt->bindParam(":level", $this->level);
        $stmt->bindParam(":ans_a", $this->ans_a);
        $stmt->bindParam(":ans_b", $this->ans_b);
        $stmt->bindParam(":ans_c", $this->ans_c);
        $stmt->bindParam(":ans_d", $this->ans_d);
        $stmt->bindParam(":ans_correct", $this->ans_correct);


        if($stmt->execute()){
            return true;
        }
        return false;
    }
    function delete(){
        $query = "Delete From Questions 
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