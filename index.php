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
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animsition.min.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="./js/script.js"></script>
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




  <div class="hero">
    <div class="brief">
      <div class="brief-inner">
        <h1>Accelerating logistics <br /> through innovation, <br /> reliability, and precision.</h1>
        <p>We provide a flexible, helpful, and genuine 24/7 service. feel free to check out the full range of services we offer and if there is something we have not mentioned then just ask as we are pretty certain we can help. </p>
      </div>
      <div class="Track-pc">
        <div class="hero-inner">
          <div class="hero-text">
            <p>Tracking Order</p>
            <div class="track-cover">
              <form method="post" action="tracking.php">
                <div class="the-input-cover"><i class="fa-solid fa-location-dot"></i><input class="track-input-pc" type="text" name="search" placeholder="Tracking number(s)" required></div>
                <div class="overal-submit-track-pc-cover">
                  <div class="cover-submit-track-pc"><input class="submit-track-pc" type="submit" value="Track Your Package"> <i class="fa-solid fa-arrow-right"></i></div>
                  <div class="under-submit-track">
                    <p>Multiple Tracking Numbers</p>
                    <p> <i class="fa-regular fa-circle-question"></i> Need Help</p>
                  </div>
                </div>
              </form>
              <?php
              // (B) PROCESS SEARCH WHEN FORM SUBMITTED
              if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["search"])) {
                // (B1) SEARCH FOR TRACKING INFORMATION
                require "track.php";
              }
              ?>
            </div>
          </div>
          <div class="sample-tracking-code">
            <p>Sample Tracking Code: <span>2VH488487365431</span></p>
          </div>
        </div>
      </div>
    </div>


  </div>

  <div class="hero-mobile">
    <div class="brief-mobile">
      <h1>Accelerating logistics <br /> through reliability,<br /> and precision.</h1>
      <p>Need to ship across the country or around the globe? We make it fast, simple, and secure. With real-time tracking and 24/7 support, you're always in control of your deliveries.</p>
    </div>
    <div class="hero-inner-mobile">
      <div class="mobile-track-input">
        <div class="mobile-track-up">
          <p>
            Tracking Order
          </p>
        </div>
        <div class="mobile-track-down">
          <form method="post" action="tracking.php">
            <div class="cover-mobile-input-track"><i class="fa-solid fa-location-dot"></i><input class="mobile-input-track" type="text" name="search" placeholder="Tracking number(s)" required></div>
            <input class="mobile-submit-button" type="submit" value="Track">

          </form>
          <div class="mobile-under-submit-track">
            <p>Multiple Tracking Numbers</p>
            <p> <i class="fa-regular fa-circle-question"></i> Need Help</p>
          </div>

          <?php
          // (B) PROCESS SEARCH WHEN FORM SUBMITTED
          if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["search"])) {
            // (B1) SEARCH FOR TRACKING INFORMATION
            require "track.php";
          }
          ?>
        </div>
      </div>

    </div>
  </div>
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
          <!-- Duplicate for seamless effect -->
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
        <p class="few-about-us">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit aliquid enim distinctio delectus! Tempora numquam vitae optio, eius quibusdam ipsum.</p>
        <p class="second-about-icon"><i class="fa-solid fa-compass"></i> Read More About Us
        </p>
      </div>
      <div class="about-us-right">
        <img src="images/img/sipsip.jpg" alt="ship" />
      </div>

    </div>
  </section>
  <section id="wrapper">
    <h1>EXPLORE OUR SERVICES</h1>
    <div class="Services-box">
      <div class="services-box-headline">
        <h2>Logistics solutions for all shippers</h2>
        <p>Learn about Marinex Express – we cater to a wide range of customer needs and provide a comprehensive solution for document and parcel shipping.

        </p>
      </div>
      <div class="services-img"> <img src="images/rreplace.jpg" /> </div>
      <div class="box-services-cover">
        <div class="box-services">
          <div><i class="fa-solid fa-plane"></i>
            <p>Domestic Shipping</p>
          </div>
          <hr class="hr-line-line" />
          <div><i class="fa-solid fa-user-tie"></i>
            <p>International Shipping</p>
          </div>
          <hr class="hr-line-line" />
          <div><i class="fa-solid fa-building"></i>
            <p>Express Delivery</p>
          </div>
          <hr class="hr-line-line" />

        </div>

        <div class="box-services">
          <div><i class="fa-solid fa-business-time"></i>
            <p>Bulk Shipping</p>
          </div>
          <hr class="hr-line-line" />
          <div><i class="fa-solid fa-building"></i>
            <p>Tracking Services</p>
          </div>
          <hr class="hr-line-line" />
          <div><i class="fa-solid fa-business-time"></i>
            <p>Packaging Services</p>
          </div>
          <hr class="hr-line-line" />


        </div>

      </div>
      <button>Explore Logistics Express</button>
    </div>
  </section>

  <section id="wrapper">
    <div class="Services-box">
      <div class="services-box-headline">
        <h2>Cargo Shipping - Business Only</h2>
        <p>We facilitate the movement of goods between producers, suppliers, and consumers across different regions and countries.

        </p>
      </div>
      <div class="services-img"> <img src="images/cargo_new.jpg" /> </div>
      <div class="box-services-cover">
        <div class="box-services">
          <div><i class="fa-solid fa-plane-departure"></i>
            <p>Air Freight</p>
          </div>
          <hr class="hr-line-line" />
          <div><i class="fa-solid fa-ship"></i>
            <p>Ocean Freight</p>
          </div>
          <hr class="hr-line-line" />
          <div><i class="fa-solid fa-truck-fast"></i>
            <p>Road Freight</p>
          </div>
          <hr class="hr-line-line" />
          <div><i class="fa-solid fa-train"></i>
            <p>Rail Freight</p>
          </div>
          <hr class="hr-line-line" />



        </div>

        <div class="box-services">
          <div><i class="fa-solid fa-truck-fast"></i>
            <p>Customs Brokerage</p>
          </div>
          <hr class="hr-line-line" />
          <div><i class="fa-solid fa-train"></i>
            <p>Warehousing and Distribution</p>
          </div>
          <hr class="hr-line-line" />
          <div><i class="fa-solid fa-truck-fast"></i>
            <p>Cargo Insurance</p>
          </div>
          <hr class="hr-line-line" />
          <div><i class="fa-solid fa-train"></i>
            <p>Supply Chain Consulting</p>
          </div>
          <hr class="hr-line-line" />




        </div>

      </div>
      <button>Explore Cargo Express</button>
    </div>
  </section>
  <section id="wrapper">
    <div class="Services-box">
      <div class="services-box-headline">
        <h2>Retailer or Volume Shipping - Bussiness Only</h2>
        <p>We have two divisions that offer reliable business shipping for e-commerce, supplier or manufacturing companies.

        </p>
      </div>
      <div class="services-img"> <img src="images/retailer_new.jpg" /> </div>
      <div class="box-services-cover">
        <div class="box-services">
          <div><i class="fa-solid fa-truck-fast"></i>
            <p>Inventory Management Solutions: Offer software or consultancy services to help retailers optimize their inventory levels, streamline ordering processes, and minimize stockouts or overstock situations.</p>
          </div>
          <hr class="hr-line-line" />

        </div>

        <div class="box-services">
          <div><i class="fa-solid fa-plane-departure"></i></i>
            <p>Supply Chain Consulting: Provide advice and solutions to optimize supply chain operations, including sourcing strategies, transportation logistics, and warehouse management.</p>
          </div>
          <hr class="hr-line-line" />

        </div>

      </div>
      <button>Explore Retailer Express</button>
    </div>
  </section>
  <section id="wrapper">
    <div class="Services-box">
      <div class="services-box-headline">
        <h2>Enterprise Logistics Services - Bussiness Only</h2>
        <p>Depending on your expertise and resources, you can tailor your offerings to meet the specific needs of your clients and differentiate yourself in the market.

        </p>
      </div>
      <div class="services-img"> <img src="images/bulk.jpg" /> </div>
      <div class="box-services-cover">
        <div class="box-services">
          <div><i class="fa-solid fa-warehouse"></i>
            <p>Warehouse Management</p>
          </div>
          <hr class="hr-line-line" />
          <div> <i class="fa-solid fa-boxes-packing"></i>
            <p> Freight Forwarding</p>
          </div>
          <hr class="hr-line-line" />
          <div> <i class="fa-solid fa-house-flag"></i>
            <p>Real Estate</p>
          </div>
          <hr class="hr-line-line" />

        </div>

        <div class="box-services">
          <div><i class="fa-solid fa-truck-plane"></i>
            <p>Last-Mile Delivery Solutions</p>
          </div>
          <hr class="hr-line-line" />
          <div><i class="fa-brands fa-servicestack"></i>
            <p>Technology Solutions</p>
          </div>
          <hr class="hr-line-line" />
          <div><i class="fa-solid fa-square-plus"></i>
            <p> And more!</p>
          </div>
          <hr class="hr-line-line" />

        </div>

      </div>
      <button>Explore Enterprise Express</button>
    </div>
  </section>
  <section id="wrapper">
    <div class="track-container">
      <p class="how-it-works">HOW IT WORKS</p>
      <h2 class="track-title">How We Deliver <br />Your Parcel</h2>
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
        <h1>UNMATCHED EXCELENCE <br class="off-br" /> REASONS TO CHOOSE US</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis iste possimus similique ipsum modi? Repellendus voluptate consequatur minus ratione temporibus.</p>

        <div class="newway-service">
          <div class="inner-newway-service">
            <div class="newway-icon"><i class="fa-solid fa-user-group"></i></div>
            <p><span>Top Team:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. In, aliquid.</p>
          </div>
          <div class="inner-newway-service">
            <div class="newway-icon"><i class="fa-solid fa-headset"></i></div>
            <p><span>Customer Support:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. In, aliquid.</p>
          </div>
          <div class="inner-newway-service">
            <div class="newway-icon"><i class="fa-solid fa-sack-xmark "></i></div>
            <p><span>Competitives Rate:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. In, aliquid.</p>
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
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, et?</p>
          <p>
        </div>

        <div class="equity">
          <h1>932</h1>
          <hr class="linetwo-style" />
          <p>Ventures</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum minus vitae veniam animi, excepturi itaque.</p>
          <p>
        </div>
        <div class="equity">
          <h1>81%</h1>
          <hr class="linetwo-style" />
          <p>Succesful Pilots</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore consequatur blanditiis hic doloribus eligendi eveniet odit consectetur repudiandae asperiores voluptatum?</p>
          <p>
        </div>
        <div class="equity">
          <h1>85+</h1>
          <hr class="linetwo-style" />
          <p>Fortune 500 patners</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In, quo!</p>
          <p>
        </div>
      </div>

    </div>
  </section>
  <section id="wrapper">
    <div class="testi-section">
      <p class="how-it-works">TESTIMONIALS</p>
      <h2 class="track-title">What Clients Say <br />About Us</h2>
      <div class="testi-slider">
        <div id="testiTrack" class="testi-track">

          <!-- 1 -->
          <div class="testi-card">
            <div class="testi-quote"><i class="fa-solid fa-quote-left"></i></div>
            <p class="testi-text">
              Allay is the go-to courier service for my business. They’re reliable, affordable,
              and their customer service is top-notch.
            </p>
            <div class="testi-author">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Lewis John">
              <div><strong>Lewis John</strong><span>CEO, Lewis Holdings</span></div>
            </div>
          </div>

          <!-- 2 -->
          <div class="testi-card">
            <div class="testi-quote"><i class="fa-solid fa-quote-left"></i></div>
            <p class="testi-text">
              I’ve used Allay for several personal shipments and I’m always impressed with their
              service. Pricing is fair and tracking is very accurate.
            </p>
            <div class="testi-author">
              <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Jane Doe">
              <div><strong>Jane Doe</strong><span>Private Customer</span></div>
            </div>
          </div>
          <div class="testi-card">
            <div class="testi-quote"><i class="fa-solid fa-quote-left"></i></div>
            <p class="testi-text">
              Allay is the go-to courier service for my business. They’re reliable, affordable,
              and their customer service is top-notch.
            </p>
            <div class="testi-author">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Lewis John">
              <div><strong>Lewis John</strong><span>CEO, Lewis Holdings</span></div>
            </div>
          </div>
          <!-- 3 -->
          <div class="testi-card">
            <div class="testi-quote"><i class="fa-solid fa-quote-left"></i></div>
            <p class="testi-text">
              The team was incredibly flexible when I needed to change my shipment details.
              They kept me updated every step of the way. Highly recommend!
            </p>
            <div class="testi-author">
              <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="Carlos Mendez">
              <div><strong>Carlos Mendez</strong><span>Mgr, Acme Corp</span></div>
            </div>
          </div>
          <div class="testi-card">
            <div class="testi-quote"><i class="fa-solid fa-quote-left"></i></div>
            <p class="testi-text">
              Allay is the go-to courier service for my business. They’re reliable, affordable,
              and their customer service is top-notch.
            </p>
            <div class="testi-author">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Lewis John">
              <div><strong>Lewis John</strong><span>CEO, Lewis Holdings</span></div>
            </div>
          </div>

        </div>
      </div>

      <!-- navigation dots will be filled by JS -->
      <div id="testiDots" class="testi-dots"></div>
    </div>
  </section>

  <section id="wrapper" class="blog-section">
    <div class="company-articles">
      <h1>The latest articles and <br class="off-br" /> industry insights</h1> <a href="#">View All</a>
    </div>


    <div class="news-box-cover">
      <?php
      $query_res = mysqli_query($db, "select * from ship_blog order by d_id desc LIMIT 3");
      while ($r = mysqli_fetch_array($query_res)) {
        // Limit blog content to 200 characters with ellipsis (...)
        $short_blog = mb_strimwidth($r['blog'], 0, 200, '...');

        echo '<div class="news-inner-box">
            <div class="">
                <div class="img-base">
                    <img src="admin/Res_img/' . $r['img'] . '" alt="Marinex blog post">
                </div>

                <div class="blog-content">
                    <h5><a href="blog.php?blog_id=' . $r['d_id'] . '">' . $r['title'] . '</a></h5>
                    <div class="product-name">' . $short_blog . '</div>
                </div>
            </div>
          </div>';
      }
      ?>


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
  <section id="wrapper">
    <div class="faqs-style-pc">
      <h2>Can’t find what you’re looking for?</h2>
      <p>Go to our FAQs section to find answers to your tracking questions.</p>
      <a href="/">FAQs</a>


    </div>
    <div class="faqs-style-mobile">
      <div>
        <h2>Can’t find what you’re looking for?</h2>
        <p>You can find more answers to your tracking questions here.</p>
      </div>
      <a href="/">More FAQs</a>

    </div>
  </section>
  <?php include "include/footer.php" ?>
  <script>
    document.getElementById("mobileNavToggle").addEventListener("click", function() {
      document.getElementById("mobileNavMenu").classList.toggle("open");
    });
  </script>
  <script>
    const logosBox = document.getElementById("logosBox");
    let position = -logosBox.offsetWidth / 2;

    function animateSlider() {
      position += 0.5; // Move right by 1px
      if (position >= 0) {
        position = -logosBox.offsetWidth / 2; // Reset to start
      }
      logosBox.style.transform = `translateX(${position}px)`;
      requestAnimationFrame(animateSlider);
    }

    // Duplicate logos for seamless scroll
    logosBox.innerHTML += logosBox.innerHTML;

    animateSlider();
  </script>

  <script>
    /* ----------  basic variables  ------------------ */
    const track = document.getElementById('testiTrack');
    const cards = Array.from(document.querySelectorAll('.testi-card'));
    const dotsBox = document.getElementById('testiDots');
    let index = 0;
    let autoID;

    /* ----------  build dots and helpers  ----------- */
    cards.forEach((_, i) => {
      const dot = document.createElement('span');
      dot.className = 'testi-dot' + (i === 0 ? ' active' : '');
      dot.addEventListener('click', () => go(i));
      dotsBox.appendChild(dot);
    });

    function activate() {
      // slide track
      const slideWidth = cards[0].offsetWidth + 20; // card width + gap
      const padLeft = parseFloat(getComputedStyle(track).paddingLeft);
      track.style.transform = `translateX(${padLeft - index*slideWidth}px)`;

      // card & dot states
      cards.forEach((c, i) => c.classList.toggle('active', i === index));
      dotsBox.querySelectorAll('.testi-dot')
        .forEach((d, i) => d.classList.toggle('active', i === index));
    }

    function next(n = 1) {
      index = (index + n + cards.length) % cards.length;
      activate();
    }

    function go(i) {
      index = i;
      activate();
      resetAuto();
    }

    /* ----------  auto-slide every 5 s  -------------- */
    function resetAuto() {
      clearInterval(autoID);
      autoID = setInterval(() => next(1), 5000);
    }
    resetAuto(); // start

    /* ----------  swipe support  --------------------- */
    let startX = null;
    track.addEventListener('pointerdown', e => startX = e.clientX);
    track.addEventListener('pointerup', e => {
      if (startX === null) return;
      const dx = e.clientX - startX;
      if (Math.abs(dx) > 50) { // swipe threshold ≈50 px
        next(dx < 0 ? 1 : -1);
        resetAuto();
      }
      startX = null;
    });
    /* allow touch scrolling to be captured */
    track.addEventListener('touchstart', e => startX = e.touches[0].clientX);
    track.addEventListener('touchend', e => {
      if (startX === null) return;
      const dx = e.changedTouches[0].clientX - startX;
      if (Math.abs(dx) > 50) {
        next(dx < 0 ? 1 : -1);
        resetAuto();
      }
      startX = null;
    });

    /* ----------  initial visual state  -------------- */
    window.addEventListener('resize', activate);
    activate();
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