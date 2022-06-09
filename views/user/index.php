<?php
include_once "header.php";

if (!empty($_SESSION)) {
  $name =  "Hello, " . $_SESSION["name"];
} else {
  $name = "Test-taking website";
}
?>
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
  <?php include_once "footer.php"?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>