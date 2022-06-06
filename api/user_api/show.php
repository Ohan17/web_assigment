<?php
    header('Access-Allow-Control-Origin:*');
    header('Content-Type: application/json');
    include_once "../../config/db.php";
    include_once "../../models/user.php";

    $db = new db();
    $conn = $db->connect();


    $user = new User($conn);
    $user->id =  strpos($_SERVER["REQUEST_URI"],'?') ? intval($_GET['id']) : 0; 
  

    $user->show_by_id();

    if($user != null){
        // create array
        $user_item = array(
            "id" =>  $user->id,
            "name" => $user->name,
            "password" => $user->password,
            "privillege" => $user->privillege,
            
        );
      
        http_response_code(200);
        echo json_encode($user);
    }
      
    else{
        http_response_code(404);
         json_encode("user not found.");
    }
?>