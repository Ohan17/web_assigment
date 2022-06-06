<?php
    header('Access-Allow-Control-Origin:*');
    header('Content-Type: application/json');
    include_once "../../config/db.php";
    include_once "../../models/topic.php";

    $db = new db();
    $conn = $db->connect();
   
    $topic = new Topic($conn);
    $topic = $topic->read();

    $rows = $topic->rowCount();
    if ($rows>0){
        $topic_list = [];
        $topic_list['topics'] = [];
        while($rows = $topic->fetchObject()){
           # echo json_encode($rows);
            array_push($topic_list['topics'], $rows);
        }
    }
    #var_dump($_SERVER) ;
  
     echo json_encode($topic_list);

   # var_dump( $topic->fetchAll(PDO::FETCH_ASSOC),$topic->rowCount());
?>