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

          <li class="nav-item col-4  col-lg d-flex justify-content-center">
            <a class="nav-link wtd1" id="tab-7-link" data-bs-toggle="tab" href="#tab-1" data-bs-target="#tab-1">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center align-middle text-break">Night Out</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

          <li class="nav-item col-4  col-lg d-flex justify-content-center">
            <a class="nav-link wtd4" id="tab-6-link" data-bs-toggle="tab" href="#tab-2" data-bs-target="#tab-2">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center align-middle">KV For Kids</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

          <li class="nav-item col-4  col-lg d-flex justify-content-center">
            <a class="nav-link wtd5" id="tab-6-link" data-bs-toggle="tab" href="#tab-3" data-bs-target="#tab-3">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center align-middle">Sports & Recreation</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

          <li class="nav-item col-4  col-lg d-flex justify-content-center">
            <a class="nav-link wtd3" id="tab-6-link" data-bs-toggle="tab" href="#tab-4" data-bs-target="#tab-4">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center align-middle">Instagrammable Cafes</h4>
            </a>
          </li><!-- End Tab 6 Nav -->




          <li class="nav-item col-4  col-lg d-flex justify-content-center">
            <a class="nav-link wtd2" id="tab-4-link" data-bs-toggle="tab" href="#tab-5" data-bs-target="#tab-5">
              <!-- <img src="assets/img/recommendation/2.png" class="img-fluid" alt=""> -->
              <h4 class="text-center align-middle">Beauty & Wellness</h4>
            </a>
          </li><!-- End Tab 4 Nav -->










        </ul>

        <div class="tab-content">




          <div class="tab-pane" id="tab-2">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>KV 4 Kids</h3>

              </div>

            </div>

            <?php

            $query = "SELECT * FROM explorekv_kv4k ORDER BY explorekv_kv4k_order DESC  ";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($counter % 2 != 0) {
                ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-2 ">
                    <h3>
                      <?php echo urldecode($row['explorekv_kv4k_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['explorekv_kv4k_content']) ?>
                    </p>
                    <?php if ($row['explorekv_kv4k_content2']) { ?>


                      <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                        <?php echo urldecode($row['explorekv_kv4k_content2']) ?>

                      </div>
                      <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                          aria-controls="collapseExample">
                          Read More
                        </button>

                      </p>
                    <?php } ?>

                    <?php if ($row['explorekv_kv4k_location']) { ?>

                      <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_kv4k_locationurl']) ?>">
                          <?php echo urldecode($row['explorekv_kv4k_location']) ?></a>
                      </p>
                    <?php } ?>

                    <?php if ($row['explorekv_kv4k_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['explorekv_kv4k_hours'])); ?>
                      </p>
                    <?php } ?>
                    <?php if ($row['explorekv_kv4k_phone']) { ?>

                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['explorekv_kv4k_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-1  text-center align-self-center">
                    <img src="assets/img/wtd/kv4kids/<?php echo $row['explorekv_kv4k_image'] ?>"
                      alt="<?php echo urldecode($row['explorekv_kv4k_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <hr>
              <?php } else { ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-md-1 order-2">
                    <h3>
                      <?php echo urldecode($row['explorekv_kv4k_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['explorekv_kv4k_content']) ?>
                    </p>
                    <?php if ($row['explorekv_kv4k_content2']) { ?>

                      <p>
                        <?php echo urldecode($row['explorekv_kv4k_content2']) ?>
                      </p>
                      <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                        <?php echo urldecode($row['explorekv_kv4k_content']) ?>

                      </div>
                      <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                          aria-controls="collapseExample">
                          Read More
                        </button>

                      </p>
                    <?php } ?>
                    <?php if ($row['explorekv_kv4k_location']) { ?>

                      <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_kv4k_locationurl']) ?>">
                          <?php echo urldecode($row['explorekv_kv4k_location']) ?></a>
                      </p>
                    <?php } ?>
                    <?php if ($row['explorekv_kv4k_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['explorekv_kv4k_hours'])); ?>
                      </p>
                    <?php } ?>

                    <?php if ($row['explorekv_kv4k_phone']) { ?>
                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['explorekv_kv4k_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                    <img src="assets/img/wtd/kv4kids/<?php echo $row['explorekv_kv4k_image'] ?>"
                      alt="<?php echo urldecode($row['explorekv_kv4k_title']) ?>" class="img-fluid" loading="lazy">
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
                <h3>Sports & Recreation</h3>

              </div>

              <!-- ======= About Section ======= -->
              <div class="container" data-aos="fade-up">


                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">


                  <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3 justify-content-center">
                      <li><a class="nav-link2 mx-4 active" data-bs-toggle="pill" href="#tabg1">Theme Parks</a>
                      </li>
                      <li><a class="nav-link2 mx-4" data-bs-toggle="pill" href="#tabg2">Extreme Sports</a></li>

                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                      <div class="tab-pane fade show active" id="tabg1">
                        <?php

                        $query = "SELECT * FROM explorekv_sports  WHERE explorekv_sports_category='tp' ORDER BY explorekv_sports_order DESC  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['explorekv_sports_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_sports_content']) ?>
                                </p>
                                <?php if ($row['explorekv_sports_content2']) { ?>


                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['explorekv_sports_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_sports_location']) { ?>

                                  <p><b>Location :</b><a
                                      href=" <?php echo urldecode($row['explorekv_sports_locationurl']) ?>">
                                      <?php echo urldecode($row['explorekv_sports_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_sports_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_sports_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['explorekv_sports_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['explorekv_sports_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/wtd/sports/theme/<?php echo $row['explorekv_sports_image'] ?>"
                                  alt="<?php echo urldecode($row['explorekv_sports_title']) ?>" class="img-fluid"
                                  loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['explorekv_sports_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_sports_content']) ?>
                                </p>
                                <?php if ($row['explorekv_sports_content2']) { ?>

                                  <p>
                                    <?php echo urldecode($row['explorekv_sports_content2']) ?>
                                  </p>
                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['explorekv_sports_content']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <?php if ($row['explorekv_sports_location']) { ?>

                                  <p><b>Location :</b><a
                                      href=" <?php echo urldecode($row['explorekv_sports_locationurl']) ?>">
                                      <?php echo urldecode($row['explorekv_sports_location']) ?></a>
                                  </p>
                                <?php } ?>
                                <?php if ($row['explorekv_sports_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_sports_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_sports_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['explorekv_sports_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/wtd/sports/theme/<?php echo $row['explorekv_sports_image'] ?>"
                                  alt="<?php echo urldecode($row['explorekv_sports_title']) ?>" class="img-fluid"
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

                        $query = "SELECT * FROM explorekv_sports  WHERE explorekv_sports_category='ex' ORDER BY explorekv_sports_order DESC  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['explorekv_sports_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_sports_content']) ?>
                                </p>
                                <?php if ($row['explorekv_sports_content2']) { ?>


                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['explorekv_sports_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_sports_location']) { ?>

                                  <p><b>Location :</b><a
                                      href=" <?php echo urldecode($row['explorekv_sports_locationurl']) ?>">
                                      <?php echo urldecode($row['explorekv_sports_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_sports_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_sports_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['explorekv_sports_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['explorekv_sports_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/wtd/sports/extreme/<?php echo $row['explorekv_sports_image'] ?>"
                                  alt="<?php echo urldecode($row['explorekv_sports_title']) ?>" class="img-fluid"
                                  loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['explorekv_sports_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_sports_content']) ?>
                                </p>
                                <?php if ($row['explorekv_sports_content2']) { ?>

                                  <p>
                                    <?php echo urldecode($row['explorekv_sports_content2']) ?>
                                  </p>
                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['explorekv_sports_content']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <p><b>Location :</b><a
                                    href=" <?php echo urldecode($row['explorekv_sports_locationurl']) ?>">
                                    <?php echo urldecode($row['explorekv_sports_location']) ?></a>
                                </p>
                                <?php if ($row['explorekv_sports_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_sports_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_sports_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['explorekv_sports_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/wtd/sports/extreme/<?php echo $row['explorekv_sports_image'] ?>"
                                  alt="<?php echo urldecode($row['explorekv_sports_title']) ?>" class="img-fluid"
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



                    </div>

                  </div>

                </div>

              </div>


            </div>


          </div><!-- End Tab Content 3 places of worship -->


          <div class="tab-pane" id="tab-4">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Instagrammable Cafes</h3>

              </div>

            </div>

            <?php

            $query = "SELECT * FROM explorekv_ig ORDER BY explorekv_ig_order DESC  ";
            $result = mysqli_query($db, $query);
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              if ($counter % 2 != 0) {
                ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-2 ">
                    <h3>
                      <?php echo urldecode($row['explorekv_ig_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['explorekv_ig_content']) ?>
                    </p>
                    <?php if ($row['explorekv_ig_content2']) { ?>


                      <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                        <?php echo urldecode($row['explorekv_ig_content2']) ?>

                      </div>
                      <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                          aria-controls="collapseExample">
                          Read More
                        </button>

                      </p>
                    <?php } ?>

                    <?php if ($row['explorekv_ig_location']) { ?>

                      <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_ig_locationurl']) ?>">
                          <?php echo urldecode($row['explorekv_ig_location']) ?></a>
                      </p>
                    <?php } ?>

                    <?php if ($row['explorekv_ig_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['explorekv_ig_hours'])); ?>
                      </p>
                    <?php } ?>
                    <?php if ($row['explorekv_ig_phone']) { ?>

                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['explorekv_ig_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-1  text-center align-self-center">
                    <img src="assets/img/wtd/ig/<?php echo $row['explorekv_ig_image'] ?>"
                      alt="<?php echo urldecode($row['explorekv_ig_title']) ?>" class="img-fluid" loading="lazy">
                  </div>
                </div>
                <hr>
              <?php } else { ?>
                <div class="row gy-4 mb-5">

                  <div class="col-md-8 order-md-1 order-2">
                    <h3>
                      <?php echo urldecode($row['explorekv_ig_title']) ?>
                    </h3>
                    <p>
                      <?php echo urldecode($row['explorekv_ig_content']) ?>
                    </p>
                    <?php if ($row['explorekv_ig_content2']) { ?>

                      <p>
                        <?php echo urldecode($row['explorekv_ig_content2']) ?>
                      </p>
                      <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                        <?php echo urldecode($row['explorekv_ig_content']) ?>

                      </div>
                      <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                          aria-controls="collapseExample">
                          Read More
                        </button>

                      </p>
                    <?php } ?>
                    <?php if ($row['explorekv_ig_location']) { ?>

                      <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_ig_locationurl']) ?>">
                          <?php echo urldecode($row['explorekv_ig_location']) ?></a>
                      </p>
                    <?php } ?>
                    <?php if ($row['explorekv_ig_hours']) { ?>
                      <p><b>Operation Hours :</b><br>
                        <?php echo str_replace("/", "<br>", urldecode($row['explorekv_ig_hours'])); ?>
                      </p>
                    <?php } ?>

                    <?php if ($row['explorekv_ig_phone']) { ?>
                      <p><b>Phone :</b><br>
                        <?php echo str_replace("/", "<br>", $row['explorekv_ig_phone']); ?>
                      </p>
                    <?php } ?>

                  </div>
                  <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                    <img src="assets/img/wtd/ig/<?php echo $row['explorekv_ig_image'] ?>"
                      alt="<?php echo urldecode($row['explorekv_ig_title']) ?>" class="img-fluid" loading="lazy">
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


          <div class="tab-pane" id="tab-5">


            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Beauty & Wellness</h3>

              </div>

              <!-- ======= About Section ======= -->
              <div class="container" data-aos="fade-up">


                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">


                  <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3 justify-content-center">
                      <li><a class="nav-link2  d-flex justify-content-center active" data-bs-toggle="pill"
                          href="#tabe1">Facial Spas</a></li>
                      <li><a class="nav-link2 d-flex justify-content-center" data-bs-toggle="pill" href="#tabe2">Hair &
                          Nail Salons</a>
                      </li>


                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                      <div class="tab-pane fade show active" id="tabe1">
                        <?php

                        $query = "SELECT * FROM explorekv_beauty WHERE explorekv_beauty_category='face'  ORDER BY explorekv_beauty_order DESC  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['explorekv_beauty_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_beauty_content']) ?>
                                </p>
                                <?php if ($row['explorekv_beauty_location']) { ?>

                                  <p><b>Location :</b><a
                                      href=" <?php echo urldecode($row['explorekv_beauty_locationurl']) ?>">
                                      <?php echo urldecode($row['explorekv_beauty_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_beauty_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_beauty_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['explorekv_beauty_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_beauty_phone'])); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/wtd/beauty/face/<?php echo urldecode($row['explorekv_beauty_image']) ?>"
                                  alt="<?php echo urldecode($row['explorekv_beauty_title']) ?>" class="img-fluid"
                                  loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['explorekv_beauty_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_beauty_content']) ?>
                                </p>
                                <?php if ($row['explorekv_beauty_location']) { ?>

                                  <p><b>Location :</b><a
                                      href=" <?php echo urldecode($row['explorekv_beauty_locationurl']) ?>">
                                      <?php echo urldecode($row['explorekv_beauty_location']) ?></a>
                                  </p>
                                <?php } ?>
                                <?php if ($row['explorekv_beauty_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_beauty_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_beauty_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_beauty_phone'])); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                              <img src="assets/img/wtd/beauty/face/<?php echo urldecode($row['explorekv_beauty_image']) ?>"
                                  alt="<?php echo urldecode($row['explorekv_beauty_title']) ?>" class="img-fluid"
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

                      <div class="tab-pane fade show" id="tabe2">

                        <?php

                        $query = "SELECT * FROM explorekv_beauty WHERE explorekv_beauty_category='salons  '  ORDER BY explorekv_beauty_order DESC  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['explorekv_beauty_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_beauty_content']) ?>
                                </p>
                                <?php if ($row['explorekv_beauty_location']) { ?>

                                  <p><b>Location :</b><a
                                      href=" <?php echo urldecode($row['explorekv_beauty_locationurl']) ?>">
                                      <?php echo urldecode($row['explorekv_beauty_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_beauty_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_beauty_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['explorekv_beauty_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_beauty_phone'])); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                              <img src="assets/img/wtd/beauty/salons/<?php echo urldecode($row['explorekv_beauty_image']) ?>"
                                  alt="<?php echo urldecode($row['explorekv_beauty_title']) ?>" class="img-fluid"
                                  loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['explorekv_beauty_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_beauty_content']) ?>
                                </p>
                                <p><b>Location :</b><a
                                    href=" <?php echo urldecode($row['explorekv_beauty_locationurl']) ?>">
                                    <?php echo urldecode($row['explorekv_beauty_location']) ?></a>
                                </p>
                                <?php if ($row['explorekv_beauty_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_beauty_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_beauty_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_beauty_phone'])); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                              <img src="assets/img/wtd/beauty/salons/<?php echo urldecode($row['explorekv_beauty_image']) ?>"
                                  alt="<?php echo urldecode($row['explorekv_beauty_title']) ?>" class="img-fluid"
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



                    </div>

                  </div>

                </div>

              </div>


            </div>


          </div><!-- End Tab Content 5 -->




          <div class="tab-pane" id="tab-1">

            <div class="row gy-10 mb-5">
              <div class="col-12 text-center">
                <h3>Night Out</h3>

              </div>

              <!-- ======= About Section ======= -->
              <div class="container" data-aos="fade-up">


                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">


                  <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3 justify-content-center">
                      <li><a class="nav-link2 mx-4 active" data-bs-toggle="pill" href="#taba1">Night-Life</a></li>
                      <li><a class="nav-link2 mx-4" data-bs-toggle="pill" href="#taba2">Bars</a></li>
                      <li><a class="nav-link2 mx-4" data-bs-toggle="pill" href="#taba3">Night Market</a></li>

                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                      <div class="tab-pane fade show active" id="taba1">
                        <?php

                        $query = "SELECT * FROM explorekv_no  WHERE explorekv_no_category='nl' ORDER BY explorekv_no_order DESC  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['explorekv_no_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_no_content']) ?>
                                </p>
                                <?php if ($row['explorekv_no_content2']) { ?>


                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['explorekv_no_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_no_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_no_locationurl']) ?>">
                                      <?php echo urldecode($row['explorekv_no_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_no_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_no_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['explorekv_no_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['explorekv_no_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/wtd/no/nl/<?php echo $row['explorekv_no_image'] ?>"
                                  alt="<?php echo urldecode($row['explorekv_no_title']) ?>" class="img-fluid"
                                  loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['explorekv_no_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_no_content']) ?>
                                </p>
                                <?php if ($row['explorekv_no_content2']) { ?>

                                  <p>
                                    <?php echo urldecode($row['explorekv_no_content2']) ?>
                                  </p>
                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['explorekv_no_content']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <?php if ($row['explorekv_no_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_no_locationurl']) ?>">
                                      <?php echo urldecode($row['explorekv_no_location']) ?></a>
                                  </p>
                                <?php } ?>
                                <?php if ($row['explorekv_no_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_no_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_no_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['explorekv_no_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/wtd/no/nl/<?php echo $row['explorekv_no_image'] ?>"
                                  alt="<?php echo urldecode($row['explorekv_no_title']) ?>" class="img-fluid"
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

                      <div class="tab-pane fade show" id="taba2">

                        <?php

                        $query = "SELECT * FROM explorekv_no  WHERE explorekv_no_category='bars' ORDER BY explorekv_no_order DESC  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['explorekv_no_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_no_content']) ?>
                                </p>
                                <?php if ($row['explorekv_no_content2']) { ?>


                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['explorekv_no_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_no_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_no_locationurl']) ?>">
                                      <?php echo urldecode($row['explorekv_no_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_no_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_no_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['explorekv_no_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['explorekv_no_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/wtd/no/bars/<?php echo $row['explorekv_no_image'] ?>"
                                  alt="<?php echo urldecode($row['explorekv_no_title']) ?>" class="img-fluid"
                                  loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['explorekv_no_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_no_content']) ?>
                                </p>
                                <?php if ($row['explorekv_no_content2']) { ?>

                                  <p>
                                    <?php echo urldecode($row['explorekv_no_content2']) ?>
                                  </p>
                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['explorekv_no_content']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_no_location']) { ?>

                                  <p><b>Location :</b><a href="<?php echo urldecode($row['explorekv_no_locationurl']) ?>">
                                      <?php echo urldecode($row['explorekv_no_location']) ?></a>
                                  </p>
                                <?php } ?>
                                <?php if ($row['explorekv_no_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_no_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_no_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['explorekv_no_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/wtd/no/bars/<?php echo $row['explorekv_no_image'] ?>"
                                  alt="<?php echo urldecode($row['explorekv_no_title']) ?>" class="img-fluid"
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

                      <div class="tab-pane fade show" id="taba3">

                        <?php

                        $query = "SELECT * FROM explorekv_no  WHERE explorekv_no_category='nm' ORDER BY explorekv_no_order DESC  ";
                        $result = mysqli_query($db, $query);
                        $counter = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          if ($counter % 2 != 0) {
                            ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-2 ">
                                <h3>
                                  <?php echo urldecode($row['explorekv_no_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_no_content']) ?>
                                </p>
                                <?php if ($row['explorekv_no_content2']) { ?>


                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['explorekv_no_content2']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_no_location']) { ?>

                                  <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_no_locationurl']) ?>">
                                      <?php echo urldecode($row['explorekv_no_location']) ?></a>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_no_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_no_hours'])); ?>
                                  </p>
                                <?php } ?>
                                <?php if ($row['explorekv_no_phone']) { ?>

                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['explorekv_no_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-1  text-center align-self-center">
                                <img src="assets/img/wtd/no/nm/<?php echo $row['explorekv_no_image'] ?>"
                                  alt="<?php echo urldecode($row['explorekv_no_title']) ?>" class="img-fluid"
                                  loading="lazy">
                              </div>
                            </div>
                            <hr>
                          <?php } else { ?>
                            <div class="row gy-4 mb-5">

                              <div class="col-md-8 order-md-1 order-2">
                                <h3>
                                  <?php echo urldecode($row['explorekv_no_title']) ?>
                                </h3>
                                <p>
                                  <?php echo urldecode($row['explorekv_no_content']) ?>
                                </p>
                                <?php if ($row['explorekv_no_content2']) { ?>

                                  <p>
                                    <?php echo urldecode($row['explorekv_no_content2']) ?>
                                  </p>
                                  <div class="collapse" id="collapseSS1-<?php echo $counter ?>">
                                    <?php echo urldecode($row['explorekv_no_content']) ?>

                                  </div>
                                  <p>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                      data-bs-target="#collapseSS1-<?php echo $counter ?>" aria-expanded="false"
                                      aria-controls="collapseExample">
                                      Read More
                                    </button>

                                  </p>
                                <?php } ?>
                                <p><b>Location :</b><a href=" <?php echo urldecode($row['explorekv_no_locationurl']) ?>">
                                    <?php echo urldecode($row['explorekv_no_location']) ?></a>
                                </p>
                                <?php if ($row['explorekv_no_hours']) { ?>
                                  <p><b>Operation Hours :</b><br>
                                    <?php echo str_replace("/", "<br>", urldecode($row['explorekv_no_hours'])); ?>
                                  </p>
                                <?php } ?>

                                <?php if ($row['explorekv_no_phone']) { ?>
                                  <p><b>Phone :</b><br>
                                    <?php echo str_replace("/", "<br>", $row['explorekv_no_phone']); ?>
                                  </p>
                                <?php } ?>

                              </div>
                              <div class="col-md-4 order-md-2 order-1 text-center align-self-center ">
                                <img src="assets/img/wtd/no/nm/<?php echo $row['explorekv_no_image'] ?>"
                                  alt="<?php echo urldecode($row['explorekv_no_title']) ?>" class="img-fluid"
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