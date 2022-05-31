<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    header("Access-Control-Allow-Method: POST");
    header("Access-Control-Allow-Header: Access-Control-Allow-Header, Content-Type, Access-Control-Allow-Method, Authorization, X-Requested-With");

    include_once "../../config/db.php";
    include_once "../../models/question.php";

    $db = new db();
    $conn = $db->connect();
   
    $question = new Question($conn);
    $data = json_decode(file_get_contents("php://input"));
    var_dump($data);
    #$question->id = $data->id;
    $question->content = $data->content;
    $question->topic = $data->topic;
    $question->level = $data->level;
    $question->ans_a = $data->ans_a;
    $question->ans_b = $data->ans_b;
    $question->ans_c = $data->ans_c;
    $question->ans_d = $data->ans_d;
    $question->ans_correct = $data->ans_correct;

    // if ($question->create()){
    //     echo "creaet-success";
    // }
    // else{
    //     echo "cant creaetet";
    // }

?>