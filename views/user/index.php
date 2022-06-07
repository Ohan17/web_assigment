<?php
session_start();
if (!empty($_SESSION)) {
  $name =  "Hello, " . $_SESSION["name"];
} else {
  $name = "Test-taking websit";
}
?>
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
<style>
  html {
    overflow-x: hidden;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="../home.php"><?php echo $name ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-5">
          <li class="nav-item me-5">
            <a class="nav-link active" aria-current="page" href="../home.php"><i class="bi bi-house-door"></i>Home</a>
          </li>

          <li class="nav-item dropdown me-5">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-bar-chart"></i>
              Level
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="test_level1.php">Level 1</a></li>
              <li><a class="dropdown-item" href="test_level2.php">Level 2</a></li>
              <li><a class="dropdown-item" href="test_level3.php">Level 3</a></li>
            </ul>
          </li>
          <li class="nav-item me-5">
            <?php if (empty($_SESSION)) { ?>
              <a class="nav-link active" aria-current="page" href="login.html"><i class="bi bi-door-open"></i>
                Login
              </a>
            <?php } else { ?>
              <a class="nav-link active" aria-current="page" href="../logout.php"><i class="bi bi-door-open"></i>
                Logout
              </a>
            <?php }  ?>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link active" aria-current="page" href="test_history.php"><i class="bi bi-clock-history"></i>
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

  <div class="row d-flex justify-content-center shadow-sm">
    <!--Grid column-->
    <div id="" class="col-md-6 col-lg-5 pb-3">
      <h1 class="font-weight-bold mb-4">Prepare for your English exam</h1>
      <p>On test-english.com you will find lots of free practice tests and materials to help you improve your English skills and be more prepared for your English exam:
        <strong> KEY (KET), PET, FCE, IELTS, TOEIC® and TOEFL iBT™.</strong>
        If you don't know your level, you can start by taking a Level Test.
      </p>
      <a href="random_test.php"> <button type="button" class="btn btn-outline-success">
          Take the test now<i class="bi bi-mortarboard"></i>
        </button></a>

    </div>
  </div>

  <div class="text-center pb-2 mt-4">
    <h2>What level you want to take?</h2>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col align-items-stretch">
      <div class="card">
        <img src="../../images/begin.jpeg" class="card-img-top" alt="..." style="width: 300px; height: 300px;">
        <div class="card-body">
          <h5 class="card-title">Level Beginner</h5>
          <p class="card-text">This will contain all the test with beginer level for you to try </p>
          <form action="test_level1.php">
            <button type="submit" class="btn btn-outline-success">
              See more</i>
            </button>
          </form>
        </div>
      </div>
    </div>
    <div class="col align-items-stretch">
      <div class="card">
        <img src="../../images/inter3.jpeg" class="card-img-top" alt="..." style="width: 300px; height: 300px; object-fit: cover; object-position: center center;">
        <div class="card-body">
          <h5 class="card-title">Level Intermediate</h5>
          <p class="card-text">This will contain all the test with intermediate level for you to try </p>
          <form action="test_level2.php">
            <button type="submit" class="btn btn-outline-warning">
              See more</i>
            </button>
          </form>
        </div>
      </div>
    </div>

    <div class="col align-items-stretch">
      <div class="card">
        <img src="../../images/advance1.jpeg" class="card-img-top" alt="..." style="width: 300px; height: 300px;">
        <div class="card-body">
          <h5 class="card-title">Level Advance</h5>
          <p class="card-text">This will contain all the test with advance level for you to try </p>
          <form action="test_level3.php">
            <button type="submit" class="btn btn-outline-danger">
              See more</i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
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
      <a class="text-white">Hieu dao</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>