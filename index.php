<!DOCTYPE html>
<html lang="en">
<?php
include "connection/connect.php";
include "track.php";
include "include/header.php";

error_reporting(0);
session_start();

?>

<!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * Github Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="#">
  <title>Marinex | Best Shippping for all global services | Track & Ship</title>
  <meta name="description" content="Pakcages shipping, envelope shipping, track, ship, global shipping, best shipping company">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/blog.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/jpg" href="/images/favicon.png" />
  <script src="https://kit.fontawesome.com/41097bf629.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>


<body>


 <section class="hero">
        <div class="hero-slideshow">
            <div class="hero-slide active" style="background-image: url('images/img/ship-facility-3.jpg');"></div>
            <div class="hero-slide" style="background-image: url('images/img/ship-facility-2.jpg');"></div>
            <div class="hero-slide" style="background-image: url('images/img/ship-facility-1.jpg');"></div>
            <div class="hero-slide" style="background-image: url('images/img/ship-facility-4.jpg');"></div>
            <div class="hero-slide" style="background-image: url('images/img/ship-facility-5.jpg');"></div>
        </div>
        <div class="hero-content">
            <h1>Accelerating Logistics <br /> with Precision.</h1>

            <p>
                Seamlessly transporting goods across cities, countries, <br /> and continents.
            </p>

            <form class="search-card" action="tracking.php" method="post">
                <p class="field-name">Track Your Parcel</p>
                <div class="field">
                    <i class="fa-solid fa-location-dot"></i>
                    <input type="text" name="search" placeholder="Tracking number(s)" required />
                </div>
                <button class="search-btn" type="submit" value="Track">Track Your Package <i class="fa-solid fa-arrow-right"></i></button>
                    <div class="under-submit-track">
                        <p>Multiple Tracking Numbers</p>
                        <p> <i class="fa-regular fa-circle-question"></i> Need Help</p>
                    </div>
                    <div class="sample-tracking-code">
            <p>Sample Tracking Code: <span>2VH488487365431</span></p>
          </div>
                <?php
                // (B) PROCESS SEARCH WHEN FORM SUBMITTED
                if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["search"])) {
                    // (B1) SEARCH FOR TRACKING INFORMATION
                    require "track.php";
                }
                ?>

            </form>



        </div>
    </section>


  <section id="wrapper">
    <div class="logos-partnership">
      <p>These logos represent our commitment to quality and reliability across industries.</p>
      <div class="logos-slider">
        <div class="logos-box" id="logosBox">
          <img src="./images/dhl_logo.png" />
          <img src="./images/fedex_logo.svg" />
          <img src="./images/cmacgm_logo.svg" />
          <img src="./images/maersk_logo.svg" />
          <img src="./images/panalpina_logo.svg" />
          <img src="./images/cargill_logo.svg" />
          <img src="./images/expeditors_logo.svg" />
          <img src="./images/newups_logo.svg" />
          <img src="./images/cev_logo.svg" />
          <img src="./images/dhl_logo.png" />
          <img src="./images/fedex_logo.svg" />
          <img src="./images/cmacgm_logo.svg" />

        </div>
      </div>

    </div>
  </section>
  <section id="wrapper">
    <div class="about-us">
      <div class="about-us-left">
        <p class="first-about-icon"><i class="fa-solid fa-building"></i> ABOUT US
        </p>
        <h1>Provide Logistics <br /> Support since 1996 </h1>
        <p class="few-about-us">With a legacy of excellence since 1996, we provide comprehensive logistics solutions tailored to your needs. Our commitment to reliability and customer satisfaction sets us apart.</p>
        <p class="second-about-icon"><i class="fa-solid fa-compass"></i> Read More About Us
        </p>
      </div>
      <div class="about-us-right">
        <img src="images/img/sipsip.jpg" alt="ship" />
      </div>

    </div>
  </section>
  <section id="wrapper" class="services-section">
     <h1>EXPLORE OUR SERVICES</h1>
    <div class="content-services">
      <div class="image-box">
        <img src="images/img/road-freight.png" alt="Truck Logistics">
      </div>

      <div class="services">
        <div class="service-item">
          <h3>Logistics solutions for all shippers <span>⌄</span></h3>
        </div>

        <div class="service-item active">
          <h3>ROAD FREIGHT <span>⌃</span></h3>
          <div class="service-content">
            <p>
              Essentials trucking is a widely used mode of transport which
              offers flexibility as well as efficiency in the deliveries of
              goods. Learn about Marinex Express – we cater to a wide range of customer needs and provide a comprehensive solution for document and parcel shipping.
            </p>
            <a href="#" class="btn">EXPLORE ROAD FREIGHT</a>
            <div class="zigzag"></div>
          </div>
        </div>

       
      </div>

      
    </div>


     <div class="content-services">
      <div class="image-box">
        <img src="images/img/cargo-freight.png" alt="Truck Logistics">
      </div>

      <div class="services">
        <div class="service-item">
          <h3>Cargo Shipping - Business Only <span>⌄</span></h3>
        </div>

        <div class="service-item cargo">
          <h3>CARGO FREIGHT  <span>⌃</span></h3>
          <div class="service-content">
            <p>
             We facilitate the movement of goods between producers, suppliers, and consumers across different regions and countries.
            </p>
            <a href="#" class="btn">EXPLORE CARGO EXPRESS</a>
            <div class="zigzag"></div>
          </div>
        </div>

       
      </div>
    </div>


        <div class="content-services">
      <div class="image-box">
        <img src="images/img/retailer-shipping.png" alt="Truck Logistics">
      </div>

      <div class="services">
        <div class="service-item">
          <h3>Retailer or Volume Shipping - Bussiness Only <span>⌄</span></h3>
        </div>

        <div class="service-item retailer">
          <h3>Retailer Shipping <span>⌃</span></h3>
          <div class="service-content">
            <p>
              Essentials trucking is a widely used mode of transport which
              offers flexibility as well as efficiency in the deliveries of
              goods. Learn about Marinex Express – we cater to a wide range of customer needs and provide a comprehensive solution for document and parcel shipping.
            </p>
            <a href="#" class="btn">EXPLORE RETAILER SHIPPING</a>
            <div class="zigzag"></div>
          </div>
        </div>

       
      </div>
    </div>

    <div class="content-services">
      <div class="image-box">
        <img src="images/img/enterprise-shipping.png" alt="Truck Logistics">
      </div>

      <div class="services">
        <div class="service-item">
          <h3>Enterprise Logistics Services - Bussiness Only <span>⌄</span></h3>
        </div>

        <div class="service-item enterprise">
          <h3>Enterprise Shipping <span>⌃</span></h3>
          <div class="service-content">
            <p>
              Depending on your expertise and resources, you can tailor your offerings to meet the specific needs of your clients and differentiate yourself in the market.
            </p>
            <a href="#" class="btn">EXPLORE ENTERPRISE SHIPPING</a>
            <div class="zigzag"></div>
          </div>
        </div>

       
      </div>

      
    </div>
  </section>

  <section id="wrapper" class="cbx-section">
  <div class="cbx-header">
    <span class="cbx-badge">KEY BENEFITS</span>
    <h2 class="cbx-title">Benefits of our services</h2>
  </div>

  <div  class="cbx-card-wrapper">

    <div class="cbx-card">
      <div class="cbx-bg-image" style="background-image:url('images/img/safety.jpg');"></div>
      <div class="cbx-bg-overlay"></div>
      <div class="cbx-content">
        <div class="cbx-icon"><img src="images/icons/safety.png" /></div>
        <h3 class="cbx-card-title">Safety & top quality</h3>
        <p class="cbx-card-text">
          Advanced safety measures combined with consistent, top-tier service quality.
        </p>
      </div>
    </div>

    <div class="cbx-card">
      <div class="cbx-bg-image" style="background-image:url('images/img/delivery.jpg');"></div>
      <div class="cbx-bg-overlay"></div>
      <div class="cbx-content">
        <div class="cbx-icon"><img src="images/icons/delivery.png" /></div>
        <h3 class="cbx-card-title">On time <br /> delivery</h3>
        <p class="cbx-card-text">
         Fast, reliable delivery that arrives exactly when promised.
        </p>
      </div>
    </div>

    <div class="cbx-card">
      <div class="cbx-bg-image" style="background-image:url('images/img/insurance.jpg');"></div>
      <div class="cbx-bg-overlay"></div>
      <div class="cbx-content">
        <div class="cbx-icon"><img src="images/icons/dollar.png" /></div>
        <h3 class="cbx-card-title">Insurance coverage</h3>
        <p class="cbx-card-text">
          Comprehensive insurance protection for complete peace of mind.
        </p>
      </div>
    </div>

    <div class="cbx-card">
      <div class="cbx-bg-image" style="background-image:url('images/img/support.jpg');"></div>
      <div class="cbx-bg-overlay"></div>
      <div class="cbx-content">
        <div class="cbx-icon"><img src="images/icons/customer-support.png" /></div>
        <h3 class="cbx-card-title">24/7 customer support</h3>
        <p class="cbx-card-text">
          Reliable customer support available day and night.
        </p>
      </div>
    </div>

  </div>
</section>
<section id="wrapper" class="lgx-service">
  <div class="lgx-container">

    <!-- Left Content -->
    <div class="lgx-content">
      <span class="cbx-badge">SERVICE OVERVIEW</span>

      <h1 class="lgx-title">
        Delivering your goods efficiently, no matter the distance
      </h1>

      <p class="lgx-text">
        From local deliveries to long-distance shipments, we ensure your
        goods reach their destination safely and on time.
      </p>

      <p class="lgx-text">
        Our reliable last mile delivery solutions combine speed, precision,
        and care, so you can focus on your business while we handle the logistics.
      </p>

      <a href="#" class="lgx-button">
        Ship now
        <img src="images/icons/arrow-link.png" class="lgx-arrow" alt="arrow up right" />
      </a>
    </div>
    <div class="lgx-images">
      <div class="lgx-image-main">
        <img src="images/img/services-1.png" alt="Delivery worker" />
      </div>

      <div class="lgx-image-stack">
        <div class="lgx-image-small">
          <img src="images/img/services-2.png" alt="Box delivery" />
        </div>
        <div class="lgx-image-small">
          <img src="images/img/services-3.png" alt="Warehouse workers" />
        </div>
      </div>
    </div>

  </div>
</section>
  <section id="wrapper">
    <div class="track-container">
      <p class="cbx-badge">HOW IT WORKS</p>
      <div class="track-flow">
        <div class="track-step">
          <div class="track-icon-box">
            <img src="https://img.icons8.com/ios/50/124076/checked--v1.png" alt="Register">
          </div>
          <div class="track-step-number">01</div>
          <h3 class="track-step-title">Parcel Register</h3>
          <p class="track-step-desc">Register your parcel with us by visiting our office or contact us.</p>
        </div>

        <div class="track-step">
          <div class="track-icon-box">
            <img src="https://img.icons8.com/ios/50/124076/fork-lift.png" alt="Loading">
          </div>
          <div class="track-step-number">02</div>
          <h3 class="track-step-title">Parcel Loading</h3>
          <p class="track-step-desc">Parcel will be prepared for instant shipping after registration.</p>
        </div>

        <div class="track-step">
          <div class="track-icon-box">
            <img src="https://img.icons8.com/ios/50/124076/delivery.png" alt="In-Transit">
          </div>
          <div class="track-step-number">03</div>
          <h3 class="track-step-title">Parcel In-Transit</h3>
          <p class="track-step-desc">Track every location of your package while in transit via our tracking page.</p>
        </div>

        <div class="track-step">
          <div class="track-icon-box">
            <img src="https://img.icons8.com/ios/50/124076/handshake--v1.png" alt="Delivery">
          </div>
          <div class="track-step-number">04</div>
          <h3 class="track-step-title">Parcel Delivery</h3>
          <p class="track-step-desc">Get your package delivered at your destination with no hassle.</p>
        </div>
      </div>
    </div>

  </section>

  <section id="wrapper">

  </section>
  <section id="wrapper">
    <div class="newway-chose-us">
      <div class="newway-chose-us-left">
        <h1>REASONS TO CHOOSE US</h1>
        <p>Our dedication to providing the best service is what makes us a leader in the logistics industry. We are proud to offer a range of benefits that ensure your shipments are handled with the utmost care and professionalism.</p>

        <div class="newway-service">
          <div class="inner-newway-service">
            <div class="newway-icon"><i class="fa-solid fa-user-group"></i></div>
            <p><span>Top Team:</span> Our experienced professionals are the backbone of our service, ensuring your shipments are handled with expertise and care.</p>
          </div>
          <div class="inner-newway-service">
            <div class="newway-icon"><i class="fa-solid fa-headset"></i></div>
            <p><span>Customer Support:</span> We offer 24/7 customer support to assist you with any questions or concerns you may have at any stage of the shipping process.</p>
          </div>
          <div class="inner-newway-service">
            <div class="newway-icon"><i class="fa-solid fa-sack-xmark "></i></div>
            <p><span>Competitives Rate:</span> We provide cost-effective shipping solutions without compromising on quality or reliability, offering you the best value for your money.</p>
          </div>
        </div>

      </div>
      <div class="newway-chose-us-right">
        <img src="./images//newmaearsk.jpg" />

      </div>

    </div>
  </section>
  <section id="wrapper">
    <div class="worldwide">
      <div class="world-wide-top">
        <p>Industry Knowledge</p>
        <h1>Powering innovation <br /> across industries, globally.</h1>
        <img src="./images/worldmap_with_grey_dots.svg" />
      </div>
      <div class="info-equity">
        <div class="equity">
          <h1>$5b+</h1>
          <hr class="linetwo-style" />
          <p>Equity value</p>
          <p>Our strong financial foundation and significant equity value demonstrate our stability and long-term commitment to the logistics industry.</p>
          <p>
        </div>

        <div class="equity">
          <h1>932</h1>
          <hr class="linetwo-style" />
          <p>Ventures</p>
          <p>We have successfully launched and supported numerous ventures, expanding our reach and capabilities across the globe.</p>
          <p>
        </div>
        <div class="equity">
          <h1>81%</h1>
          <hr class="linetwo-style" />
          <p>Succesful Pilots</p>
          <p>Our high rate of successful pilot programs showcases our innovative approach and our ability to adapt to new challenges and technologies.</p>
          <p>
        </div>
        <div class="equity">
          <h1>85+</h1>
          <hr class="linetwo-style" />
          <p>Fortune 500 patners</p>
          <p>We are trusted by over 85 Fortune 500 companies, a testament to our reliability and the high quality of our services.</p>
          <p>
        </div>
      </div>

    </div>
  </section>
<section class="ol-testimonial-section">
  <div class="ol-testimonial-header">
    <p class="ol-testimonial-tag">TESTIMONIALS</p>
    <h2 class="ol-testimonial-title">
      What Clients Say About Us
    </h2>
  </div>

  <div class="ol-testimonial-slider">
    <div id="olTestiTrack" class="ol-testimonial-track">
      <?php
      $sql = "SELECT name, role, message, image_url
              FROM testimonials
              WHERE is_active = 1
              ORDER BY created_at DESC";

      $result = $conn->query($sql);

      if ($result) {
        while ($row = $result->fetch_assoc()) {
      ?>
          <div class="ol-testimonial-card">
            <div class="ol-testimonial-avatar">
              <img src="<?php echo htmlspecialchars($row['image_url']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
            </div>

            <p class="ol-testimonial-text">
              <?php echo htmlspecialchars($row['message']); ?>
            </p>

            <div class="ol-testimonial-footer">
              <div>
                <strong class="ol-testimonial-name"><?php echo htmlspecialchars($row['name']); ?></strong>
                <span class="ol-testimonial-role"><?php echo htmlspecialchars($row['role']); ?></span>
              </div>

              <div class="ol-testimonial-stars">★★★★★</div>
            </div>
          </div>
      <?php
        }
      }
      ?>
    </div>
  </div>

  <div id="olTestiDots" class="ol-testimonial-dots"></div>
</section>



  <section id="wrapper" class="blog-section">

  <div class="nu-container">
    <div class="nu-header">
      <div class="nu-header-text">
        <h2 class="nu-title">
          The latest articles and <br class="off-br"> industry insights
        </h2>
      </div>

      <a href="#" class="nu-btn">View All</a>
    </div>

    <div class="nu-card-grid"> 

  <?php

 $query_res = mysqli_query($conn, "
    SELECT
        LOWER(CONCAT(
            SUBSTR(HEX(id), 1, 8), '-',
            SUBSTR(HEX(id), 9, 4), '-',
            SUBSTR(HEX(id), 13, 4), '-',
            SUBSTR(HEX(id), 17, 4), '-',
            SUBSTR(HEX(id), 21)
        )) AS id,
        title,
        blog,
        img,
        created_at
    FROM ship_blog
    ORDER BY created_at DESC
    LIMIT 3
");

  while ($r = mysqli_fetch_array($query_res)) {

      $short_blog = mb_strimwidth(strip_tags($r['blog']), 0, 200, '...');
  ?>

      <article class="nu-card">
          <img
              src="admin/assets/blog_img/<?php echo htmlspecialchars($r['img']); ?>"
              alt="<?php echo htmlspecialchars($r['title']); ?>"
              class="nu-card-image"
          >

          <div class="nu-card-body">
              <div class="nu-card-meta">
                  <span class="nu-date">
                      <?php echo date("d M Y", strtotime($r['created_at'])); ?>
                  </span>
                  <span class="nu-tag">News</span>
              </div>

              <h3 class="nu-card-title">
                  <a href="blog.php?blog_id=<?php echo $r['id']; ?>">
                      <?php echo htmlspecialchars($r['title']); ?>
                  </a>
              </h3>

              <p class="nu-card-text">
                  <?php echo $short_blog; ?>
              </p>

              <a href="blog.php?blog_id=<?php echo $r['id']; ?>" class="nu-link">
                  Learn More →
              </a>

          </div>
      </article>

  <?php } ?>

</div>

  </div>

</section>



  <section id="wrapper">
    <div class="freq">
      <div class="freq-left">
        <h4> Frequently <br /> Asked Questions </h4>
        <p>Our experts are ready to answer <br /> all your questions</p>
      </div>
      <div class="freq-right">
        <div class="cover-que">
          <div class="faq-item">
            <div class="question">
              <p class="question-title">How can I track my order?</p>
              <div>
                <img class="minus-freq" src="./images/minus-svgrepo-com.svg" />
                <img class="plus-freq" src="./images/plus-large-svgrepo-com.svg" />

              </div>
            </div>
            <div class="answer">
              <p> To find out where your shipment is, you can use our online tracking system. Simply visit our website and enter your tracking number in the tracking section. This will provide you with the most up-to-date information on the status and location of your package. Tracking your order is the best way to know exactly where it is and when you can expect delivery </p>
            </div>
            <hr class="line-que" />
            <hr class="line-que-neutral" />
          </div>
        </div>
        <div class="cover-que">
          <div class="faq-item">
            <div class="question">
              <p class="question-title">How long will delivery take? </p>
              <div>
                <img class="minus-freq" src="./images/minus-svgrepo-com.svg" />
                <img class="plus-freq" src="./images/plus-large-svgrepo-com.svg" />

              </div>
            </div>
            <div class="answer">
              <p>Delivery times vary depending on the destination, shipping method selected, and the origin of the shipment. Estimated shipping times are typically provided during the checkout or order confirmation process. You can also check the estimated delivery date by tracking your order on our website. Please note that while we strive to meet all estimated timelines, occasional delays may occur due to customs, weather, or other unforeseen circumstances.</p>
            </div>
            <hr class="line-que" />
            <hr class="line-que-neutral" />
          </div>
        </div>
        <div class="cover-que">
          <div class="faq-item">
            <div class="question">
              <p class="question-title">How much does shipping cost?</p>
              <div>
                <img class="minus-freq" src="./images/minus-svgrepo-com.svg" />
                <img class="plus-freq" src="./images/plus-large-svgrepo-com.svg" />
              </div>
            </div>
            <div class="answer">
              <p>Yes, we do offer discounted shipping on all orders. Shipping costs vary depending on the destination and the size of your order, but we work hard to keep rates as low as possible for our customers. During promotional periods or for qualifying purchases, you may also be eligible for additional shipping discounts. Please feel free to contact us with your location and order details, and we’ll be happy to provide a customized shipping quote.</p>
            </div>
            <hr class="line-que" />
            <hr class="line-que-neutral" />
          </div>
        </div>
        <div class="cover-que">
          <div class="faq-item">
            <div class="question">
              <p class="question-title">Are there any restricted or prohibited items?</p>
              <div>
                <img class="minus-freq" src="./images/minus-svgrepo-com.svg" />
                <img class="plus-freq" src="./images/plus-large-svgrepo-com.svg" />
              </div>
            </div>
            <div class="answer">
              <p>You can ship a wide range of items, including personal effects, documents, electronics, commercial goods, and more. However, certain items are restricted or prohibited due to safety, legal, or regulatory reasons. These typically include:

                Hazardous materials (e.g., flammable liquids, explosives, corrosives)

                Perishable goods (unless properly packaged and authorized)

                Illegal items (e.g., counterfeit goods, narcotics)

                Live animals or plants (subject to specific regulations)

                Valuables such as cash, precious metals, or jewelry (varies by carrier)

                Weapons and ammunition (subject to local and international laws)

                Batteries or devices containing lithium batteries (restricted unless properly packaged)

                We recommend checking with our team or reviewing the shipping guidelines specific to your destination and service provider. Customs regulations can also vary by country, so it's important to verify whether your item is allowed before shipment. </p>
            </div>
            <hr class="line-que" />
            <hr class="line-que-neutral" />
          </div>
        </div>


      </div>

    </div>

  </section>
  <?php include "include/footer.php" ?>
   <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.hero-slide');
            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.remove('active');
                    if (i === index) {
                        slide.classList.add('active');
                    }
                });
            }

            setInterval(() => {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }, 5000); // 
        });
    </script>
   </body>

</html>


<!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * Github Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->