
<?php

  include_once "header.php";
  $session_value=(isset($_SESSION))?$_SESSION['id']:''; ?>
    
    
      <div class="container-fluid text-center mt-2" >
          <h4 id="topic-name">  Topic name </h1>
    </div>

    
        <div class="shadow justify-content-center d-flex justify-content-center">
            <form action="/action_page.php" class="my-3 shadow p-4" id="test-form">
                
<!--             
            <label style="display:inline;" for="cars">Question : I can't find my keys. I don't know where ____ are. <br>
                 B. It<br>
                 C. They<br>
                 D. Him<br>
                 A. Him<br>
                Choose your answer:
            </label>
                <label for="cars">choose your answer </label>
                <select id="cars" name="cars">
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                </select>
                <hr> -->


                <!-- <input type="submit"> -->
            </form>

        </div>

     <?php
     include_once "footer.php"
     ?>

    <script type="text/javascript">
        var myvar='<?php echo $session_value;?>';
    </script>
    <script src="random_test.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</body>
</html>