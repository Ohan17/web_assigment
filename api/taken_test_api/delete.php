<?php
    header("Access-Control-Allow-Origin: *");
    // header("Access-Control-Allow-Credentials : true");

    header("Content-Type: application/json");
    header("Access-Control-Allow-Method: POST");
    header("Access-Control-Allow-Header: Access-Control-Allow-Header, Content-Type, Access-Control-Allow-Method, Authorization, X-Requested-With");

    include_once "../../config/db.php";
    include_once "../../models/taken_test.php";

    $db = new db();
    $conn = $db->connect();
   
    $taken_test = new Taken_test($conn);
    $data = json_decode(file_get_contents("php://input"));
    $taken_test->id = $data->id;
    
    if ($question->delete()){
       # echo "delete-success";
    }
    else{
       # echo "cant delte";
    }

?>