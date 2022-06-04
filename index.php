
   <?php
   require_once "core/Application.php";
   #require_once __DIR__.'vendor/autoload.php';
   #use app\core\Application;
   $app = new Application();
   
   $app->router->get("/","index");
   
   $app->router->get("/admin_page",function(){
       include_once "./views/admin_page.html";
    
   });

  
   $app->run();
?>
