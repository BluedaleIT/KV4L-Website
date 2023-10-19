<?php include('admin/functions.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Klang Valley 4 Locals - spakv Time</title>

	<meta name="description" content="KL's guide to spakvs. Find the best spakvs in Kuala Lumpur, Malaysia. Featuring saunas, massage, and beauty treatments.">
  <meta content="" name="keywords">


  <!-- Open Graph / Facebook -->
  <!-- <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.kltheguide.com.my/spakv.php" />
  <meta property="og:title" content="KL The Guide - spakv Time" />
  <meta property="og:description"
    content="KL's guide to spakvs. Find the best spakvs in Kuala Lumpur, Malaysia. Featuring saunas, massage, and beauty treatments." />
  <meta property="og:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg"> -->

  <!-- Twitter -->
  <!-- <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://www.kltheguide.com.my/spakv.php" />
  <meta property="twitter:title" content="KL The Guide - spakv Time" />
  <meta property="twitter:description"
    content="KL's guide to spakvs. Find the best spakvs in Kuala Lumpur, Malaysia. Featuring saunas, massage, and beauty treatments." />
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


        <div class="tab-content">

          <div class="tab-pane active show " id="tab-1">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Spas In Klang Valley</h3>


              </div>

            </div>



            <?php

            $query = "SELECT * FROM spakv ORDER BY spakv_order DESC  ";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($counter % 2 != 0) {
                ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-2 ">
                    <h3>
                      <?php echo urldecode($row['spakv_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['spakv_content']) ?>
                    </p>
                    <p><b>Location :</b><a href=" <?php echo urldecode($row['spakv_locationurl']) ?>"> <?php echo urldecode($row['spakv_location']) ?></a>
                    </p>

                    <?php if ($row['spakv_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['spakv_hours'])); ?>
                      </p>
                    <?php } ?>
                    <?php if ($row['spakv_phone']) { ?>

                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['spakv_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-1  text-center align-self-center">
                    <img src="assets/img/spakv/<?php echo $row['spakv_image'] ?>" alt="<?php echo urldecode($row['spakv_title']) ?>" class="img-fluid"
                      loading="lazy">
                  </div>
                </div>
                <hr>
              <?php } else { ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-md-1 order-2">
                    <h3>
                      <?php echo urldecode($row['spakv_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['spakv_content']) ?>
                    </p>
                    <p><b>Location :</b><a href=" <?php echo urldecode($row['spakv_locationurl']) ?>"> <?php echo urldecode($row['spakv_location']) ?></a>
                    </p>
                    <?php if ($row['spakv_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['spakv_hours'])); ?>
                      </p>
                    <?php } ?>

                    <?php if ($row['spakv_phone']) { ?>
                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['spakv_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                    <img src="assets/img/spakv/<?php echo $row['spakv_image'] ?>" alt="<?php echo urldecode($row['spakv_title']) ?>" class="img-fluid "
                      loading="lazy">
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
  </script>
</body>

</html>