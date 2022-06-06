<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    header("Access-Control-Allow-Method: POST");
    header("Access-Control-Allow-Header: Access-Control-Allow-Header, Content-Type, Access-Control-Allow-Method, Authorization, X-Requested-With");

    include_once "../../config/db.php";
    include_once "../../models/taken_test.php";

    $db = new db();
    $conn = $db->connect();
   
    $taken_test = new Taken_test($conn);
    $data = json_decode(file_get_contents("php://input"));
    
    #$topic->id = $data->id;
    $taken_test->topic = $data->topic;
    $taken_test->score = $data->score;
    $taken_test->userId = $data->userId;


    if ($taken_test->create()){
        echo "creaet-success";
    }
    else{
        echo "cant creaetet";
    }

?>