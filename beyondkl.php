<?php include('admin/functions.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>KL The Guide - Beyond KL</title>

  <meta name="description"
    content="Beyond KL is the best KL guide for discovering the city beyond KL's everyday destinations.">
  <meta content="" name="keywords">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.kltheguide.com.my/beyondkl.php" />
  <meta property="og:title" content="KL The Guide - Beyond KL" />
  <meta property="og:description"
    content="Beyond KL is the best KL guide for discovering the city beyond KL's everyday destinations." />
  <meta property="og:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://www.kltheguide.com.my/beyondkl.php" />
  <meta property="twitter:title" content="KL The Guide - Beyond KL" />
  <meta property="twitter:description"
    content="Beyond KL is the best KL guide for discovering the city beyond KL's everyday destinations." />
  <meta property="twitter:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg" />



  <?php include 'header.php'; ?>

</head>

<body>

  <?php include 'nav.php'; ?>



  <main id="beyondkl">



    <br>


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4  my-5 d-flex justify-content-center">

          <li class="nav-item col-4 col-lg">
            <a class="nav-link beyond1" id="tab-1-link" href="#tab-1" data-bs-toggle="tab" data-bs-target="#tab-1">
              <!-- <img src="assets/img/recommendation/complete web icons-01.png" class="img-fluid" alt=""> -->
              <h4 class="text-center">Islands</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-4 col-lg ">
            <a class="nav-link beyond2" id="tab-2-link" data-bs-toggle="tab" href="#tab-2" data-bs-target="#tab-2">
              <!-- <img src="assets/img/recommendation/3.png" class="img-fluid" alt=""> -->
              <h4 class="text-center">Hill Station</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-4 col-lg">
            <a class="nav-link beyond3" id="tab-3-link" data-bs-toggle="tab" href="#tab-3" data-bs-target="#tab-3">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center">Waterfall</h4>
            </a>
          </li><!-- End Tab 3 Nav -->

          <li class="nav-item col-4 col-lg">
            <a class="nav-link beyond4" id="tab-4-link" data-bs-toggle="tab" href="#tab-4" data-bs-target="#tab-4">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center">Hiking</h4>
            </a>
          </li><!-- End Tab 4 Nav -->

          <li class="nav-item col-4 col-lg">
            <a class="nav-link beyond5" id="tab-5-link" data-bs-toggle="tab" href="#tab-5" data-bs-target="#tab-5">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center">Extreme Sports</h4>
            </a>
          </li><!-- End Tab 5 Nav -->
        </ul>

        <div class="tab-content">

          <div class="tab-pane" id="tab-1">

            <div class="row gy-10 mb-3">
              <div class="col-12 text-center">
                <h3 class="">Islands</h3>

                </p>
                <hr>
              </div>

            </div>

            <?php

            $query = "SELECT * FROM beyondkl_i ";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($counter % 2 != 0) {
                ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-2 ">
                    <h3>
                      <?php echo urldecode($row['beyondkl_i_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['beyondkl_i_content']) ?>
                    </p>


                    </p>
                    <iframe class="embed-responsive" src="<?php echo urldecode($row['beyondkl_i_locationurl']) ?>"
                      style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                  </div>
                  <div class="col-md-4 order-1  text-center">
                    <img src="assets/img/beyondkl/i/<?php echo $row['beyondkl_i_image'] ?>"
                      alt="<?php echo urldecode($row['beyondkl_i_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>

              <?php } else { ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-md-1 order-2">
                    <h3>
                      <?php echo urldecode($row['beyondkl_i_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['beyondkl_i_content']) ?>
                    </p>


                    </p>
                    <iframe class="embed-responsive" src="<?php echo urldecode($row['beyondkl_i_locationurl']) ?>"
                      style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                  </div>
                  <div class="col-md-4 order-md-2 order-1 text-center">
                    <img src="assets/img/beyondkl/i/<?php echo $row['beyondkl_i_image'] ?>"
                      alt="<?php echo urldecode($row['beyondkl_i_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
              <?php }
              ?>


            <?php
            $counter++;
            }
            ?>

          </div><!-- End Tab Content 1 -->



          <div class="tab-pane" id="tab-2">

            <div class="row gy-10 mb-3">
              <div class="col-12 text-center">
                <h3>Hill Station</h3>

                </p>
              </div>
              <hr>

            </div>

            <?php

            $query = "SELECT * FROM beyondkl_hs ";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($counter % 2 != 0) {
                ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-2 ">
                    <h3>
                      <?php echo urldecode($row['beyondkl_hs_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['beyondkl_hs_content']) ?>
                    </p>


                    </p>
                    <iframe class="embed-responsive" src="<?php echo urldecode($row['beyondkl_hs_locationurl']) ?>"
                      style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                  </div>
                  <div class="col-md-4 order-1  text-center">
                    <img src="assets/img/beyondkl/hs/<?php echo $row['beyondkl_hs_image'] ?>"
                      alt="<?php echo urldecode($row['beyondkl_hs_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>

              <?php } else { ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-md-1 order-2">
                    <h3>
                      <?php echo urldecode($row['beyondkl_hs_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['beyondkl_hs_content']) ?>
                    </p>


                    </p>
                    <iframe class="embed-responsive" src="<?php echo urldecode($row['beyondkl_hs_locationurl']) ?>"
                      style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                  </div>
                  <div class="col-md-4 order-md-2 order-1 text-center">
                    <img src="assets/img/beyondkl/hs/<?php echo $row['beyondkl_hs_image'] ?>"
                      alt="<?php echo urldecode($row['beyondkl_hs_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
              <?php }
              ?>


            <?php
            $counter++;
            }
            ?>

          </div><!-- End Tab Content 2 -->


          <div class="tab-pane" id="tab-3">

            <div class="row gy-10 mb-3">
              <div class="col-12 text-center">
                <h3>Waterfall</h3>

                </p>
              </div>
              <hr>

            </div>

            <?php

            $query = "SELECT * FROM beyondkl_w ";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($counter % 2 != 0) {
                ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-2 ">
                    <h3>
                      <?php echo urldecode($row['beyondkl_w_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['beyondkl_w_content']) ?>
                    </p>


                    </p>
                    <iframe class="embed-responsive" src="<?php echo urldecode($row['beyondkl_w_locationurl']) ?>"
                      style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                  </div>
                  <div class="col-md-4 order-1  text-center">
                    <img src="assets/img/beyondkl/w/<?php echo urldecode($row['beyondkl_w_image']) ?>"
                      alt="<?php echo urldecode($row['beyondkl_w_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>

              <?php } else { ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-md-1 order-2">
                    <h3>
                      <?php echo urldecode($row['beyondkl_w_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['beyondkl_w_content']) ?>
                    </p>


                    </p>
                    <iframe class="embed-responsive" src="<?php echo urldecode($row['beyondkl_w_locationurl']) ?>"
                      style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                  </div>
                  <div class="col-md-4 order-md-2 order-1 text-center">
                    <img src="assets/img/beyondkl/w/<?php echo $row['beyondkl_w_image'] ?>"
                      alt="<?php echo urldecode($row['beyondkl_w_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
              <?php }
              ?>


            <?php
            $counter++;
            }
            ?>

          </div><!-- End Tab Content 3 -->



          <div class="tab-pane" id="tab-4">

            <div class="row gy-10 mb-3">
              <div class="col-12 text-center">
                <h3>Hiking</h3>

                </p>
              </div>
              <hr>

            </div>

            <?php

            $query = "SELECT * FROM beyondkl_h ";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($counter % 2 != 0) {
                ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-2 ">
                    <h3>
                      <?php echo urldecode($row['beyondkl_h_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['beyondkl_h_content']) ?>
                    </p>


                    </p>
                    <iframe class="embed-responsive" src="<?php echo urldecode($row['beyondkl_h_locationurl']) ?>"
                      style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                  </div>
                  <div class="col-md-4 order-1  text-center">
                    <img src="assets/img/beyondkl/h/<?php echo $row['beyondkl_h_image'] ?>"
                      alt="<?php echo urldecode($row['beyondkl_h_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>

              <?php } else { ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-md-1 order-2">
                    <h3>
                      <?php echo urldecode($row['beyondkl_h_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['beyondkl_h_content']) ?>
                    </p>


                    </p>
                    <iframe class="embed-responsive" src="<?php echo urldecode($row['beyondkl_h_locationurl']) ?>"
                      style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                  </div>
                  <div class="col-md-4 order-md-2 order-1 text-center">
                    <img src="assets/img/beyondkl/h/<?php echo $row['beyondkl_h_image'] ?>"
                      alt="<?php echo urldecode($row['beyondkl_h_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
              <?php }
              ?>


            <?php
            $counter++;
            }
            ?>

          </div><!-- End Tab Content 4 -->


          <div class="tab-pane" id="tab-5">

            <div class="row gy-10 mb-3">
              <div class="col-12 text-center">
                <h3>Extreme Sports</h3>

                </p>
              </div>
              <hr>

            </div>

            <?php

            $query = "SELECT * FROM beyondkl_es ";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($counter % 2 != 0) {
                ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-2 ">
                    <h3>
                      <?php echo urldecode($row['beyondkl_es_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['beyondkl_es_content']) ?>
                    </p>


                    </p>
                    <iframe class="embed-responsive" src="<?php echo urldecode($row['beyondkl_es_locationurl']) ?>"
                      style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                  </div>
                  <div class="col-md-4 order-1  text-center">
                    <img src="assets/img/beyondkl/es/<?php echo $row['beyondkl_es_image'] ?>"
                      alt="<?php echo urldecode($row['beyondkl_es_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>

              <?php } else { ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-md-1 order-2">
                    <h3>
                      <?php echo urldecode($row['beyondkl_es_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['beyondkl_es_content']) ?>
                    </p>


                    </p>
                    <iframe class="embed-responsive" src="<?php echo urldecode($row['beyondkl_es_locationurl']) ?>"
                      style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                  </div>
                  <div class="col-md-4 order-md-2 order-1 text-center">
                    <img src="assets/img/beyondkl/es/<?php echo $row['beyondkl_es_image'] ?>"
                      alt="<?php echo urldecode($row['beyondkl_es_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
              <?php }
              ?>


            <?php
            $counter++;
            }
            ?>

          </div><!-- End Tab Content 5 -->



        </div>

    </section><!-- End Features Section -->





  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footer.php'; ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $(document).ready(function () {

      $(window.location.hash).addClass('active show');

      $(window.location.hash + "-link").addClass('active show');


    });
    window.addEventListener(
      "hashchange",
      () => {
        let text = window.location.hash;
        let result = text.includes("tab");
        if (result) {

          location.reload()

          //  block of code to be executed if the condition is true
        }
      },
      false
    );
  </script>
</body>

</html>