<?php 
include_once "header.php";
$session_value=(isset($_SESSION))?$_SESSION['id']:''; ?>

    <div class="container-fluid text-center mt-2" >
          <h4 id="topic-name">  Topic name </h1>
    </div>

    
        <div  class="shadow justify-content-center d-flex justify-content-center">
            <form action="/action_page.php" class="my-3 shadow p-4" id="test-form">
                

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