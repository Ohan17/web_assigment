<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    header("Access-Control-Allow-Method: POST");
    header("Access-Control-Allow-Header: Access-Control-Allow-Header, Content-Type, Access-Control-Allow-Method, Authorization, X-Requested-With");

    include_once "../../config/db.php";
    include_once "../../models/user.php";

    $db = new db();
    $conn = $db->connect();
   
    $user = new User($conn);
    $data = json_decode(file_get_contents("php://input"));
    $user->id = $data->id;
    
    if ($user->delete()){
        #echo "delete-success";
    }
    else{
        #echo "cant delte";
    }

?>