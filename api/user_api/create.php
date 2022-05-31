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
    #namevar_dump($data);
    #$user->id = $data->id;
    $user->name = $data->name;
    $user->password = $data->password;
    $user->privillege = $data->privillege;
   
    if ($user->create()){
        #echo "creaet-success";
    }
    else{
        #echo "cant creaetet";
    }

?>