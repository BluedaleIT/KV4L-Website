<?php include('admin/functions.php'); ?>
<?php
$query = "SELECT * FROM indexpage ";
$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_assoc($result)) {


  $hero_title = $row['hero_title'];
  $hero_title2 = $row['hero_title2'];
  $hero_subtitle = $row['hero_subtitle'];

  $tile1_title = $row['tile1_title'];
  $tile1_subtitle = $row['tile1_subtitle'];
  $tile1_photo1 = $row['tile1_photo1'];
  $tile1_photo2 = $row['tile1_photo2'];
  $tile1_photo3 = $row['tile1_photo3'];

  $tile2_title = $row['tile2_title'];
  $tile2_subtitle = $row['tile2_subtitle'];
  $tile2_photo1 = $row['tile2_photo1'];
  $tile2_photo2 = $row['tile2_photo2'];
  $tile2_photo3 = $row['tile2_photo3'];
  $tile2_photo4 = $row['tile2_photo4'];
  $tile2_photo5 = $row['tile2_photo5'];
  $tile2_photo6 = $row['tile2_photo6'];

  $tile3_title = $row['tile3_title'];
  $tile3_subtitle = $row['tile3_subtitle'];

  $tile4_title = $row['tile4_title'];
  $tile4_subtitle = $row['tile4_subtitle'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Klang Valley 4 Locals</title>

  <meta content="We present you KL The Guide, where you will be able to find and learn about everything there is to know about 
    Kuala Lumpur in Malaysia" name="description">
  <meta content="KL The Guide, Travel Places Guide Street Visited Trending Tourism Attraction Kuala Lumpur"
    name="keywords">

  <meta itemprop="name" content="KL The Guide">
  <meta itemprop="description" content="We present you KL The Guide, where you will be able to find and learn about everything there is to know about 
    Kuala Lumpur in Malaysia">
  <meta itemprop="image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg">


  <!-- Open Graph / Facebook -->
  <!-- <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.kltheguide.com.my" />
  <meta property="og:title" content="KL The Guide" />
  <meta property="og:description" content="We present you KL The Guide, where you will be able to find and learn about everything there is to know about 
    Kuala Lumpur in Malaysia" />
  <meta property="og:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg"> -->

  <!-- Twitter -->
  <!-- <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://www.kltheguide.com.my" />
  <meta property="twitter:title" content="KL The Guide" />
  <meta property="twitter:description" content="We present you KL The Guide, where you will be able to find and learn about everything there is to know about 
    Kuala Lumpur in Malaysia" />
  <meta property="twitter:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg" /> -->


  <?php include 'header.php'; ?>


</head>

<body>
  <?php include 'nav.php'; ?>




  <main id="index">

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000"
      touch="true">

      <div class="carousel-inner">

        <?php

        $query = "SELECT * FROM banner ORDER BY banner_order ASC";
        $result = mysqli_query($db, $query);
        $counter = 1;
        while ($row = mysqli_fetch_assoc($result)) {
          if ($counter == 1) {
            echo '<div class="carousel-item active" style="">';
          } else {
            echo '<div class="carousel-item">';

          }
          if ($row['banner_url']) {

            echo '<a href="' . $row['banner_url'] . '">';
          }
          echo '<div class="container">';
          echo '<div class="row justify-content-center gy-6">';
          if ($row['banner_filename2']) {
            echo '<picture>';
            echo '<source media="(max-width:640px)" srcset="assets/img/banner/' . $row['banner_filename2'] . '" class="img-fluid" alt="' . $row['banner_name'] . '" >';
            echo '<img src="assets/img/banner/' . $row['banner_filename'] . '" alt="' . $row['banner_name'] . '" class="img-fluid" >';
            echo '</picture>';
          } else {
            echo '<picture>';
            echo '<source media="(max-width:640px)" srcset="assets/img/banner/' . $row['banner_filename'] . '" class="img-fluid object-fit-contain" style="min-height:236px" alt="' . $row['banner_name'] . '">';
            if ($counter == 1) {
              echo '<img src="assets/img/banner/' . $row['banner_filename'] . '" alt="' . $row['banner_name'] . '" class="img-fluid">';
            } else {
              echo '<img src="assets/img/banner/' . $row['banner_filename'] . '" alt="' . $row['banner_name'] . '" class="img-fluid" >';

            }
            echo '</picture>';
          }


          echo '</div>';
          echo '</div>';
          if ($row['banner_url']) {

            echo '</a>';
          }

          echo '</div>';

          $counter++;
        }
        ?>



      </div>

      <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-caret-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-caret-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators"></ol>

    </section><!-- End Hero Section -->




    <section id="hero-animated" class="hero-animated d-flex  justify-content-center w-100">

      <div class="row d-flex align-items-center w-100 justify-content-center align-self-center" id="overlay22">
        <div class="col-2 d-none d-lg-block justify-content-start" style="">
          <script async
            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3696733888071014"
            crossorigin="anonymous"></script>
          <!-- Index Sides -->
          <ins class="adsbygoogle d-lg-block mx-auto" style="display:inline-block;width:150px;height:400px"
            data-ad-client="ca-pub-3696733888071014" data-ad-slot="2572826163"></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>

        </div>
        <div class="col-12 col-lg-8   d-flex flex-column justify-content-center align-items-center">

          <div
            class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <h3>
              <?php echo $hero_title ?>
            </h3>
            <h2><span>
                <?php echo $hero_title2 ?>
              </span></h2>
            <p>
              <?php echo $hero_subtitle ?>
            </p>

            <div class="d-flex justify-content-center">

              <form action="" method="post">
                <div class="row">

                  <div class="col-6">

                    <input type="email" name="emailsubscribe" id="emailsubscribe" class="inputemailsub" required>
                  </div>

                  <div class="col-6">

                    <input type="submit" value="Subscribe" name="subscribe" class="inputemailsub2">
                  </div>

                </div>
              </form>

            </div>


          </div>


        </div>
        <div class="col-2 d-none d-lg-block justify-content-end" style="">

          <script async
            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3696733888071014"
            crossorigin="anonymous"></script>
          <!-- Index Sides -->
          <ins class="adsbygoogle d-lg-block mx-auto" style="display:inline-block;width:150px;height:400px"
            data-ad-client="ca-pub-3696733888071014" data-ad-slot="2572826163"></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>

      </div>

    </section>


    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">
        <div class="section-header">
          <h2>
            <?php echo urldecode($tile1_title) ?>
          </h2>
          <p>
            <?php echo urldecode($tile1_subtitle) ?>
          </p>
        </div>
        <div class="row gy-4 justify-content-center">

          <div class="col-6 col-lg-4 col-md-4  d-flex bg-image" data-aos="zoom-out">
            <div class="service-item  position-relative d-flex align-items-center justify-content-center  ">
              <div class="icon"> <img src="assets/img/highlights/<?php echo urldecode($tile1_photo1) ?>" class=""
                  alt=""></div>
              <a class="stretched-link" href="highlights.php#tab-1"></a>
              <h4 class="text-center text">About Klang Valley</h4>
              <!-- <p>KL @ A Glance</p> -->
            </div>
          </div><!-- End Service Item -->
          <div class="col-6 col-lg-4 col-md-4  d-flex" data-aos="zoom-out">
            <div class="service-item  position-relative d-flex align-items-center justify-content-center">

              <div class="icon"> <img src="assets/img/highlights/<?php echo urldecode($tile1_photo2) ?>" class=""
                  alt=""></div>
              <a class="stretched-link" href="highlights.php#tab-2"></a>
              <h4 class="text-center text">Getting Around Klang Valley</h4>
              <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
          </div><!-- End Service Item -->
          <div class="col-6 col-lg-4 col-md-4  d-flex" data-aos="zoom-out">
            <div class="service-item  position-relative d-flex align-items-center justify-content-center">
              <div class="icon"> <img src="assets/img/highlights/<?php echo urldecode($tile1_photo3) ?>" class=""
                  alt=""></div>
              <a href="highlights.php#tab-3" class="stretched-link"></a>
              <h4 class="text-center text">Travel Tips</h4>

              <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
          </div><!-- End Service Item -->


        </div>

      </div>
    </section><!-- End Featured Services Section -->




    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2 class="text-break">
            <?php echo urldecode($tile2_title) ?>
          </h2>
          <p>
            <?php echo urldecode($tile2_subtitle) ?>
          </p>
        </div>

        <div class="row gy-5 d-flex justify-content-center ">

          <div class="d-flex col-xl-4 col-md-6 justify-content-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <a href="explorekv.php" class="stretched-link">

                <div class="img">
                  <img src="assets/img/recommendation/<?php echo $tile2_photo1 ?>" class="img-fluid object-fit-cover"
                    alt="Explore KV">
                </div>
                <div class="details position-relative">
                  <div class="d-flex align-items-center justify-content-center">
                    <h3>Explore KV</h3>
                    <div class="icon2">
                      <i class="bi bi-arrow-bar-right"></i>
                    </div>
                  </div>

                  <!-- <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                      perferendis.</p> -->
                </div>
              </a>

            </div>
          </div><!-- End Service Item -->

          <div class="d-flex col-xl-4 col-md-6 justify-content-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <a href="whattodo.php" class="stretched-link">

                <div class="img">
                  <img src="assets/img/recommendation/<?php echo $tile2_photo2 ?>" class="img-fluid object-fit-cover"
                    alt="Explore KL">
                </div>
                <div class="details position-relative">
                  <div class="d-flex align-items-center justify-content-center">
                    <h3>What To Do</h3>
                    <div class="icon2">
                      <i class="bi bi-arrow-bar-right"></i>
                    </div>
                  </div>

                  <!-- <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                      perferendis.</p> -->
                </div>
              </a>

            </div>
          </div><!-- End Service Item -->
          <div class="d-flex col-xl-4 col-md-6 justify-content-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <a href="where-to-shop.php" class="stretched-link">

                <div class="img">
                  <img src="assets/img/recommendation/<?php echo $tile2_photo3 ?>" class="img-fluid object-fit-cover"
                    alt="Shop Like Locals">
                </div>
                <div class="details position-relative">

                  <div class="d-flex align-items-center justify-content-center">
                    <h3>Shopping In KV</h3>
                    <div class="icon2">
                      <i class="bi bi-arrow-bar-right"></i>
                    </div>
                  </div>
                  <!-- <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                      perferendis.</p> -->
                </div>
              </a>

            </div>
          </div><!-- End Service Item -->

          <div class="d-flex col-xl-4 col-md-6 justify-content-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <a href="spa.php" class="stretched-link">

                <div class="img">
                  <img src="assets/img/recommendation/<?php echo $tile2_photo4 ?>" class="img-fluid object-fit-cover"
                    alt="Spa Time">
                </div>
                <div class="details position-relative">
                  <div class="d-flex align-items-center justify-content-center">
                    <h3>Spa Time</h3>
                    <div class="icon2">
                      <i class="bi bi-arrow-bar-right"></i>
                    </div>
                  </div>
                  <!-- <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                      perferendis.</p> -->
                </div>
              </a>

            </div>
          </div><!-- End Service Item -->
          <div class="d-flex col-xl-4 col-md-6 justify-content-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <a href="medical-tourism.php" class="stretched-link">

                <div class="img">
                  <img src="assets/img/recommendation/<?php echo $tile2_photo5 ?>" class="img-fluid object-fit-cover"
                    alt="Medical Tourism">
                </div>
                <div class="details position-relative">
                  <div class="d-flex align-items-center justify-content-center">
                    <h3>Medical Tourism</h3>
                    <div class="icon2">
                      <i class="bi bi-arrow-bar-right"></i>
                    </div>
                  </div>
                  <!-- </a> -->
                  <!-- <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                      perferendis.</p> -->
                </div>
              </a>

            </div>
          </div><!-- End Service Item -->


          <div class="d-flex col-xl-4 col-md-6 justify-content-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <a href="accommodation.php" class="stretched-link">

                <div class="img">
                  <img src="assets/img/recommendation/<?php echo $tile2_photo6 ?>" class="img-fluid object-fit-cover"
                    alt="Place To Stay">
                </div>
                <div class="details position-relative">
                  <div class="d-flex align-items-center justify-content-center">
                    <h3>Accomodation</h3>
                    <div class="icon2">
                      <i class="bi bi-arrow-bar-right"></i>
                    </div>
                  </div>
                  <!-- <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                      perferendis.</p> -->
                </div>
              </a>

            </div>
          </div><!-- End Service Item -->
        </div>

      </div>
    </section><!-- End Services Section -->






    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" data-aos="fade-up">

      <div class="container">

        <div class="section-header">
          <h2>
            <?php echo $tile3_title ?>
          </h2>
          <p>
            <?php echo $tile3_subtitle ?>
          </p>
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order">

          <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active"><div class="btn btn-primary">All</div></li>
            <?php

            $query = "SELECT DISTINCT recommendation_category FROM recommendation ";
            $result = mysqli_query($db, $query);
            while ($row = mysqli_fetch_assoc($result)) {

              if ($row['recommendation_category'] != '') {
                echo '<li class="" data-filter=".filter-' . $row['recommendation_category'] . '"><div class="btn btn-primary">' . $row['recommendation_category'] . '</div></li>';

              }

            }
            ?>

          </ul><!-- End Portfolio Filters -->

          <div class="row g-0 portfolio-container">

            <?php

            $query = "SELECT * FROM recommendation ";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {

              echo '<div class="col-lg-3 col-md-4 col-sm-6 portfolio-item filter-' . $row['recommendation_category'] . '">';
              echo '<img src="https://' . urldecode($row['recommendation_image']) . '" class="img-fluid" alt="' . urldecode($row['recommendation_name']) . '" loading="lazy">';
              echo '<div class="portfolio-info">';
              echo '<h4>' . urldecode($row['recommendation_name']) . '</h4>';
              // echo '<a href="https://' . urldecode($row['recommendation_image']) . '" title="' . urldecode($row['recommendation_name']) . '" description="asdasd" data-gallery="portfolio-gallery"';
              // echo 'class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>';
              echo '<a href="blog-details.php?postid=' . $row['recommendation_postid'] . '" title="More Details" class="details-link">';
              echo '<i class="bi bi-link-45deg"></i></a>';
              echo '</div>';
              echo '</div>';
              $counter++;
            }
            ?>

            <!-- End Portfolio Item -->


          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->



    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>
            <?php echo $tile4_title ?>
          </h2>
          <p>
            <?php echo $tile4_subtitle ?>
          </p>
        </div>

        <div class="row" id="postlist">


        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->

    <div class="row d-flex justify-content-center btmbanner mt-4">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3696733888071014"
     crossorigin="anonymous"></script>
<!-- KV4L-Bottom-Bannar -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3696733888071014"
     data-ad-slot="5737042876"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>


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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/index.js"></script>

</body>

</html>