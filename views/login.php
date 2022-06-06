<?php 
    // var_dump($_POST);
    session_start();
    
    
    header('Access-Allow-Control-Origin:*');
    header('Content-Type: application/json');
    
    include_once "../config/db.php";
    include_once "../models/user.php";


    $db = new db();
    $conn = $db->connect();
   
    $users = new User($conn);
    $users = $users->read();

    $rows = $users->rowCount();
    if ($rows>0){
        $users_list = [];
        $users_list['users'] = [];
        while($rows = $users->fetchObject()){
             json_encode($rows);
            if ($_POST["uname"]==$rows->name && $_POST["psw"]==$rows->password)
            {
                $_SESSION["privillege"] = $rows->privillege;
                $_SESSION["name"] = $rows->name;
               
            }
        }
    }
   
    // var_dump($_SESSION["privillege"]);
   
    header("Location: http://localhost/views/admin_page.php");
    // var_dump($_SESSION["privillege"]);
   
    // var_dump ($users_list);



?>

