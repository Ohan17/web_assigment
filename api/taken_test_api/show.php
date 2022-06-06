<?php
    header('Access-Allow-Control-Origin:*');
    header('Content-Type: application/json');
    include_once "../../config/db.php";
    include_once "../../models/taken_test.php";

    $db = new db();
    $conn = $db->connect();


    $taken_test = new Taken_test($conn);
    $taken_test->id =  strpos($_SERVER["REQUEST_URI"],'?') ? intval($_GET['id']) : 0; 
    $taken_test->show_by_id();
    
    
    if($taken_test != null){
        // create array
        $taken_test = array(
            "topic" =>  $taken_test->topic,
            "score" => $taken_test->score,
            "userId" => $taken_test->userId
           
        );
      
        #http_response_code(200);
        echo json_encode($taken_test);
    }
      
    else{
        #http_response_code(404);
        echo json_encode("taken_test not found.");
    }
?>