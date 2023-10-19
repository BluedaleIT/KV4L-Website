<?php include('admin/functions.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>KL The Guide - Medical Tourism</title>

  <meta name="description"
    content="This page contains the medical tourism locations located throughout Kuala Lumpur, Malaysia">
  <meta content="" name="keywords">

  <!-- Open Graph / Facebook -->
  <!-- <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.kltheguide.com.my/medical-tourism.php" />
  <meta property="og:title" content="KL The Guide - Medical Tourism" />
  <meta property="og:description"
    content="This page contains the medical tourism locations located throughout Kuala Lumpur, Malaysia" />
  <meta property="og:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg"> -->

  <!-- Twitter -->
  <!-- <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://www.kltheguide.com.my/medical-tourism.php" />
  <meta property="twitter:title" content="KL The Guide - Medical Tourism" />
  <meta property="twitter:description"
    content="This page contains the medical tourism locations located throughout Kuala Lumpur, Malaysia" />
  <meta property="twitter:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg" /> -->



  <?php include 'header.php'; ?>

</head>

<body>

  <?php include 'nav.php'; ?>



  <main id="medicaltourism">



    <br>

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4  my-5 d-flex">

          <li class="nav-item col-6 col-md-3 col-lg-3">
            <a class="nav-link mt1" id="tab-1-link" href="#tab-1" data-bs-toggle="tab" data-bs-target="#tab-1">
              <!-- <img src="assets/img/recommendation/complete web icons-01.png" class="img-fluid" alt=""> -->
              <h4>Healthcare</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-3 col-lg-3">
            <a class="nav-link mt2" id="tab-2-link" data-bs-toggle="tab" href="#tab-2" data-bs-target="#tab-2">
              <!-- <img src="assets/img/recommendation/3.png" class="img-fluid" alt=""> -->
              <h4>Dental</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-6 col-md-3 col-lg-3">
            <a class="nav-link mt3" id="tab-3-link" data-bs-toggle="tab" href="#tab-3" data-bs-target="#tab-3">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4>Dermatologist</h4>
            </a>
          </li><!-- End Tab 3 Nav -->

          <li class="nav-item col-6 col-md-3 col-lg-3">
            <a class="nav-link mt4" id="tab-4-link" data-bs-toggle="tab" href="#tab-4" data-bs-target="#tab-4">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4>Ophthalmologist</h4>
            </a>
          </li><!-- End Tab 3 Nav -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane" id="tab-1">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Healthcare</h3>


                </p>
              </div>

            </div>


            <!-- start item -->
            <!-- <div class="row gy-4">
              <div class="col-lg-8 order-2 ">
                <h3>Gleneagles, Kuala Lumpur
                </h3>
                <p>
                  Gleneagles Kuala Lumpur has become the country's preferred private health-care facility, much favoured
                  by both locals and foreigners. It is a subsidiary of Pantai Medical Centre Sdn Bhd, which is owned by
                  IHH Healthcare.
                </p>
                <p>Location:<a href="https://goo.gl/maps/kK4V3WhdFAAZw8S57">Block A & Block B, 286 & 288, Jalan Ampang,
                    Kampung Berembang, 50450 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</a>


                </p>
              </div>
              <div class="col-lg-4 order-1  text-center">
                <img src="assets/img/features-2.svg" alt="" class="img-fluid">
              </div>
            </div> -->
            <!-- item -->

            <?php

            $query = "SELECT * FROM medical_tourism WHERE medical_tourism_category='hc' ORDER BY medical_tourism_order DESC  ";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($counter % 2 != 0) {
                ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-2 ">
                    <h3>
                      <?php echo urldecode($row['medical_tourism_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['medical_tourism_content']) ?>
                    </p>
                    <p><b>Location :</b><a href=" <?php echo urldecode($row['medical_tourism_locationurl']) ?>"> <?php echo urldecode($row['medical_tourism_location']) ?></a>
                    </p>

                    <?php if ($row['medical_tourism_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['medical_tourism_hours'])); ?>
                      </p>
                    <?php } ?>
                    <?php if ($row['medical_tourism_phone']) { ?>

                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['medical_tourism_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-1  text-center align-self-center">
                    <img src="assets/img/medical_tourism/hc/<?php echo $row['medical_tourism_image'] ?>"
                      alt="<?php echo urldecode($row['medical_tourism_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <hr>
              <?php } else { ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-md-1 order-2">
                    <h3>
                      <?php echo urldecode($row['medical_tourism_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['medical_tourism_content']) ?>
                    </p>
                    <p><b>Location :</b><a href=" <?php echo urldecode($row['medical_tourism_locationurl']) ?>"> <?php echo urldecode($row['medical_tourism_location']) ?></a>
                    </p>
                    <?php if ($row['medical_tourism_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['medical_tourism_hours'])); ?>
                      </p>
                    <?php } ?>

                    <?php if ($row['medical_tourism_phone']) { ?>
                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['medical_tourism_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                    <img src="assets/img/medical_tourism/hc/<?php echo $row['medical_tourism_image'] ?>"
                      alt="<?php echo urldecode($row['medical_tourism_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <hr>
              <?php }
              ?>


            <?php
            $counter++;
            }
            ?>

          </div><!-- End Tab Content 2 -->

          <div class="tab-pane" id="tab-2">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Dental</h3>


                </p>
              </div>

            </div>


            <?php

            $query = "SELECT * FROM medical_tourism WHERE medical_tourism_category='dental' ORDER BY medical_tourism_order DESC  ";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($counter % 2 != 0) {
                ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-2 ">
                    <h3>
                      <?php echo urldecode($row['medical_tourism_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['medical_tourism_content']) ?>
                    </p>
                    <p><b>Location :</b><a href=" <?php echo urldecode($row['medical_tourism_locationurl']) ?>"> <?php echo urldecode($row['medical_tourism_location']) ?></a>
                    </p>

                    <?php if ($row['medical_tourism_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['medical_tourism_hours'])); ?>
                      </p>
                    <?php } ?>
                    <?php if ($row['medical_tourism_phone']) { ?>

                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['medical_tourism_phone'])); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-1  text-center align-self-center">
                    <img src="assets/img/medical_tourism/dtl/<?php echo $row['medical_tourism_image'] ?>"
                      alt="<?php echo urldecode($row['medical_tourism_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <hr>
              <?php } else { ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-md-1 order-2">
                    <h3>
                      <?php echo urldecode($row['medical_tourism_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['medical_tourism_content']) ?>
                    </p>
                    <p><b>Location :</b><a href=" <?php echo urldecode($row['medical_tourism_locationurl']) ?>"> <?php echo urldecode($row['medical_tourism_location']) ?></a>
                    </p>
                    <?php if ($row['medical_tourism_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['medical_tourism_hours'])); ?>
                      </p>
                    <?php } ?>

                    <?php if ($row['medical_tourism_phone']) { ?>
                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['medical_tourism_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                    <img src="assets/img/medical_tourism/dtl/<?php echo $row['medical_tourism_image'] ?>"
                      alt="<?php echo urldecode($row['medical_tourism_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <hr>
              <?php }
              ?>


            <?php
            $counter++;
            }
            ?>

          </div><!-- End Tab Content 2 -->
          <div class="tab-pane" id="tab-3">


            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Dermatologist</h3>


                </p>
              </div>

              <?php

              $query = "SELECT * FROM medical_tourism WHERE medical_tourism_category='der' ORDER BY medical_tourism_order DESC  ";
              $result = mysqli_query($db, $query);
              $counter = 1;
              while ($row = mysqli_fetch_assoc($result)) {
                if ($counter % 2 != 0) {
                  ?>
                  <div class="row gy-4 mb-5">

                    <div class="col-md-8 order-2 ">
                      <h3>
                        <?php echo urldecode($row['medical_tourism_title']) ?>
                      </h3>
                      <p>
                        <?php echo urldecode($row['medical_tourism_content']) ?>
                      </p>
                      <p><b>Location :</b><a href=" <?php echo urldecode($row['medical_tourism_locationurl']) ?>"> <?php echo urldecode($row['medical_tourism_location']) ?></a>
                      </p>

                      <?php if ($row['medical_tourism_hours']) { ?>
                        <p><b>Operation Hours :</b><br>
                          <?php echo str_replace("/", "<br>", urldecode($row['medical_tourism_hours'])); ?>
                        </p>
                      <?php } ?>
                      <?php if ($row['medical_tourism_phone']) { ?>

                        <p><b>Phone :</b><br>
                          <?php echo str_replace("/", "<br>", $row['medical_tourism_phone']); ?>
                        </p>
                      <?php } ?>

                    </div>
                    <div class="col-md-4 order-1  text-center align-self-center">
                      <img src="assets/img/medical_tourism/der/<?php echo $row['medical_tourism_image'] ?>"
                        alt="<?php echo urldecode($row['medical_tourism_title']) ?>" class="img-fluid" loading="lazy">
                    </div>
                  </div>
                  <hr>
                <?php } else { ?>
                  <div class="row gy-4 mb-5">

                    <div class="col-md-8 order-md-1 order-2">
                      <h3>
                        <?php echo urldecode($row['medical_tourism_title']) ?>
                      </h3>
                      <p>
                        <?php echo urldecode($row['medical_tourism_content']) ?>
                      </p>
                      <p><b>Location :</b><a href=" <?php echo urldecode($row['medical_tourism_locationurl']) ?>"> <?php echo urldecode($row['medical_tourism_location']) ?></a>
                      </p>
                      <?php if ($row['medical_tourism_hours']) { ?>
                        <p><b>Operation Hours :</b><br>
                          <?php echo str_replace("/", "<br>", urldecode($row['medical_tourism_hours'])); ?>
                        </p>
                      <?php } ?>

                      <?php if ($row['medical_tourism_phone']) { ?>
                        <p><b>Phone :</b><br>
                          <?php echo str_replace("/", "<br>", $row['medical_tourism_phone']); ?>
                        </p>
                      <?php } ?>

                    </div>
                    <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                      <img src="assets/img/medical_tourism/der/<?php echo $row['medical_tourism_image'] ?>"
                        alt="<?php echo urldecode($row['medical_tourism_title']) ?>" class="img-fluid" loading="lazy">
                    </div>
                  </div>
                  <hr>
                <?php }
                ?>


              <?php
              $counter++;
              }
              ?>




            </div>

          </div>


          <div class="tab-pane" id="tab-4">


            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Ophthalmologist</h3>


                </p>
              </div>

              <?php

              $query = "SELECT * FROM medical_tourism WHERE medical_tourism_category='oph' ORDER BY medical_tourism_order DESC  ";
              $result = mysqli_query($db, $query);
              $counter = 1;
              while ($row = mysqli_fetch_assoc($result)) {
                if ($counter % 2 != 0) {
                  ?>
                  <div class="row gy-4 mb-5">

                    <div class="col-md-8 order-2 ">
                      <h3>
                        <?php echo urldecode($row['medical_tourism_title']) ?>
                      </h3>
                      <p>
                        <?php echo urldecode($row['medical_tourism_content']) ?>
                      </p>
                      <p><b>Location :</b><a href=" <?php echo urldecode($row['medical_tourism_locationurl']) ?>"> <?php echo urldecode($row['medical_tourism_location']) ?></a>
                      </p>

                      <?php if ($row['medical_tourism_hours']) { ?>
                        <p><b>Operation Hours :</b><br>
                          <?php echo str_replace("/", "<br>", urldecode($row['medical_tourism_hours'])); ?>
                        </p>
                      <?php } ?>
                      <?php if ($row['medical_tourism_phone']) { ?>

                        <p><b>Phone :</b><br>
                          <?php echo str_replace("/", "<br>", $row['medical_tourism_phone']); ?>
                        </p>
                      <?php } ?>

                    </div>
                    <div class="col-md-4 order-1  text-center align-self-center">
                      <img src="assets/img/medical_tourism/oph/<?php echo $row['medical_tourism_image'] ?>"
                        alt="<?php echo urldecode($row['medical_tourism_title']) ?>" class="img-fluid" loading="lazy">
                    </div>
                  </div>
                  <hr>
                <?php } else { ?>
                  <div class="row gy-4 mb-5">

                    <div class="col-md-8 order-md-1 order-2">
                      <h3>
                        <?php echo urldecode($row['medical_tourism_title']) ?>
                      </h3>
                      <p>
                        <?php echo urldecode($row['medical_tourism_content']) ?>
                      </p>
                      <p><b>Location :</b><a href=" <?php echo urldecode($row['medical_tourism_locationurl']) ?>"> <?php echo urldecode($row['medical_tourism_location']) ?></a>
                      </p>
                      <?php if ($row['medical_tourism_hours']) { ?>
                        <p><b>Operation Hours :</b><br>
                          <?php echo str_replace("/", "<br>", urldecode($row['medical_tourism_hours'])); ?>
                        </p>
                      <?php } ?>

                      <?php if ($row['medical_tourism_phone']) { ?>
                        <p><b>Phone :</b><br>
                          <?php echo str_replace("/", "<br>", $row['medical_tourism_phone']); ?>
                        </p>
                      <?php } ?>

                    </div>
                    <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                      <img src="assets/img/medical_tourism/oph/<?php echo $row['medical_tourism_image'] ?>"
                        alt="<?php echo urldecode($row['medical_tourism_title']) ?>" class="img-fluid" loading="lazy">
                    </div>
                  </div>
                  <hr>
                <?php }
                ?>


              <?php
              $counter++;
              }
              ?>




            </div>

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