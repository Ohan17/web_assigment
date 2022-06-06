<?php
    header("Access-Control-Allow-Origin: *");
    // header("Access-Control-Allow-Credentials : true");

    header("Content-Type: application/json");
    header("Access-Control-Allow-Method: POST");
    header("Access-Control-Allow-Header: Access-Control-Allow-Header, Content-Type, Access-Control-Allow-Method, Authorization, X-Requested-With");

    include_once "../../config/db.php";
    include_once "../../models/topic.php";

    $db = new db();
    $conn = $db->connect();
   
    $topic = new Topic($conn);
    $data = json_decode(file_get_contents("php://input"));
    $topic->id = $data->id;
    
    if ($topic->delete()){
       # echo "delete-success";
    }
    else{
       # echo "cant delte";
    }

?>