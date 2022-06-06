<?php
    header('Access-Allow-Control-Origin:*');
    header('Content-Type: application/json');
    include_once "../../config/db.php";
    include_once "../../models/topic.php";

    $db = new db();
    $conn = $db->connect();
   
    $topic = new Topic($conn);
    $topic->level =  strpos($_SERVER["REQUEST_URI"],'?') ? intval($_GET['level']) : 0; 
   
    $topic = $topic->show_by_level();
    
    $rows = $topic->rowCount();
    if ($rows>0){
        $topic_list = [];
        $topic_list['topics'] = [];
        while($rows = $topic->fetchObject()){
            
            array_push($topic_list['topics'], $rows);
        }
    }
    #var_dump($_SERVER) ;
  
    echo json_encode($topic_list);

   # var_dump( $question->fetchAll(PDO::FETCH_ASSOC),$question->rowCount());
?>