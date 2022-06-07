<?php
    header('Access-Allow-Control-Origin:*');
    header('Content-Type: application/json');
    include_once "../../config/db.php";
    include_once "../../models/taken_test.php";

    $db = new db();
    $conn = $db->connect();
   
    $taken_test = new Taken_test($conn);
    $taken_test->userId =  strpos($_SERVER["REQUEST_URI"],'?') ? intval($_GET['userId']) : 0; 
   
    $taken_test = $taken_test->show_by_userID();
    
    $rows = $taken_test->rowCount();
    if ($rows>0){
        $taken_test_list = [];
        $taken_test_list['taken_tests'] = [];
        while($rows = $taken_test->fetchObject()){
            
            array_push($taken_test_list['taken_tests'], $rows);
        }
    }
    #var_dump($_SERVER) ;
  
    echo json_encode($taken_test_list);

   # var_dump( $question->fetchAll(PDO::FETCH_ASSOC),$question->rowCount());
?>