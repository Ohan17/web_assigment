<?php
    header('Access-Allow-Control-Origin:*');
    header('Content-Type: application/json');
    include_once "../../config/db.php";
    include_once "../../models/question.php";

    $db = new db();
    $conn = $db->connect();
   
    $question = new Question($conn);
    $question->topic =  strpos($_SERVER["REQUEST_URI"],'?') ? intval($_GET['topic']) : 0; 
   
    $question = $question->show_by_topic();
    
    $rows = $question->rowCount();
    if ($rows>0){
        $question_list = [];
        $question_list['questions'] = [];
        while($rows = $question->fetchObject()){
            
            array_push($question_list['questions'], $rows);
        }
    }
    #var_dump($_SERVER) ;
  
    echo json_encode($question_list);

   # var_dump( $question->fetchAll(PDO::FETCH_ASSOC),$question->rowCount());
?>