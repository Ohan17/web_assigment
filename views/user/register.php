<?php


    session_start();;
    include_once "../../config/db.php";
    include_once "../../models/user.php";

    $db = new db();
    $conn = $db->connect();
    
    $query = "Insert Into Users Set 
    name=:name,
    password=:password,
    privillege=:privillege";
    
    $stmt = $conn->prepare($query);

    //sanitize
  $name = htmlspecialchars(strip_tags( $_POST["name"]));
  $password = htmlspecialchars(strip_tags($_POST["password"]));
    $privillege = htmlspecialchars(strip_tags("3"));
    

    //bind para
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":privillege", $privillege);
    

$stmt->execute();
  $_SESSION["id"]  = $conn->lastInsertId();
  $_SESSION["name"]  = $name;
  $_SESSION["privillege"]  = $privillege;
 
  header("Location: http://localhost/views/user/index.php");

   
        ?>

    