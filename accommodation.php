<?php include('admin/functions.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Klang Valley 4 Locals - Place To Stay</title>

  <meta name="description"
    content="The perfect guide for finding places to stay in Kuala Lumpur, a city that never sleeps. Browse listings of the best hotels, resorts, hostels and apartments in the capital of Malaysia.">

  <meta content="" name="keywords">


    <!-- Open Graph / Facebook -->
    <!-- <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.kltheguide.com.my/accommodation.php" />
  <meta property="og:title" content="KL The Guide - Place To Stay" />
  <meta property="og:description" content="The perfect guide for finding places to stay in Kuala Lumpur, a city that never sleeps. Browse listings of the best hotels, resorts, hostels and apartments in the capital of Malaysia." />
  <meta property="og:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg"> -->

  <!-- Twitter -->
  <!-- <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://www.kltheguide.com.my/accommodation.php" />
  <meta property="twitter:title" content="KL The Guide - Place To Stay" />
  <meta property="twitter:description" content="The perfect guide for finding places to stay in Kuala Lumpur, a city that never sleeps. Browse listings of the best hotels, resorts, hostels and apartments in the capital of Malaysia." />
  <meta property="twitter:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg" /> -->


  <?php include 'header.php'; ?>

</head>

<body>

  <?php include 'nav.php'; ?>



  <main id="placetostay">



    <br>


    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4 my-5 d-flex">

        <li class="nav-item col-4 col-lg">
            <a class="nav-link acco1" id="tab-1-link" href="#tab-1" data-bs-toggle="tab" data-bs-target="#tab-1">
              <!-- <img src="assets/img/recommendation/complete web icons-01.png" class="img-fluid" alt=""> -->
              <h4>Luxury Hotels</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-4 col-lg">
            <a class="nav-link acco2" id="tab-2-link" data-bs-toggle="tab" href="#tab-2" data-bs-target="#tab-2">
              <!-- <img src="assets/img/recommendation/3.png" class="img-fluid" alt=""> -->
              <h4>Budget Hotels</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-4 col-lg">
            <a class="nav-link acco3" id="tab-3-link" data-bs-toggle="tab" href="#tab-3" data-bs-target="#tab-3">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4>Nature Retreats</h4>
            </a>
          </li><!-- End Tab 3 Nav -->

          <li class="nav-item col-4 col-lg">
            <a class="nav-link acco4" id="tab-4-link" data-bs-toggle="tab" href="#tab-4" data-bs-target="#tab-4">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4>Homestay</h4>
            </a>
          </li><!-- End Tab 4 Nav -->

          <li class="nav-item col-4 col-lg">
            <a class="nav-link acco5" id="tab-5-link" data-bs-toggle="tab" href="#tab-5" data-bs-target="#tab-5">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4>Backpackers Lodge</h4>
            </a>
          </li><!-- End Tab 4 Nav -->

        </ul>

        <div class="tab-content">

          <div class="tab-pane" id="tab-1">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Luxury Hotels</h3>

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
  
              <div class="row">



              <?php

              $query = "SELECT * FROM accommodation WHERE accommodation_category='lux' ";
              $result = mysqli_query($db, $query);
              $counter = 1;
              while ($row = mysqli_fetch_assoc($result)) {


                echo '<div class="col-12 col-lg-6 mb-3  ">';
                echo '  <div class="card h-100">';
                echo '    <div class="row h-100">';
                echo '      <div class="col-6">';
                echo '        <img class="card-img  " src="assets/img/accommodation/lux/' . $row['accommodation_image'] . '" alt="' . urldecode($row['accommodation_title']) . '" loading="lazy">';
                echo '      </div>';
                echo '      <div class="col-6 " >';
                echo '        <div class="card-body ">';
                echo '          <h5 class="card-title">' . urldecode($row['accommodation_title']) . '</h5>';
                if ($row['accommodation_location']) {
                  echo '          <p class="card-text">Location: <a href="' . $row['accommodation_locationurl'] . '">' . urldecode($row['accommodation_location']) . '</a></p>';
                }
                if ($row['accommodation_hours']) {
                  echo '          <p class="card-text">Operating Hours: ' . $row['accommodation_hours'] . '</p>';
                }
                if ($row['accommodation_phone']) {
                  echo '          <p class="card-text">Contact Number: ' . $row['accommodation_phone'] . '</p>';
                }

                echo '        </div>';
                echo '      </div>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';
              }
              ?>

            </div>

          </div><!-- End Tab Content 2 -->

          <div class="tab-pane" id="tab-2">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Budget Hotels</h3>


              </div>

            </div>


            <div class="row">



              <?php

              $query = "SELECT * FROM accommodation WHERE accommodation_category='bud' ";
              $result = mysqli_query($db, $query);
              $counter = 1;
              while ($row = mysqli_fetch_assoc($result)) {


                echo '<div class="col-12 col-lg-6 mb-3  ">';
                echo '  <div class="card h-100">';
                echo '    <div class="row h-100">';
                echo '      <div class="col-6">';
                echo '        <img class="card-img  " src="assets/img/accommodation/bud/' . $row['accommodation_image'] . '" alt="' . urldecode($row['accommodation_title']) . '" loading="lazy">';
                echo '      </div>';
                echo '      <div class="col-6 " >';
                echo '        <div class="card-body ">';
                echo '          <h5 class="card-title">' . urldecode($row['accommodation_title']) . '</h5>';
                if ($row['accommodation_location']) {
                  echo '          <p class="card-text">Location: <a href="' . $row['accommodation_locationurl'] . '">' . urldecode($row['accommodation_location']) . '</a></p>';
                }
                if ($row['accommodation_hours']) {
                  echo '          <p class="card-text">Operating Hours: ' . $row['accommodation_hours'] . '</p>';
                }
                if ($row['accommodation_phone']) {
                  echo '          <p class="card-text">Contact Number: ' . $row['accommodation_phone'] . '</p>';
                }

                echo '        </div>';
                echo '      </div>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';
              }
              ?>

            </div>

          </div><!-- End Tab Content 2 -->
          <div class="tab-pane" id="tab-3">


            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Nature Retreats</h3>


              </div>


            </div>
            <div class="row">



              <?php

              $query = "SELECT * FROM accommodation WHERE accommodation_category='nat'";
              $result = mysqli_query($db, $query);
              $counter = 1;
              while ($row = mysqli_fetch_assoc($result)) {


                echo '<div class="col-12 col-lg-6 mb-3  ">';
                echo '  <div class="card h-100">';
                echo '    <div class="row h-100">';
                echo '      <div class="col-6">';
                echo '        <img class="card-img  " src="assets/img/accommodation/nat/' . $row['accommodation_image'] . '" alt="' . urldecode($row['accommodation_title']) . '" loading="lazy">';
                echo '      </div>';
                echo '      <div class="col-6 " >';
                echo '        <div class="card-body ">';
                echo '          <h5 class="card-title">' . urldecode($row['accommodation_title']) . '</h5>';
                if ($row['accommodation_location']) {
                  echo '          <p class="card-text">Location: <a href="' . $row['accommodation_locationurl'] . '">' . urldecode($row['accommodation_location']) . '</a></p>';
                }
                if ($row['accommodation_hours']) {
                  echo '          <p class="card-text">Operating Hours: ' . $row['accommodation_hours'] . '</p>';
                }
                if ($row['accommodation_phone']) {
                  echo '          <p class="card-text">Contact Number: ' . $row['accommodation_phone'] . '</p>';
                }

                echo '        </div>';
                echo '      </div>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';
              }
              ?>

            </div>

          </div>

          <div class="tab-pane" id="tab-4">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Homestay</h3>


              </div>

            </div>


            <div class="row">



              <?php

              $query = "SELECT * FROM accommodation WHERE accommodation_category='home'";
              $result = mysqli_query($db, $query);
              $counter = 1;
              while ($row = mysqli_fetch_assoc($result)) {


                echo '<div class="col-12 col-lg-6 mb-3  ">';
                echo '  <div class="card h-100">';
                echo '    <div class="row h-100">';
                echo '      <div class="col-6">';
                echo '        <img class="card-img  " src="assets/img/accommodation/home/' . $row['accommodation_image'] . '" alt="' . urldecode($row['accommodation_title']) . '" loading="lazy">';
                echo '      </div>';
                echo '      <div class="col-6 " >';
                echo '        <div class="card-body ">';
                echo '          <h5 class="card-title">' . urldecode($row['accommodation_title']) . '</h5>';
                if ($row['accommodation_location']) {
                  echo '          <p class="card-text">Location: <a href="' . $row['accommodation_locationurl'] . '">' . urldecode($row['accommodation_location']) . '</a></p>';
                }
                if ($row['accommodation_hours']) {
                  echo '          <p class="card-text">Operating Hours: ' . $row['accommodation_hours'] . '</p>';
                }
                if ($row['accommodation_phone']) {
                  echo '          <p class="card-text">Contact Number: ' . $row['accommodation_phone'] . '</p>';
                }

                echo '        </div>';
                echo '      </div>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';
              }
              ?>

            </div>

          </div><!-- End Tab Content 2 -->


          <div class="tab-pane" id="tab-5">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Backpackers Lodge</h3>


              </div>

            </div>


            <div class="row">



              <?php

              $query = "SELECT * FROM accommodation WHERE accommodation_category='back'";
              $result = mysqli_query($db, $query);
              $counter = 1;
              while ($row = mysqli_fetch_assoc($result)) {


                echo '<div class="col-12 col-lg-6 mb-3  ">';
                echo '  <div class="card h-100">';
                echo '    <div class="row h-100">';
                echo '      <div class="col-6">';
                echo '        <img class="card-img  " src="assets/img/accommodation/back/' . $row['accommodation_image'] . '" alt="' . urldecode($row['accommodation_title']) . '" loading="lazy">';
                echo '      </div>';
                echo '      <div class="col-6 " >';
                echo '        <div class="card-body ">';
                echo '          <h5 class="card-title">' . urldecode($row['accommodation_title']) . '</h5>';
                if ($row['accommodation_location']) {
                  echo '          <p class="card-text">Location: <a href="' . $row['accommodation_locationurl'] . '">' . urldecode($row['accommodation_location']) . '</a></p>';
                }
                if ($row['accommodation_hours']) {
                  echo '          <p class="card-text">Operating Hours: ' . $row['accommodation_hours'] . '</p>';
                }
                if ($row['accommodation_phone']) {
                  echo '          <p class="card-text">Contact Number: ' . $row['accommodation_phone'] . '</p>';
                }

                echo '        </div>';
                echo '      </div>';
                echo '    </div>';
                echo '  </div>';
                echo '</div>';
              }
              ?>

            </div>

          </div><!-- End Tab Content 2 -->


    </section><!-- End Features Section -->





  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footer.php'; ?>
  <!-- End Footer -->

  <a href="#placetostay" class="scroll-top d-flex align-items-center justify-content-center"><i
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