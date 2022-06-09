
<?php 
session_start();
 if (empty($_SESSION) or $_SESSION["privillege"] !=1){
    $message = "You cant access that page";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location: index.php" );
    exit;
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Page</title>
    <link rel="stylesheet" href="admin_question.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</head>
<body>
    <div class="">
        <div class="container-fluid d-block d-md-flex " id="header">
           
            <div id="brand" class="text-center"  >
                <h1 id="site-name" >
                    <a href="/admin_page.php">  Admin site</a> 
                </h1>
            </div>
            
            <div id="user" class="text-center"  >
                Wellcome <strong> Admin <?php echo $_SESSION['name']?></strong>, <a href="logout.php">logout</a>
            </div>
            
       </div>
        <div  id="main" class="container-fluid"> 
            <div class="row"> <div id="content" class="col-4 mr-3 mt-5">
                <h1> Models</h1>
                <div class="mb-4 mt-3 " id="authorization">
                    <table>
                        <caption>
                            Authentication and Authorization
                        </caption>
                        <tbody>
                            <tr>
                                <th><a href="./admin_user.php">Users</a></th>
                                
                                
                            </tr>
                           
                        </tbody>
                    </table>
                    
                </div>
                <div class="mb-4" id="web-models" >
                    
                    <table>
                        <caption >
                            Web models
                        </caption>
                        <tbody>
                            <tr>
                                <th><a href="admin_question.php" onclick="location.reload()" id="question">Questions</a></th>
                              
                                
                            </tr>
                            <tr>
                            <th><a href="admin_topic.php" onclick="location.reload()" id="topic">Topics</a></th>
                                
                                
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
            <div class="col-6 mt-5 container" id="body" style="width:60%">
                
                <table id="table" style="width:100% ;">
                    
                    <h1 >Questions
                        <button id="add-btn" class="btn btn-outline-secondary ml-5" style="height:30px ; padding-bottom: 30px;"> 
                            <i class="bi bi-plus-lg"></i>
                            Add question 
                        </button>
                    </h1>
                    
                     <thead >
                         <tr>
                             <td>ID</td>
                             <td>Content</td>
                             <td colspan="2">Operation</td>
                         </tr>
                     </thead>
                </table>
            </div></div>
            
        </div>
       

       
    </div>
    
    
    
    <script src="admin_question.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>