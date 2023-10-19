<?php include('admin/functions.php');

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
  <title>Klang Valley 4 Locals - KL Highlights</title>

  <meta
    content="Immerse yourself in the best of Kuala Lumpur with our curated selection of KL Highlights. Start planning your trip today!"
    name="description">
  <meta content="" name="keywords">


  <!-- 
  <meta itemprop="name" content="KL The Guide - KL Highlights">
  <meta itemprop="description"
    content="Immerse yourself in the best of Kuala Lumpur with our curated selection of KL Highlights. Start planning your trip today!">
  <meta itemprop="image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg"> -->


  <!-- Open Graph / Facebook -->
  <!-- <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.kltheguide.com.my/highlights.php" />
  <meta property="og:title" content="KL The Guide - KL Highlights" />
  <meta property="og:description"
    content="Immerse yourself in the best of Kuala Lumpur with our curated selection of KL Highlights. Start planning your trip today!" />
  <meta property="og:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg"> -->

  <!-- Twitter -->
  <!-- <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://www.kltheguide.com.my/highlights.php" />
  <meta property="twitter:title" content="KL The Guide - KL Highlights" />
  <meta property="twitter:description"
    content="Immerse yourself in the best of Kuala Lumpur with our curated selection of KL Highlights. Start planning your trip today!" />
  <meta property="twitter:image" content="https://www.kltheguide.com.my/assets/img/kltgseo.jpg" /> -->

  <?php include 'header.php'; ?>

</head>

<body>

  <?php include 'nav.php'; ?>



  <main id="highlights">



    <br>


    <!-- ======= Features Section ======= -->
    <section id="features gy-4" class="features">

      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4 my-5 d-flex justify-content-center">

          <li class="nav-item col-4 col-md-4 col-lg-4 d-flex justify-content-center">
            <a class="nav-link " id="tab-1-link" href="#tab-1" data-bs-toggle="tab" data-bs-target="#tab-1">
              <img src="assets/img/highlights/<?php echo $tile1_photo1 ?>" class="" alt="">
              <h4 class="text-center align-middle text-wrap text-break">About Klang Valley</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-4 col-md-4 col-lg-4 d-flex justify-content-center">
            <a class="nav-link " id="tab-2-link" data-bs-toggle="tab" href="#tab-2" data-bs-target="#tab-2">
              <img src="assets/img/highlights/<?php echo $tile1_photo2 ?>" class="" alt="">

              <h4 class="text-center align-middle text-wrap text-break">Getting Around Klang Valley</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-4 col-md-4 col-lg-4 d-flex justify-content-center">
            <a class="nav-link " id="tab-3-link" data-bs-toggle="tab" href="#tab-3" data-bs-target="#tab-3">
              <img src="assets/img/highlights/<?php echo $tile1_photo3 ?>" class="" alt="">

              <h4 class="text-center align-middle text-wrap text-break">Travel Tips</h4>
            </a>
          </li><!-- End Tab 3 Nav -->



        </ul>

        <div class="tab-content">

          <div class="tab-pane " id="tab-1">
            <div class="row gy-4 ">
              <div class="col-lg-12 order-2 order-lg-1  " data-aos="fade-up" data-aos-delay="100">
                <h3>About Klang Valley</h3>

                <p>
                  Klang Valley is an urban melange in Malaysia, based in Kuala Lumpur, and encompasses its neighbouring
                  cities and towns in the state of Selangor. It is bound to Greater Kuala Lumpur, although there are
                  differences between the two.
                </p>
                <p>
                  The Klang Valley is physically delineated by the Titiwangsa Mountains to the north and the east and
                  the Straits of Malacca to the west. It stretches to Rawang in the northwest, to Semenyih in the
                  southeast, and to Klang and Port Klang in the southwest. The conurbation is the centre of Malaysia's
                  industry and trade.
                </p>
                <p>
                  The valley is named after the Klang River, the main river that passes through it, which begins at the
                  Klang Gates Quartz Ridge in Gombak and passes into the Malacca Straits in Port Klang. The river is
                  closely related to the early development of the region as a network of tin mining towns at the end of
                  the 19th century. The growth of the region took place mainly in the East-West direction (between
                  Gombak and Port Klang) but the urban areas surrounding Kuala Lumpur have since expanded north and
                  south towards the Perak and Negeri Sembilan borders.
                </p>
                <p>
                  Klang Valley is the densest region within Peninsular Malaysia. With close to 8 million people, it is
                  an urban agglomeration. Although the Klang Valley technically comprises of different cities and
                  suburbs, integration between these cities is very high, with a highly developed road network and an
                  enhanced integrated rail transit system. Many expressways cross the metropolis, making cars the most
                  convenient way to get around.
                </p>
                <p>
                  However, this has contributed to the Klang Valley's infamous traffic jams, which stretch several
                  kilometres of highways and make driving exhausting during peak hours. To curb this, the government has
                  implemented The Klang Valley integrated system which comprises of the KTM, LRT and MRT and monorail.
                  The system is currently being upgraded to include a new MRT line and LRT line as well as a monorail
                  serving Putrajaya.
                </p>
              </div>
              <!-- <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/features-1.svg" alt="" class="img-fluid">
              </div> -->
            </div>
          </div><!-- End Tab Content 1 -->

          <div class="tab-pane" id="tab-2">

            <div class="row gy-4">
              <div class="col-12 text-center">
                <h3>Getting Around KL</h3>


                </p>
              </div>

            </div> <!-- item -->
            <div class="row my-4 gy-4">
              <div class="col-lg-8 order-2 ">
                <h3>Train</h3>
                <p>
                The Klang Valley Integrated Transit System currently consists of three light rapid transit (LRT) lines, two commuter rail lines, one monorail line, one bus rapid transit line, and three airport rail links. The LRT lines connect the city centre with major suburbs around the city. The monorails serve various locations in the city centre. Several interchanging stations integrate these rail services.
                </p>

              </div>
              <div class="col-lg-4 order-1  text-center">
                <img src="assets/img/highlights/getaround/1.-lrt.png" alt="" class="img-fluid">
              </div>
            </div> <!-- item -->
            <hr>

            <div class="row my-4 gy-4">
              <div class="col-lg-8 order-1 ">
                <h3>E-hailing service
                </h3>
                <p>
                E-hailing has become one of the most popular modes of transport modes in Malaysia by locals and foreigners alike due to its high reliability and access due to its user-friendly mobile app. One of the best reasons to use E-hailing service are transparent and fixed fares made clear even before a booking is made. Passengers are also covered with accident insurance the moment they enter a car provided through the E-hailing service provider.
Fare: RM65 (including toll fares)
Duration: 1-2 hours (depending on traffic and destination)
                </p>

              </div>
              <div class="col-lg-4 order-2  text-center">
                <img src="assets/img/highlights/getaround/2.-mrt.png" alt="" class="img-fluid">
              </div>
            </div> <!-- item -->
            <hr>

            <div class="row my-4 gy-4">
              <div class="col-lg-8 order-2 ">
                <h3>Bus</h3>
                <p>
                Travelling by bus within the Klang Valley isn’t different from travelling in KL. Busses in the Klang Valley are operated by a variety of transport operators and have many uses. There are nine-stage bus operators in the Klang Valley, including Kuala Lumpur, which run approximately 3,200 stage buses together.
                </p>

              </div>
              <div class="col-lg-4 order-1  text-center">
                <img src="assets/img/highlights/getaround/3.-ktm-komuter.png" alt="" class="img-fluid">
              </div>
            </div> <!-- item -->
            <hr>

            <div class="row my-4 gy-4">
              <div class="col-lg-8 order-1 ">
                <h3>Expressways</h3>
                <p>
                Klang Valley has a wide chain of well-connected expressways. Most expressways in Kuala Lumpur adopt an open toll collection system. NKVE is the only closed toll system in Klang Valley. Payment options include stored value card Touch 'n Go or the electronic toll collection systems Smart TAG.
                </p>

              </div>
              <div class="col-lg-4 order-2  text-center">
                <img src="assets/img/highlights/getaround/4.-kl-monorail.png" alt="" class="img-fluid">
              </div>
            </div> <!-- item -->
            <hr>



          </div><!-- End Tab Content 2 -->

          <div class="tab-pane" id="tab-3">


            <div class="row gy-4">
              <div class="col-12 text-center">
                <h3>Travel Tips</h3>


                </p>
              </div>




              <div class="row my-4 gy-4">
                <div class="col-lg-8 order-2 ">
                  <h3>Weather
                  </h3>
                  <p>
                    The climate in KL is quite humid all year-round. Anyone travelling to KL must always be ready for
                    rains at any time of the year. Regardless, the best time to visit KL is from May-July or
                    December-February.
                  </p>
                  <p>The weather can be pretty hot between March - April. Due to the forest fires from Sumatera which
                    typically happens between June - August, the dust particles may cast a haze over KL thus making it
                    not
                    an ideal time to visit the city.</p>
                  <p>Resource Link: <a href="https://www.ventusky.com/">https://www.ventusky.com/</a></p>

                </div>
                <div class="col-lg-4 order-1  text-center">
                  <img src="assets/img/highlights/traveltips/weather.png" alt="" class="img-fluid">
                </div>
              </div> <!-- item -->
              <hr>

              <div class="row my-4 gy-4">
                <div class="col-lg-8 order-1 ">
                  <h3>Time Zone
                  </h3>
                  <p>
                    Standard Malaysian time is 8 hours ahead of GMT (GMT +8).Standard Malaysian time is 8 hours ahead of
                    GMT (GMT +8).
                  </p>
                  <p>Resource Link: <a href="https://www.timeanddate.com/">https://www.timeanddate.com/</a></p>

                </div>
                <div class="col-lg-4 order-2  text-center">
                  <img src="assets/img/highlights/traveltips/timezone.png" alt="" class="img-fluid">
                </div>
              </div> <!-- item -->
              <hr>

              <div class="row my-4 gy-4">
                <div class="col-lg-8 order-2 ">
                  <h3>Currency
                  </h3>
                  <p>
                    Malaysia’s currency unit is divided into two. The term Ringgit Malaysia (RM) is used to refer to
                    paper money. The denominations are RM1, RM5, RM10, RM 20, RM 50 and RM100. Whereas the coins are
                    referred to as sen (cents). The denominations are 5 sen, 10 sen, 20 sen and 50 sen.
                  </p>
                  <p>
                    Samples of Ringgit Malaysia Notes:<br>
                    1. Current Version of Notes and Coins<br>
                    https://www.bnm.gov.my/ (Sample of Notes)<br>
                    https://www.bnm.gov.my/ (Sample of Coins)<br>
                    2. Old Version of Notes and Coins<br>
                    https://www.bnm.gov.my/
                  </p>
                  <p>Resource Link: <a href="https://www.xe.com/">https://www.xe.com/</a></p>

                  <p>Resource Link: <a href="https://www.bnm.gov.my/">https://www.bnm.gov.my/</a></p>

                </div>
                <div class="col-lg-4 order-1  text-center">
                  <img src="assets/img/highlights/traveltips/currency-code.png" alt="" class="img-fluid">
                </div>
              </div> <!-- item -->
              <hr>

              <div class="row my-4 gy-4">
                <div class="col-lg-8 order-1 ">
                  <h3>Exchanging Money
                  </h3>
                  <p>
                    Exchanging money in Malaysia is relatively easy as you can find money changers easily. If you want
                    to withdraw money, make sure your home bank ATM card is supported by banks in Malaysia. Also, bear
                    in mind that your home bank can charge an overseas withdrawal fee. You may also realise that the
                    Malaysian ATM adds its own fee. Ask your home bank before you leave what charges will be added-and
                    check the ATM notices to understand any extra charges. Most places in Kuala Lumpur accept
                    debit/credit cards, just be sure to notify your home bank about your trip to avoid your transactions
                    to be barred and your card getting blocked.

                  </p>
                  <p>Resource Link: <a href="https://mtradeasia.com/">https://mtradeasia.com/
                    </a></p>

                </div>
                <div class="col-lg-4 order-2  text-center">
                  <img src="assets/img/highlights/traveltips/currency.png" alt="" class="img-fluid">
                </div>
              </div> <!-- item -->
              <hr>

              <div class="row my-4 gy-4">
                <div class="col-lg-8 order-2 ">
                  <h3>Visa and Passport</h3>
                  <p>
                    Passports must be valid for at least 6 months at the time of entry. Visa requirements vary from time
                    to time, so it is best to check with the Malaysian embassy or consulate or the Immigration
                    Department website.
                  </p>
                  <p>Resource Link: <a href="https://www.imi.gov.my/">https://www.imi.gov.my/
                    </a></p>
                </div>
                <div class="col-lg-4 order-1  text-center">
                  <img src="assets/img/highlights/traveltips/visa-and-passports.png" alt="" class="img-fluid">
                </div>
              </div> <!-- item -->
              <hr>

              <div class="row my-4 gy-4">
                <div class="col-lg-8 order-1 ">
                  <h3>Hotel</h3>
                  <p>
                    Be sure to have your hotel bookings printed. Booking a hotel in Kuala Lumpur is easy, but if you are
                    travelling during peak periods, you may want to book in advance to avoid disappointments. When
                    booking a stay, be sure to check how far it is from the places you want to visit. Check if your
                    hotel provides free Wi-Fi. Most hotels provide free Wi-Fi for their guests. But in case they don’t,
                    you will need to purchase a prepaid phone line with a data plan. There’s a myriad of budget to
                    5-star hotels to choose from in Kuala Lumpur.
                  </p>

                </div>
                <div class="col-lg-4 order-2  text-center">
                  <img src="assets/img/highlights/traveltips/hotel.png" alt="" class="img-fluid">
                </div>
              </div> <!-- item -->
              <hr>

              <div class="row my-4 gy-4">
                <div class="col-lg-8 order-2 ">
                  <h3>Internet
                  </h3>
                  <p>
                    If you do not plan to switch on your roaming while you are travelling to Kuala Lumpur, fret not as
                    most hotels give you access to their Wi-Fi. Whilst most cafés in Kuala Lumpur provide free Wi-Fi
                    with the purchase of a drink or food. There are also many free Wi-Fi hotspot areas in Kuala Lumpur
                    so make sure to check out the area for free Wi-Fi. It is also advisable to buy a prepaid SIM card
                    with a data plan to make things easier when you are on the go.
                  </p>

                </div>
                <div class="col-lg-4 order-1  text-center">
                  <img src="assets/img/highlights/traveltips/wifi-wifi-rental.png" alt="" class="img-fluid">
                </div>
              </div> <!-- item -->
              <hr>

              <div class="row my-4 gy-4">
                <div class="col-lg-8 order-1 ">
                  <h3>Clothing</h3>
                  <p>
                    The heat and humidity in Kuala Lumpur can be intense. Therefore, be sure to pack light and
                    breathable clothes that will help you stay cool and avoid heatstroke. Cotton is a good choice, as it
                    is designed to absorb moisture. If your hotel comes with a swimming pool or you are planning to head
                    to the beach, don’t forget to pack your swimsuit.
                  </p>

                </div>
                <div class="col-lg-4 order-2  text-center">
                  <img src="assets/img/highlights/traveltips/clothing.png" alt="" class="img-fluid">
                </div>
              </div> <!-- item -->
              <hr>

              <div class="row my-4 gy-4">
                <div class="col-lg-8 order-2 ">
                  <h3>Comfortable Footwear
                  </h3>
                  <p>
                    Since you will be doing a LOT of walking so you should consider wearing sensible shoes that are very
                    comfortable. We recommend packing a pair of sneakers as well as flats and sandals.
                  </p>

                </div>
                <div class="col-lg-4 order-1  text-center">
                  <img src="assets/img/highlights/traveltips/comfortable-wear.png" alt="" class="img-fluid">
                </div>
              </div> <!-- item -->
              <hr>

              <div class="row my-4 gy-4">
                <div class="col-lg-8 order-1 ">
                  <h3>Sunscreen

                  </h3>
                  <p>
                    Make sure to pack in your sunscreen, especially if you don’t want to be sunburnt. The sun can be
                    scorching hot at times.
                  </p>

                </div>
                <div class="col-lg-4 order-2  text-center">
                  <img src="assets/img/highlights/traveltips/sunscreen.png" alt="" class="img-fluid">
                </div>
              </div> <!-- item -->

              <hr>

              <div class="row my-4 gy-4">
                <div class="col-lg-8 order-2 ">
                  <h3>Raingear
                  </h3>
                  <p>
                    Since the rain can be pretty unpredictable in Kuala Lumpur, don’t forget to pack your raincoat or a
                    travel-sized umbrella. You don’t want to be soaked to your skin if it rains suddenly.
                  </p>

                </div>
                <div class="col-lg-4 order-1  text-center">
                  <img src="assets/img/highlights/traveltips/raingear.png" alt="" class="img-fluid">
                </div>
              </div> <!-- item -->
              <hr>

              <div class="row my-4 gy-4">
                <div class="col-lg-8 order-1 ">
                  <h3>Medicine
                  </h3>
                  <p>
                    DO NOT forget to pack your prescription tablets and any other medicines that you think you might
                    need in case you fall sick.
                  </p>

                </div>
                <div class="col-lg-4 order-2  text-center">
                  <img src="assets/img/highlights/traveltips/medicine.png" alt="" class="img-fluid">
                </div>
              </div> <!-- item -->
              <hr>

              <div class="row my-4 gy-4">
                <div class="col-lg-8 order-2 ">
                  <h3>Prepaid Sim Card
                  </h3>
                  <p>
                    Malaysia mobile phones use the GSM network, if your phone has a roaming facility, it will
                    automatically hook-up to a local network. Otherwise, prepaid sim cards can be purchased starting at
                    RM20 for registration and talk time. The three main phone providers in Malaysia are Maxis, Celcom
                    and DiGi. Buying prepaid sim cards is easy since you can find kiosks selling prepaid sim cards
                    almost everywhere.
                  </p>
                  <p>Three Main Phone Providers:<br>
                    1. Maxis / Hotlink<br>
                    2. Celcom<br>
                    3. Digi<br>

                    Other Phone Providers:<br>
                    1. U Mobile<br>
                    2. Tune Talk<br>
                    3. Unifi<br>
                    4. Yes<br>
                    5. redONE<br>
                    6. MCalls<br>
                    7. Yoodo<br>
                    8. XOX</p>
                </div>
                <div class="col-lg-4 order-1  text-center">
                  <img src="assets/img/highlights/traveltips/simcardanddiallingprefixes.png" alt="" class="img-fluid">
                </div>
              </div> <!-- item -->
              <hr>

              <div class="row my-4 gy-4">
                <div class="col-lg-8 order-1 ">
                  <h3>Dialing Prefixes

                  </h3>
                  <p>
                    Each city has its unique area code for landlines. 03 is Kuala Lumpur’s area code followed by the
                    eight-digit number when you call from your mobile phone. Example: 03-12345678 Whereas, every call to
                    a mobile phone requires a three-digit prefix (Maxis = 012, Celcom = 019, DiGi = 016), followed by
                    the seven-digit or eight-digit subscriber number. Example: 012-123 4567
                  </p>
                  <p>Resource Link: <a href="https://www.imi.gov.my/">https://www.imi.gov.my/
                    </a></p>
                </div>
                <div class="col-lg-4 order-2  text-center">
                  <img src="assets/img/highlights/traveltips/dialling.png" alt="" class="img-fluid">
                </div>
              </div> <!-- item -->
              <hr>


              <div class="row my-4 gy-4">
                <div class="col-lg-8 order-2 ">
                  <h3>Emergency Number


                  </h3>
                  <p>
                    Police/Ambulance: 999 (112 from a mobile phone)
                    Fire and Rescue Department (Bomba): 994 (112 from a mobile phone)
                    Civil Defence Tel: 991
                    Tourist Police Hotline Tel: 03-2149 6590 </p>
                  <p>Resource Link: <a href="https://www.mm2h.com/">https://www.mm2h.com/
                    </a></p>
                </div>
                <div class="col-lg-4 order-1  text-center">
                  <img src="assets/img/highlights/traveltips/emergency.png" alt="" class="img-fluid">
                </div>
              </div> <!-- item -->
              <hr>

            </div><!-- End Tab Content 3 -->


          </div>

        </div>
    </section><!-- End Features Section -->


    <div class="row d-flex justify-content-center btmbanner mt-4">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3696733888071014"
        crossorigin="anonymous"></script>
      <!-- Index Hero KLTG -->
      <ins class="adsbygoogle" align="center" data-ad-client="ca-pub-3696733888071014" data-ad-slot="5212427798"
        data-ad-format="auto" data-full-width-responsive="true"></ins>
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