<?php 
    class db{
        public $servername = "localhost";
        public $username = "root";
        public $password = "";
        public function connect(){
            try {
                $conn = new PDO("mysql:host=$this->servername;dbname=rest_web_assigment", $this->username, $this->password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                #echo "Connected successfully->db.php\n";
             
                } catch(PDOException $e) {
                   # "Connection failed: " . $e->getMessage();
                }

            return $conn;
        }
    }
    


?>