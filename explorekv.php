<?php include('admin/functions.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Klang Valley 4 Locals - Explore KL</title>

  <meta name="description"
    content="This page contains the menu for navigating to the various sights, activities and locations throughout Kuala Lumpur">
  <meta content="" name="keywords">


  <!-- Open Graph / Facebook -->
  <!-- <meta property="og:type" content="website" />
<meta property="og:url" content="https://www.kltheguide.com.my/explorekl.php" />
<meta property="og:title" content="KL The Guide - Explore KL" />
<meta property="og:description" content="This page contains the menu for navigating to the various sights, activities and locations throughout Kuala Lumpur" />
<meta property="og:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg"> -->

  <!-- Twitter -->
  <!-- <meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://www.kltheguide.com.my/explorekl.php" />
<meta property="twitter:title" content="KL The Guide - Explore KL" />
<meta property="twitter:description" content="This page contains the menu for navigating to the various sights, activities and locations throughout Kuala Lumpur" />
<meta property="twitter:image" content="assets/img/kltgseo.jpg" /> -->


  <?php include 'header.php'; ?>

</head>

<body>

  <?php include 'nav.php'; ?>



  <main id="exploreklbody">



    <br>


    <!-- ======= Features Section ======= -->
    <section id="explorekl" class="features">

      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4  my-5 d-flex justify-content-center">

          <li class="nav-item col-4 col-md-4 col-lg-4 d-flex justify-content-center">
            <a class="nav-link explorekv1" id="tab-1-link" data-bs-toggle="tab" href="#tab-1" data-bs-target="#tab-1">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center align-middle text-break">Sightseeing</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

          <li class="nav-item col-4 col-md-4 col-lg-4 d-flex justify-content-center">
            <a class="nav-link explorekv2" id="tab-2-link" data-bs-toggle="tab" href="#tab-2" data-bs-target="#tab-2">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center align-middle">Eco Tourism</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

          <li class="nav-item col-4 col-md-4 col-lg-4 d-flex justify-content-center">
            <a class="nav-link explorekv3" id="tab-3-link" data-bs-toggle="tab" href="#tab-3" data-bs-target="#tab-3">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center align-middle">Agro Tourism</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

          <li class="nav-item col-4 col-md-4 col-lg-4 d-flex justify-content-center">
            <a class="nav-link explorekv4" id="tab-4-link" data-bs-toggle="tab" href="#tab-4" data-bs-target="#tab-4">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center align-middle">Golden Hour</h4>
            </a>
          </li><!-- End Tab 6 Nav -->




          <li class="nav-item col-4 col-md-4 col-lg-4 d-flex justify-content-center">
            <a class="nav-link explorekv5" id="tab-5-link" data-bs-toggle="tab" href="#tab-5" data-bs-target="#tab-5">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center align-middle">Eating Out</h4>
            </a>
          </li><!-- End Tab 4 Nav -->


          <li class="nav-item col-4 col-md-4 col-lg-4 d-flex justify-content-center">
            <a class="nav-link explorekv6" id="tab-6-link" data-bs-toggle="tab" href="#tab-6" data-bs-target="#tab-6">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center align-middle">Places Of Worship</h4>
            </a>
          </li><!-- End Tab 3 Nav -->







        </ul>

        <div class="tab-content">







          <div class="tab-pane" id="tab-6">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Places Of Worship</h3>

                </p>
              </div>

              <!-- ======= About Section ======= -->
              <div class="container" data-aos="fade-up">


                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">


                  <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3 justify-content-center">
                      <li><a class="nav-link2  d-flex justify-content-center active" data-bs-toggle="pill"
                          href="#tabc1">Muslim</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabc2">Buddhist/Tao</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabc3">Hindu</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabc4">Others</a></li>

                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                      <div class="tab-pane fade show active" id="tabc1">
                        <div class="row">



                          <?php

                          $query = "SELECT * FROM explorekv_pwor WHERE explorekv_pwor_category='muslim'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {


                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row  h-100">';
                            echo '      <div class="col-6">';
                            echo '        <img class="card-img " src="assets/img/explorekv/pwor/muslim/' . $row['explorekv_pwor_image'] . '" alt="' . $row['explorekv_pwor_title'] . '" loading="lazy" >';
                            echo '      </div>';
                            echo '      <div class="col-6 " >';
                            echo '        <div class="card-body h-100">';
                            echo '          <h5 class="card-title">' . urldecode($row['explorekv_pwor_title']) . '</h5>';
                            if ($row['explorekv_pwor_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['explorekv_pwor_locationurl'] . '">' . urldecode($row['explorekv_pwor_location']) . '</a></p>';
                            }
                            if ($row['explorekv_pwor_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['explorekv_pwor_hours']) . '</p>';
                            }
                            if ($row['explorekv_pwor_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['explorekv_pwor_phone'] . '</p>';
                            }
                            if ($row['explorekv_pwor_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['explorekv_pwor_website'] . '">' . $row['explorekv_pwor_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                          }
                          ?>

                        </div>



                      </div><!-- End Tab 1 Content -->

                      <div class="tab-pane fade show" id="tabc2">

                        <div class="row">



                          <?php

                          $query = "SELECT * FROM explorekv_pwor WHERE explorekv_pwor_category='tao'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {



                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row  h-100">';
                            echo '      <div class="col-6">';
                            echo '        <img class="card-img  " src="assets/img/explorekv/pwor/tao/' . $row['explorekv_pwor_image'] . '" alt="' . $row['explorekv_pwor_title'] . '" loading="lazy">';
                            echo '      </div>';
                            echo '      <div class="col-6 " >';
                            echo '        <div class="card-body h-100 ">';
                            echo '          <h5 class="card-title">' . urldecode($row['explorekv_pwor_title']) . '</h5>';
                            if ($row['explorekv_pwor_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['explorekv_pwor_locationurl'] . '">' . urldecode($row['explorekv_pwor_location']) . '</a></p>';
                            }
                            if ($row['explorekv_pwor_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['explorekv_pwor_hours']) . '</p>';
                            }
                            if ($row['explorekv_pwor_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['explorekv_pwor_phone'] . '</p>';
                            }
                            if ($row['explorekv_pwor_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['explorekv_pwor_website'] . '">' . $row['explorekv_pwor_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                          }
                          ?>

                        </div>

                      </div><!-- End Tab 2 Content -->

                      <div class="tab-pane fade show" id="tabc3">

                        <div class="row">



                          <?php

                          $query = "SELECT * FROM explorekv_pwor WHERE explorekv_pwor_category='hindu'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {



                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row h-100">';
                            echo '      <div class="col-6">';
                            echo '        <img class="card-img  " src="assets/img/explorekv/pwor/hindu/' . $row['explorekv_pwor_image'] . '" alt="' . $row['explorekv_pwor_title'] . '" loading="lazy">';
                            echo '      </div>';
                            echo '      <div class="col-6 " >';
                            echo '        <div class="card-body h-100 ">';
                            echo '          <h5 class="card-title">' . urldecode($row['explorekv_pwor_title']) . '</h5>';
                            if ($row['explorekv_pwor_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['explorekv_pwor_locationurl'] . '">' . urldecode($row['explorekv_pwor_location']) . '</a></p>';
                            }
                            if ($row['explorekv_pwor_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['explorekv_pwor_hours']) . '</p>';
                            }
                            if ($row['explorekv_pwor_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['explorekv_pwor_phone'] . '</p>';
                            }
                            if ($row['explorekv_pwor_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['explorekv_pwor_website'] . '">' . $row['explorekv_pwor_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                          }
                          ?>

                        </div>

                      </div><!-- End Tab 3 Content -->


                      <div class="tab-pane fade show" id="tabc4">

                        <div class="row">



                          <?php

                          $query = "SELECT * FROM explorekv_pwor WHERE explorekv_pwor_category='other'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {



                            echo '<div class="col-12 col-lg-6 mb-3  ">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row h-100">';
                            echo '      <div class="col-6">';
                            echo '        <img class="card-img  " src="assets/img/explorekv/pwor/other/' . $row['explorekv_pwor_image'] . '" alt="' . $row['explorekv_pwor_title'] . '" loading="lazy">';
                            echo '      </div>';
                            echo '      <div class="col-6" >';
                            echo '        <div class="card-body h-100 ">';
                            echo '          <h5 class="card-title">' . urldecode($row['explorekv_pwor_title']) . '</h5>';
                            if ($row['explorekv_pwor_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['explorekv_pwor_locationurl'] . '">' . urldecode($row['explorekv_pwor_location']) . '</a></p>';
                            }
                            if ($row['explorekv_pwor_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . urldecode($row['explorekv_pwor_hours']) . '</p>';
                            }
                            if ($row['explorekv_pwor_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['explorekv_pwor_phone'] . '</p>';
                            }
                            if ($row['explorekv_pwor_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['explorekv_pwor_website'] . '">' . $row['explorekv_pwor_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                          }
                          ?>

                        </div>

                      </div><!-- End Tab 4 Content -->

                    </div>

                  </div>

                </div>

              </div>


            </div>


          </div><!-- End Tab Content 3 places of worship -->



          <div class="tab-pane" id="tab-5">


            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Eating Out</h3>

                </p>
              </div>

              <!-- ======= About Section ======= -->
              <div class="container" data-aos="fade-up">


                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">


                  <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3 justify-content-center">
                      <li><a class="nav-link2  d-flex justify-content-center  active" data-bs-toggle="pill"
                          href="#tabd1">Malay Food</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill"
                          href="#tabd2">Chinese Food</a></li>
                      <li><a class="nav-link2  d-flex justify-content-center" data-bs-toggle="pill" href="#tabd3">Indian
                          Food</a></li>

                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                      <div class="tab-pane fade show active" id="tabd1">
                        <div class="row">



                          <?php

                          $query = "SELECT * FROM explorekv_eo  WHERE explorekv_eo_category='malay'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {



                            echo '<div class="col-12 col-lg-6 my-3">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row  h-100">';
                            echo '      <div class="col-6  h-100">';
                            echo '        <img class="card-img" src="assets/img/explorekv/eo/malay/' . $row['explorekv_eo_image'] . '" alt="Card image cap">';
                            echo '      </div>';
                            echo '      <div class="col-6  h-100">';
                            echo '        <div class="card-body h-100">';
                            echo '          <h5 class="card-title">' . $row['explorekv_eo_title'] . '</h5>';
                            if ($row['explorekv_eo_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['explorekv_eo_locationurl'] . '">' . $row['explorekv_eo_location'] . '</a></p>';
                            }
                            if ($row['explorekv_eo_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . $row['explorekv_eo_hours'] . '</p>';
                            }
                            if ($row['explorekv_eo_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['explorekv_eo_phone'] . '</p>';
                            }
                            if ($row['explorekv_eo_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['explorekv_eo_website'] . '">' . $row['explorekv_eo_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';


                            $counter++;
                          }
                          ?>

                        </div>


                      </div><!-- End Tab 1 Content -->

                      <div class="tab-pane fade show" id="tabd2">

                        <div class="row">



                          <?php

                          $query = "SELECT * FROM explorekv_eo  WHERE explorekv_eo_category='chinese'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {



                            echo '<div class="col-12 col-lg-6 my-3">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row  h-100">';
                            echo '      <div class="col-6  h-100">';
                            echo '        <img class="card-img" src="assets/img/explorekv/eo/chinese/' . $row['explorekv_eo_image'] . '" alt="Card image cap">';
                            echo '      </div>';
                            echo '      <div class="col-6  h-100">';
                            echo '        <div class="card-body h-100">';
                            echo '          <h5 class="card-title">' . $row['explorekv_eo_title'] . '</h5>';
                            if ($row['explorekv_eo_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['explorekv_eo_locationurl'] . '">' . $row['explorekv_eo_location'] . '</a></p>';
                            }
                            if ($row['explorekv_eo_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . $row['explorekv_eo_hours'] . '</p>';
                            }
                            if ($row['explorekv_eo_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['explorekv_eo_phone'] . '</p>';
                            }
                            if ($row['explorekv_eo_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['explorekv_eo_website'] . '">' . $row['explorekv_eo_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';


                            $counter++;
                          }
                          ?>

                        </div>

                      </div><!-- End Tab 2 Content -->

                      <div class="tab-pane fade show" id="tabd3">
                        <div class="row">



                          <?php

                          $query = "SELECT * FROM explorekv_eo  WHERE explorekv_eo_category='indian'";
                          $result = mysqli_query($db, $query);
                          $counter = 1;
                          while ($row = mysqli_fetch_assoc($result)) {



                            echo '<div class="col-12 col-lg-6 my-3">';
                            echo '  <div class="card h-100">';
                            echo '    <div class="row  h-100">';
                            echo '      <div class="col-6  h-100">';
                            echo '        <img class="card-img" src="assets/img/explorekv/eo/indian/' . $row['explorekv_eo_image'] . '" alt="Card image cap">';
                            echo '      </div>';
                            echo '      <div class="col-6  h-100">';
                            echo '        <div class="card-body h-100">';
                            echo '          <h5 class="card-title">' . $row['explorekv_eo_title'] . '</h5>';
                            if ($row['explorekv_eo_location']) {
                              echo '          <p class="card-text">Location: <a href="' . $row['explorekv_eo_locationurl'] . '">' . $row['explorekv_eo_location'] . '</a></p>';
                            }
                            if ($row['explorekv_eo_hours']) {
                              echo '          <p class="card-text">Operating Hours: ' . $row['explorekv_eo_hours'] . '</p>';
                            }
                            if ($row['explorekv_eo_phone']) {
                              echo '          <p class="card-text">Contact Number: ' . $row['explorekv_eo_phone'] . '</p>';
                            }
                            if ($row['explorekv_eo_website']) {
                              echo '          <p class="card-text">Website: <a href="' . $row['explorekv_eo_website'] . '">' . $row['explorekv_eo_website'] . '</a></p>';
                            }
                            echo '        </div>';
                            echo '      </div>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';


                            $counter++;
                          }
                          ?>

                        </div>

                      </div><!-- End Tab 3 Content -->

                    </div>

                  </div>

                </div>

              </div>


            </div>

          </div><!-- End Tab Content 4 -->


          <div class="tab-pane" id="tab-2">

            <div class="row gy-10 mb-4">
              <div class="col-12 text-center">
                <h3>Eco Tourism</h3>

                </p>
              </div>

            </div>

            <?php

            $query = "SELECT * FROM explorekv_eco  ORDER BY explorekv_eco_order DESC  ";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($counter % 2 != 0) {
                ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-2 ">
                    <h3>
                      <?php echo urldecode($row['explorekv_eco_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['explorekv_eco_content']) ?>
                    </p>
                    <?php if ($row['explorekv_eco_content2']) { ?>
                      <div class="collapse" id="collapseeco1-<?php echo $counter ?>">
                        <?php echo urldecode($row['explorekv_eco_content2']) ?>

                      </div>
                      <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseeco1-<?php echo $counter ?>" aria-expanded="false"
                          aria-controls="collapseExample">
                          Read More
                        </button>

                      </p>

                    <?php } ?>
                    <?php if ($row['explorekv_eco_location']) { ?>

                      <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_eco_locationurl']) ?>">
                          <?php echo urldecode($row['explorekv_eco_location']) ?></a>
                      </p>
                    <?php } ?>

                    <?php if ($row['explorekv_eco_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['explorekv_eco_hours'])); ?>
                      </p>
                    <?php } ?>
                    <?php if ($row['explorekv_eco_phone']) { ?>

                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['explorekv_eco_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-1  text-center align-self-center">
                    <img src="assets/img/explorekv/eco/<?php echo $row['explorekv_eco_image'] ?>"
                      alt="<?php echo urldecode($row['explorekv_eco_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <hr>
              <?php } else { ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-md-1 order-2">
                    <h3>
                      <?php echo urldecode($row['explorekv_eco_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['explorekv_eco_content']) ?>
                    </p>
                    <?php if ($row['explorekv_eco_content2']) { ?>
                      <div class="collapse" id="collapseeco1-<?php echo $counter ?>">
                        <?php echo urldecode($row['explorekv_eco_content2']) ?>

                      </div>
                      <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseeco1-<?php echo $counter ?>" aria-expanded="false"
                          aria-controls="collapseExample">
                          Read More
                        </button>

                      </p>

                    <?php } ?>
                    <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_eco_locationurl']) ?>">
                        <?php echo urldecode($row['explorekv_eco_location']) ?></a>
                    </p>
                    <?php if ($row['explorekv_eco_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['explorekv_eco_hours'])); ?>
                      </p>
                    <?php } ?>

                    <?php if ($row['explorekv_eco_phone']) { ?>
                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['explorekv_eco_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                    <img src="assets/img/explorekv/eco/<?php echo $row['explorekv_eco_image'] ?>"
                      alt="<?php echo urldecode($row['explorekv_eco_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <hr>
              <?php }
              ?>


              <?php
              $counter++;
            }
            ?>

          </div><!-- End Tab Content 6 -->


          <div class="tab-pane" id="tab-3">

            <div class="row gy-10 mb-4">
              <div class="col-12 text-center">
                <h3>Agro Tourism</h3>

                </p>
              </div>

            </div>

            <?php

            $query = "SELECT * FROM explorekv_agro  ORDER BY explorekv_agro_order DESC  ";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($counter % 2 != 0) {
                ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-2 ">
                    <h3>
                      <?php echo urldecode($row['explorekv_agro_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['explorekv_agro_content']) ?>
                    </p>
                    <?php if ($row['explorekv_agro_content2']) { ?>
                      <div class="collapse" id="collapseeco1-<?php echo $counter ?>">
                        <?php echo urldecode($row['explorekv_agro_content2']) ?>

                      </div>
                      <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseeco1-<?php echo $counter ?>" aria-expanded="false"
                          aria-controls="collapseExample">
                          Read More
                        </button>

                      </p>

                    <?php } ?>
                    <?php if ($row['explorekv_agro_location']) { ?>

                      <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_agro_locationurl']) ?>">
                          <?php echo urldecode($row['explorekv_agro_location']) ?></a>
                      </p>
                    <?php } ?>

                    <?php if ($row['explorekv_agro_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['explorekv_agro_hours'])); ?>
                      </p>
                    <?php } ?>
                    <?php if ($row['explorekv_agro_phone']) { ?>

                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['explorekv_agro_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-1  text-center align-self-center">
                    <img src="assets/img/explorekv/agro/<?php echo $row['explorekv_agro_image'] ?>"
                      alt="<?php echo urldecode($row['explorekv_agro_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <hr>
              <?php } else { ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-md-1 order-2">
                    <h3>
                      <?php echo urldecode($row['explorekv_agro_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['explorekv_agro_content']) ?>
                    </p>
                    <?php if ($row['explorekv_agro_content2']) { ?>
                      <div class="collapse" id="collapseeco1-<?php echo $counter ?>">
                        <?php echo urldecode($row['explorekv_agro_content2']) ?>

                      </div>
                      <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseeco1-<?php echo $counter ?>" aria-expanded="false"
                          aria-controls="collapseExample">
                          Read More
                        </button>

                      </p>

                    <?php } ?>
                    <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_agro_locationurl']) ?>">
                        <?php echo urldecode($row['explorekv_agro_location']) ?></a>
                    </p>
                    <?php if ($row['explorekv_agro_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['explorekv_agro_hours'])); ?>
                      </p>
                    <?php } ?>

                    <?php if ($row['explorekv_agro_phone']) { ?>
                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['explorekv_agro_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                    <img src="assets/img/explorekv/agro/<?php echo $row['explorekv_agro_image'] ?>"
                      alt="<?php echo urldecode($row['explorekv_agro_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <hr>
              <?php }
              ?>


              <?php
              $counter++;
            }
            ?>

          </div><!-- End Tab Content 6 -->


          <div class="tab-pane" id="tab-4">

            <div class="row gy-10 mb-4">
              <div class="col-12 text-center">
                <h3>Golden Hour</h3>

                </p>
              </div>

            </div>

            <?php

            $query = "SELECT * FROM explorekv_gh  ORDER BY explorekv_gh_order DESC  ";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($counter % 2 != 0) {
                ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-2 ">
                    <h3>
                      <?php echo urldecode($row['explorekv_gh_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['explorekv_gh_content']) ?>
                    </p>
                    <?php if ($row['explorekv_gh_content2']) { ?>
                      <div class="collapse" id="collapseeco1-<?php echo $counter ?>">
                        <?php echo urldecode($row['explorekv_gh_content2']) ?>

                      </div>
                      <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseeco1-<?php echo $counter ?>" aria-expanded="false"
                          aria-controls="collapseExample">
                          Read More
                        </button>

                      </p>

                    <?php } ?>
                    <?php if ($row['explorekv_gh_location']) { ?>

                      <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_gh_locationurl']) ?>">
                          <?php echo urldecode($row['explorekv_gh_location']) ?></a>
                      </p>
                    <?php } ?>

                    <?php if ($row['explorekv_gh_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['explorekv_gh_hours'])); ?>
                      </p>
                    <?php } ?>
                    <?php if ($row['explorekv_gh_phone']) { ?>

                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['explorekv_gh_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-1  text-center align-self-center">
                    <img src="assets/img/explorekv/golden/<?php echo $row['explorekv_gh_image'] ?>"
                      alt="<?php echo urldecode($row['explorekv_gh_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <hr>
              <?php } else { ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-md-1 order-2">
                    <h3>
                      <?php echo urldecode($row['explorekv_gh_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['explorekv_gh_content']) ?>
                    </p>
                    <?php if ($row['explorekv_gh_content2']) { ?>
                      <div class="collapse" id="collapseeco1-<?php echo $counter ?>">
                        <?php echo urldecode($row['explorekv_gh_content2']) ?>

                      </div>
                      <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseeco1-<?php echo $counter ?>" aria-expanded="false"
                          aria-controls="collapseExample">
                          Read More
                        </button>

                      </p>

                    <?php } ?>
                    <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_gh_locationurl']) ?>">
                        <?php echo urldecode($row['explorekv_gh_location']) ?></a>
                    </p>
                    <?php if ($row['explorekv_gh_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['explorekv_gh_hours'])); ?>
                      </p>
                    <?php } ?>

                    <?php if ($row['explorekv_gh_phone']) { ?>
                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['explorekv_gh_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                    <img src="assets/img/explorekv/golden/<?php echo $row['explorekv_gh_image'] ?>"
                      alt="<?php echo urldecode($row['explorekv_gh_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <hr>
              <?php }
              ?>


              <?php
              $counter++;
            }
            ?>

          </div><!-- End Tab Content 6 -->

          <div class="tab-pane" id="tab-1">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Sightseeing</h3>

                </p>
              </div>

              <!-- ======= About Section ======= -->
              <div class="container" data-aos="fade-up">


                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">


                  <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3 justify-content-center">
                      <li><a class="nav-link2 mx-4 active" data-bs-toggle="pill" href="#tabg1">Historical Places</a>
                      </li>
                      <li><a class="nav-link2 mx-4" data-bs-toggle="pill" href="#tabg2">Museums</a></li>
                      <li><a class="nav-link2 mx-4" data-bs-toggle="pill" href="#tabg3">Parks</a></li>

                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                      <div class="tab-pane fade show active" id="tabg1">
                        <?php

                        $query = "SELECT * FROM explorekv_ss  WHERE explorekv_ss_category='hs' ORDER BY explorekv_ss_order DESC  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['explorekv_ss_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_ss_content']) ?>
                                </p>
                                <?php if ($row['explorekv_ss_content2']) { ?>


                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['explorekv_ss_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_ss_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_ss_locationurl']) ?>">
                                      <?php echo urldecode($row['explorekv_ss_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_ss_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_ss_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['explorekv_ss_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['explorekv_ss_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/explorekv/ss/hs/<?php echo $row['explorekv_ss_image'] ?>"
                                  alt="<?php echo urldecode($row['explorekv_ss_title']) ?>" class="img-fluid"
                                  loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['explorekv_ss_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_ss_content']) ?>
                                </p>
                                <?php if ($row['explorekv_ss_content2']) { ?>

                                  <p>
                                    <?php echo urldecode($row['explorekv_ss_content2']) ?>
                                  </p>
                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['explorekv_ss_content']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_ss_locationurl']) ?>">
                                    <?php echo urldecode($row['explorekv_ss_location']) ?></a>
                                </p>
                                <?php if ($row['explorekv_ss_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_ss_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_ss_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['explorekv_ss_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/explorekv/ss/hs/<?php echo $row['explorekv_ss_image'] ?>"
                                  alt="<?php echo urldecode($row['explorekv_ss_title']) ?>" class="img-fluid"
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


                      </div><!-- End Tab 1 Content -->

                      <div class="tab-pane fade show" id="tabg2">

                        <?php

                        $query = "SELECT * FROM explorekv_ss  WHERE explorekv_ss_category='mm' ORDER BY explorekv_ss_order DESC  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['explorekv_ss_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_ss_content']) ?>
                                </p>
                                <?php if ($row['explorekv_ss_content2']) { ?>


                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['explorekv_ss_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_ss_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_ss_locationurl']) ?>">
                                      <?php echo urldecode($row['explorekv_ss_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_ss_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_ss_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['explorekv_ss_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['explorekv_ss_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/explorekv/ss/mm/<?php echo $row['explorekv_ss_image'] ?>"
                                  alt="<?php echo urldecode($row['explorekv_ss_title']) ?>" class="img-fluid"
                                  loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['explorekv_ss_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_ss_content']) ?>
                                </p>
                                <?php if ($row['explorekv_ss_content2']) { ?>

                                  <p>
                                    <?php echo urldecode($row['explorekv_ss_content2']) ?>
                                  </p>
                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['explorekv_ss_content']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_ss_locationurl']) ?>">
                                    <?php echo urldecode($row['explorekv_ss_location']) ?></a>
                                </p>
                                <?php if ($row['explorekv_ss_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_ss_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_ss_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['explorekv_ss_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/explorekv/ss/mm/<?php echo $row['explorekv_ss_image'] ?>"
                                  alt="<?php echo urldecode($row['explorekv_ss_title']) ?>" class="img-fluid"
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


                      </div><!-- End Tab 2 Content -->

                      <div class="tab-pane fade show" id="tabg3">

                        <?php

                        $query = "SELECT * FROM explorekv_ss  WHERE explorekv_ss_category='park' ORDER BY explorekv_ss_order DESC  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['explorekv_ss_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_ss_content']) ?>
                                </p>
                                <?php if ($row['explorekv_ss_content2']) { ?>


                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['explorekv_ss_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_ss_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_ss_locationurl']) ?>">
                                      <?php echo urldecode($row['explorekv_ss_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_ss_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_ss_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['explorekv_ss_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['explorekv_ss_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/explorekv/ss/park/<?php echo $row['explorekv_ss_image'] ?>"
                                  alt="<?php echo urldecode($row['explorekv_ss_title']) ?>" class="img-fluid"
                                  loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['explorekv_ss_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_ss_content']) ?>
                                </p>
                                <?php if ($row['explorekv_ss_content2']) { ?>

                                  <p>
                                    <?php echo urldecode($row['explorekv_ss_content2']) ?>
                                  </p>
                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['explorekv_ss_content']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_ss_locationurl']) ?>">
                                    <?php echo urldecode($row['explorekv_ss_location']) ?></a>
                                </p>
                                <?php if ($row['explorekv_ss_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_ss_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_ss_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['explorekv_ss_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/explorekv/ss/park/<?php echo $row['explorekv_ss_image'] ?>"
                                  alt="<?php echo urldecode($row['explorekv_ss_title']) ?>" class="img-fluid"
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
                      </div><!-- End Tab 3 Content -->

                    </div>

                  </div>

                </div>

              </div>


            </div>

          </div><!-- End Tab Content 7 -->



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