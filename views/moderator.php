<?php

include "user/header.php"
?>

                
<link rel="stylesheet" href="moderator.css">
  
  <ul class="nav nav-tabs">
    <li ><a id="tab1" data-toggle="tab" href="#menu1">Question</a></li>
    <li><a id="tab2"data-toggle="tab" href="#menu2" >Topic </a></li>
    
    <li>
    
    </li>
    
    
  </ul>

  <button onclick="topFunction()" id="myBtn" title="Go to top" style="" class="btn btn-outline-secondary">^</button>

  <div class="tab-content">
    
    <div id="menu1" class="tab-pane fade">
   
    <!-- <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
   -->
   <div class="col-10 mt-5 container" id="body">
                
                <table  id="table" style="width:100% ;">
                    
                    <h1 class="text-center">Questions
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
            </div>
    </div>


    <div id="menu2" class="tab-pane fade">
    <div class="col-10 mt-5 container" id="body2">
                
                <table id="table2" style="width:100% ;">
                    
                    <h1 class="text-center" >Topic
                        <button id="add-btn2" class="btn btn-outline-secondary ml-5" style="height:30px ; padding-bottom: 30px;"> 
                            <i class="bi bi-plus-lg"></i>
                            Add Topic 
                        </button>
                    </h1>
                    
                     <thead >
                         <tr>
                             <td class="text-left">ID</td>
                             <td class="text-left">Content</td>
                             <td class="text-right " >Operation
<<<<<<< HEAD
                               
=======
                                 
>>>>>>> 204614c3e996a903c205da3587accedff77c7e62
                             </td>
                         </tr>
                     </thead>
                </table>
            </div>
    </div>
    </div>
   

  </div>
</div>



<?php include "user/footer.php"?>


<script src="moderator.js"></script>
<script src="moderator2.js"></script>