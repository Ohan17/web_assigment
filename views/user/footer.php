
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->


        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-facebook"></i></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-instagram"></i></i></a>
      </section>
      <!-- Section: Social media -->

      <!-- Section: Form -->
      
     
          <!--Grid row-->


       

          <!-- Section: Links -->
          <section class="">
            <!--Grid row-->
            <div class="row">
             
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white">Hieu dao</a>
    </div>
    <!-- Copyright -->
  </footer>
  <script >
     //console.log(document.getElementById("search"))
              document.getElementById("search").onkeyup =  function(){
               let string = (document.getElementById("search").value);
               
               
               let result_search = document.getElementById("result-table");
               console.log(result_search);
                
               if (string == ""){
                 console.log(1)
                  result_search.setAttribute("style","display:none")
                }
                else{
                  console.log(2)
                  result_search.setAttribute("style","display:block")
                }
               
               
               
                fetch("http://localhost/api/topic_api/read_by_name.php?name="+string)
               .then(res=>res.json())
               .then(data=>{
                 let topics=data["topics"];
                 console.log(topics)
                 result_search.replaceChildren()
                 if (topics.length>0){
                  for( let i = 0; i<topics.length;i++ ){
                   let li = document.createElement('li')
                   li.innerHTML = `<a href="http://localhost/views/user/test_level${topics[i]["level"]}.php">${topics[i]["name"]} <\a>`;
                   result_search.appendChild(li)
                 }
                if (topics.length ==0){
                  result_search.setAttribute("style","display:none")
                }
                 }
                
               }).then(e=>{})

              }
             
  </script>
