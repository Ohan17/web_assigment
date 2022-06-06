<?php 
session_start();
$session_value=(isset($_SESSION))?$_SESSION['id']:''; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">



</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Brand</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-5">
              <li class="nav-item me-5">
                <a class="nav-link " aria-current="page" href="#"><i class="bi bi-house-door"></i>Home</a>
              </li>
              
              <li class="nav-item dropdown me-5">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-bar-chart"></i>
                        Level
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Level 1</a></li>
                  <li><a class="dropdown-item" href="#">Level 2</a></li>
                  <li><a class="dropdown-item" href="#">Level 3</a></li>
                </ul>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link " aria-current="page" href="#"><i class="bi bi-door-open"></i>
                Login</a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link " aria-current="page" href="#"><i class="bi bi-clock-history"></i>
                    Test history</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search topic" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <div class="container-fluid text-center mt-2" >
          <h4 id="topic-name">  Topic name </h1>
    </div>

    
        <div style="" class="shadow justify-content-center d-flex justify-content-center">
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

          <!-- Footer -->
    <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4">
        <!-- Facebook -->
        

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="bi bi-facebook"></i></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="bi bi-instagram"></i></i
        ></a>
        </section>
        <!-- Section: Social media -->

        <!-- Section: Form -->
        <section class="">
        <form action="">
            <!--Grid row-->
    

        <!-- Section: Text -->
        <section class="mb-4">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
            repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
            eum harum corrupti dicta, aliquam sequi voluptate quas.
        </p>
        </section>
        <!-- Section: Text -->

        <!-- Section: Links -->
        <section class="">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled mb-0">
                <li>
                <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                <a href="#!" class="text-white">Link 4</a>
                </li>
            </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled mb-0">
                <li>
                <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                <a href="#!" class="text-white">Link 4</a>
                </li>
            </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled mb-0">
                <li>
                <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                <a href="#!" class="text-white">Link 4</a>
                </li>
            </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled mb-0">
                <li>
                <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                <a href="#!" class="text-white">Link 4</a>
                </li>
            </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
        </section>
        <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" >Hieu dao</a>
    </div>
    <!-- Copyright -->
    </footer>
<!-- Footer -->


    <script type="text/javascript">
        var myvar='<?php echo $session_value;?>';
    </script>
    <script src="test.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</body>
</html>