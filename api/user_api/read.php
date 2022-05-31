<?php
    header('Access-Allow-Control-Origin:*');
    header('Content-Type: application/json');
    
    include_once "../../config/db.php";
    include_once "../../models/user.php";


    $db = new db();
    $conn = $db->connect();
   
    $users = new User($conn);
    $users = $users->read();

    $rows = $users->rowCount();
    if ($rows>0){
        $users_list = [];
        $users_list['users'] = [];
        while($rows = $users->fetchObject()){
           # echo json_encode($rows);
            array_push($users_list['users'], $rows);
        }
    }
    #var_dump($_SERVER) ;
  
    echo json_encode($users_list);

   # var_dump( $users->fetchAll(PDO::FETCH_ASSOC),$users->rowCount());
?>