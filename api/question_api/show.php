<?php
    header('Access-Allow-Control-Origin:*');
    header('Content-Type: application/json');
    include_once "../../config/db.php";
    include_once "../../models/question.php";

    $db = new db();
    $conn = $db->connect();


    $question = new Question($conn);
    $question->id =  strpos($_SERVER["REQUEST_URI"],'?') ? intval($_GET['id']) : 0; 
    $question->show_by_id();
    
    
    if($question != null){
        // create array
        $question_item = array(
            "id" =>  $question->id,
            "content" => $question->content,
            "topic" => $question->topic,
            "level" => $question->level,
            "ans_a" => $question->ans_a,
            "ans_b" => $question->ans_b,
            "ans_c" => $question->ans_c,
            "ans_d" => $question->ans_d,
            "ans_correct" => $question->ans_correct
        );
      
        http_response_code(200);
        #echo json_encode($question);
    }
      
    else{
        http_response_code(404);
        #echo json_encode("question not found.");
    }
?>