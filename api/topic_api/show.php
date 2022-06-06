<?php
    header('Access-Allow-Control-Origin:*');
    header('Content-Type: application/json');
    include_once "../../config/db.php";
    include_once "../../models/topic.php";

    $db = new db();
    $conn = $db->connect();


    $topic = new Topic($conn);
    $topic->id =  strpos($_SERVER["REQUEST_URI"],'?') ? intval($_GET['id']) : 0; 
    $topic->show_by_id();
    
    
    if($topic != null){
        // create array
        $topic_item = array(
            "id" =>  $topic->id,
            "name" => $topic->name
           
        );
      
        #http_response_code(200);
        echo json_encode($topic);
    }
      
    else{
        #http_response_code(404);
        echo json_encode("topic not found.");
    }
?>