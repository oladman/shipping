<!DOCTYPE html>
<html lang="en">
<?php
include "connection/connect.php";
include "track.php";

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
    <title>Oceanwidelogistix | Best Shippping for all global services | Track & Ship</title>
    <meta name="description" content="Pakcages shipping, envelope shipping, track, ship, global shipping, best shipping company">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="/shipping/images/favicon.png"/>
    <script src="https://kit.fontawesome.com/41097bf629.js" crossorigin="anonymous"></script>
    
</head>


<body class="">


    <header id="header" class=" header-scroll top-header `headrom`">
        <nav class="navbar navbar-dark">
            <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/logo.png" alt="logo"> <img class="hide-logo" src="images/logo.png"  alt="logo"></a>
            <div class="header-style">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>

                <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                       



                        <?php
                        if (empty($_SESSION["user_id"])) // if user is not login
                        {
                            echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
                        } else {

                            
                            echo '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
                        }

                        ?>

                    </ul>

                </div>
            </div>
        </nav>

        <div class="nav-sec">
            <ul>
                <li><a href="/"> Track </a> </li>
                <li><a href="/"> Ship </a> </li>
                <li> <a href="/"> Customer Service </a> </li>
            </ul>

            <a href="login.php"> Customer Portal Logins </a>



                    </div>

    </header>


    <div class="hero bg-image">
        <div class="hero-inner">
            <div class="container text-center hero-text font-white">
                <h1>Track Your Shipment </h1>

                <div class="track-cover">

                    <form method="post" action="tracking.php">
                        <input class="track-input" type="text" name="search" placeholder="Enter your tracking number(s)" required>
                        <input class="submit-track" type="submit" value="Track">
                    </form>

                    <?php
                    // (B) PROCESS SEARCH WHEN FORM SUBMITTED
                    if (isset($_POST["search"])) {
                        // (B1) SEARCH FOR USERS
                        require "track.php";
                    }
                    ?>
                </div>



            </div>
        </div>
        <div class="service-container-cover">
            <div class="service-container">
                <div class="service-one"><i class="fa-solid fa-calendar-days fa-2x"></i>  
                    <p> Ship Now </p>
                    <p> Find the right service</p>
                </div>
                <div class="service-two"> <i class="fa-solid fa-chalkboard fa-2x"></i> 
                    <p> Get a Quote </p>
                    <p>Estimate cost to share and compare </p>
                </div>
                <div class="service-three"> <i class="fa-solid fa-building  fa-2x"></i>
                    <p> For Bussiness </p>
                    <p> Identify a niche or area</p>
                </div>
            </div>

        </div>

                </div>






    <section class="popular container">
        <div class="later-remember">

            <div class="section-start">
                <img src="images/img/newbg.jpg" alt="ship" />

                <div class="section-inner">
                    <h1> Track & Ship. Anytime. <br /> Anywhere.</h1>

                    <div class="about-track">With us, you can easily track and ship your packages anytime, anywhere, ensuring that your shipments are always in safe hands. Our user-friendly interface empowers you to effortlessly monitor the journey of your parcels from pick-up to delivery, offering real-time updates for complete peace of mind.</div>
                    <div class="button-don">
                        <button>
                            Download for iOS  <i class="fa-solid fa-arrow-up-right-from-square fa-1x color-btn-btn"></i>
                        </button>
                        <button>
                            Download for Android <i class="fa-solid fa-arrow-up-right-from-square fa-1x color-btn-btn"></i>
                        </button>


                    </div>
                </div>



            </div>



            <div class="personalized">
                <div class="personalize-inner">
                    <h2>Get Personalized Business Advice</h2>
                    <p>Unlock the secrets to business success or "Discover hidden strategies tailored just for you.</p>
                </div>

                <button>
                    Book Now <i class="fa-solid fa-arrow-up-right-from-square fa-1x"></i>
                </button>


            </div>

            <div class="start-card-a">
                <div class="left-card-a">
                    <h1>Logistics Solutions</h1>
                    <span class="span-a">For All Shippers</span>
                    <span class="span-b">Learn about Oceanwide Express – we cater to a wide range of customer needs and provide a comprehensive solution for document and parcel shipping.






</span>
                    <div class="lower-left">
                        <h5>Services Available</h5>
                        <div class="cover-services">
                        <div>
                            <p><i class="fa-solid fa-plane"></i> Domestic Shipping </p>
                            <p><i class="fa-solid fa-user-tie"></i> International Shipping </p>
                            <p> <i class="fa-solid fa-building"></i> Express Delivery</p>
                        </div>

                        <div>
                        <p><i class="fa-solid fa-business-time"></i> Bulk Shipping</p>
                            <p> <i class="fa-solid fa-building"></i> Tracking Services</p>
                            <p><i class="fa-solid fa-business-time"></i> Packaging Services</p>
                        </div>
                        </div>

                    </div>
                    <button>Explore Logistics Express</button>
                </div>
                <div class="right-card"> <img src="images/docuship.jpg" /> </div>


            </div>

            <div class="start-card-b">
                <div class="left-card-b">
                    <h1>Cargo Shipping</h1>
                    <span class="span-a">Business Only</span>
                    <span class="span-b">We facilitate the movement of goods between producers, suppliers, and consumers across different regions and countries.</span>
                    <div class="lower-left">
                        <h5>Services Available</h5>
                        <div class="cover-services">
                        <div>
                            <p><i class="fa-solid fa-plane-departure"></i> Air Freight</p>
                            <p><i class="fa-solid fa-ship"></i> Ocean Freight</p>
                            <p><i class="fa-solid fa-truck-fast"></i> Road Freight</p>
                            <p><i class="fa-solid fa-train"></i> Rail Freight</p>
                        </div>
                      
                        <div>
                        <p><i class="fa-solid fa-truck-fast"></i> Customs Brokerage</p>
                            <p><i class="fa-solid fa-train"></i> Warehousing and Distribution</p>
                            <p><i class="fa-solid fa-truck-fast"></i> Cargo Insurance</p>
                            <p><i class="fa-solid fa-train"></i> Supply Chain Consulting</p>
                        </div>
                </div>

                    </div>
                    <button>Explore Cargo Express</button>
                </div>
                <div class="right-card"> <img src="images/cargoc.jpg" /> </div>


            </div>

            <div class="start-card-c">
                <div class="left-card-c">
                    <h1>Retailer or Volume Shipping</h1>
                    <span class="span-a">Business Only</span>
                    <span class="span-b">We have two divisions that offer reliable business shipping for e-commerce, supplier or manufacturing companies.</span>
                    <div class="lower-left">
                        <h5>Services Available</h5>
                        <div>
                            <p> <i class="fa-solid fa-truck-fast"></i> Inventory Management Solutions: Offer software or consultancy services to help retailers optimize their inventory levels, streamline ordering processes, and minimize stockouts or overstock situations.</p>

                        </div>
                        <div>
                            <p><i class="fa-solid fa-plane-departure"></i> Supply Chain Consulting: Provide advice and solutions to optimize supply chain operations, including sourcing strategies, transportation logistics, and warehouse management.</p>

                        </div>
                       
                       

                    </div>
                    <button>Explore Retailer Express</button>
                </div>
                <div class="right-card"> <img src="images/retailer.jpg" /> </div>


            </div>

            <div class="start-card-d">
                <div class="left-card-d">
                    <h1>Enterprise Logistics Services</h1>
                    <span class="span-a">Business Only</span>
                    <span class="span-b">Depending on your expertise and resources, you can tailor your offerings to meet the specific needs of your clients and differentiate yourself in the market.</span>
                    <div class="lower-left">
                        <h5>Services Available</h5>
                        <div class="cover-services">
                        <div>
                            <p><i class="fa-solid fa-warehouse"></i> Warehouse Management</p>
                            <p><i class="fa-solid fa-boxes-packing"></i> Freight Forwarding</p>
                            <p><i class="fa-solid fa-house-flag"></i> Real Estate</p>
                        </div>
                        <div>
                            <p><i class="fa-solid fa-truck-plane"></i> Last-Mile Delivery Solutions</p>
                            <p><i class="fa-brands fa-servicestack"></i> Technology Solutions</p>
                            <p><i class="fa-solid fa-square-plus"></i> And more!</p>
                        </div>
                </div>

                    </div>
                    <button>Explore Enterprise Express</button>
                </div>
                <div class="right-card"> <img src="images/bulk.jpg" /> </div>


            </div>




        </div>
    </section>
    <section>
        <div class="container dont-know">
            <div class="text-xs-center">
                <h2>Easy to Ship your Package</h2>
                <div class="row how-it-works-solution">
                    <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col1">
                        <div class="how-it-works-wrap">
                            <div class="step step-1">
                                <div class="icon" data-step="1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 483 483" width="512" height="512">
                                        <g fill="#FFF">
                                            <path d="M467.006 177.92c-.055-1.573-.469-3.321-1.233-4.755L407.006 62.877V10.5c0-5.799-4.701-10.5-10.5-10.5h-310c-5.799 0-10.5 4.701-10.5 10.5v52.375L17.228 173.164a10.476 10.476 0 0 0-1.22 4.938h-.014V472.5c0 5.799 4.701 10.5 10.5 10.5h430.012c5.799 0 10.5-4.701 10.5-10.5V177.92zM282.379 76l18.007 91.602H182.583L200.445 76h81.934zm19.391 112.602c-4.964 29.003-30.096 51.143-60.281 51.143-30.173 0-55.295-22.139-60.258-51.143H301.77zm143.331 0c-4.96 29.003-30.075 51.143-60.237 51.143-30.185 0-55.317-22.139-60.281-51.143h120.518zm-123.314-21L303.78 76h86.423l48.81 91.602H321.787zM97.006 55V21h289v34h-289zm-4.198 21h86.243l-17.863 91.602h-117.2L92.808 76zm65.582 112.602c-5.028 28.475-30.113 50.19-60.229 50.19s-55.201-21.715-60.23-50.19H158.39zM300 462H183V306h117v156zm21 0V295.5c0-5.799-4.701-10.5-10.5-10.5h-138c-5.799 0-10.5 4.701-10.5 10.5V462H36.994V232.743a82.558 82.558 0 0 0 3.101 3.255c15.485 15.344 36.106 23.794 58.065 23.794s42.58-8.45 58.065-23.794a81.625 81.625 0 0 0 13.525-17.672c14.067 25.281 40.944 42.418 71.737 42.418 30.752 0 57.597-17.081 71.688-42.294 14.091 25.213 40.936 42.294 71.688 42.294 24.262 0 46.092-10.645 61.143-27.528V462H321z" />
                                            <path d="M202.494 386h22c5.799 0 10.5-4.701 10.5-10.5s-4.701-10.5-10.5-10.5h-22c-5.799 0-10.5 4.701-10.5 10.5s4.701 10.5 10.5 10.5z" />
                                        </g>
                                    </svg>
                                </div>
                                <h3>Register an Account</h3>
                                <p>We"ve got your covered with menus from a variety of delivery Tracking online.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col2">
                        <div class="step step-2">
                            <div class="icon" data-step="2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 380.721 380.721">
                                    <g fill="#FFF">
                                        <path d="M58.727 281.236c.32-5.217.657-10.457 1.319-15.709 1.261-12.525 3.974-25.05 6.733-37.296a543.51 543.51 0 0 1 5.449-17.997c2.463-5.729 4.868-11.433 7.25-17.01 5.438-10.898 11.491-21.07 18.724-29.593 1.737-2.19 3.427-4.328 5.095-6.46 1.912-1.894 3.805-3.747 5.676-5.588 3.863-3.509 7.221-7.273 11.107-10.091 7.686-5.711 14.529-11.137 21.477-14.506 6.698-3.724 12.455-6.982 17.631-8.812 10.125-4.084 15.883-6.141 15.883-6.141s-4.915 3.893-13.502 10.207c-4.449 2.917-9.114 7.488-14.721 12.147-5.803 4.461-11.107 10.84-17.358 16.992-3.149 3.114-5.588 7.064-8.551 10.684-1.452 1.83-2.928 3.712-4.427 5.6a1225.858 1225.858 0 0 1-3.84 6.286c-5.537 8.208-9.673 17.858-13.995 27.664-1.748 5.1-3.566 10.283-5.391 15.534a371.593 371.593 0 0 1-4.16 16.476c-2.266 11.271-4.502 22.761-5.438 34.612-.68 4.287-1.022 8.633-1.383 12.979 94 .023 166.775.069 268.589.069.337-4.462.534-8.97.534-13.536 0-85.746-62.509-156.352-142.875-165.705 5.17-4.869 8.436-11.758 8.436-19.433-.023-14.692-11.921-26.612-26.631-26.612-14.715 0-26.652 11.92-26.652 26.642 0 7.668 3.265 14.558 8.464 19.426-80.396 9.353-142.869 79.96-142.869 165.706 0 4.543.168 9.027.5 13.467 9.935-.002 19.526-.002 28.926-.002zM0 291.135h380.721v33.59H0z" />
                                    </g>
                                </svg>
                            </div>
                            <h3>Create Shipment</h3>
                            <p>We"ve got your covered with a variety of delivery Tracking online.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col3">
                        <div class="step step-3">
                            <div class="icon" data-step="3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 612.001 612">
                                    <path d="M604.131 440.17h-19.12V333.237c0-12.512-3.776-24.787-10.78-35.173l-47.92-70.975a62.99 62.99 0 0 0-52.169-27.698h-74.28c-8.734 0-15.737 7.082-15.737 15.738v225.043h-121.65c11.567 9.992 19.514 23.92 21.796 39.658H412.53c4.563-31.238 31.475-55.396 63.972-55.396 32.498 0 59.33 24.158 63.895 55.396h63.735c4.328 0 7.869-3.541 7.869-7.869V448.04c-.001-4.327-3.541-7.87-7.87-7.87zM525.76 312.227h-98.044a7.842 7.842 0 0 1-7.868-7.869v-54.372c0-4.328 3.541-7.869 7.868-7.869h59.724c2.597 0 4.957 1.259 6.452 3.305l38.32 54.451c3.619 5.194-.079 12.354-6.452 12.354zM476.502 440.17c-27.068 0-48.943 21.953-48.943 49.021 0 26.99 21.875 48.943 48.943 48.943 26.989 0 48.943-21.953 48.943-48.943 0-27.066-21.954-49.021-48.943-49.021zm0 73.495c-13.535 0-24.472-11.016-24.472-24.471 0-13.535 10.937-24.473 24.472-24.473 13.533 0 24.472 10.938 24.472 24.473 0 13.455-10.938 24.471-24.472 24.471zM68.434 440.17c-4.328 0-7.869 3.543-7.869 7.869v23.922c0 4.328 3.541 7.869 7.869 7.869h87.971c2.282-15.738 10.229-29.666 21.718-39.658H68.434v-.002zm151.864 0c-26.989 0-48.943 21.953-48.943 49.021 0 26.99 21.954 48.943 48.943 48.943 27.068 0 48.943-21.953 48.943-48.943.001-27.066-21.874-49.021-48.943-49.021zm0 73.495c-13.534 0-24.471-11.016-24.471-24.471 0-13.535 10.937-24.473 24.471-24.473s24.472 10.938 24.472 24.473c0 13.455-10.938 24.471-24.472 24.471zm117.716-363.06h-91.198c4.485 13.298 6.846 27.54 6.846 42.255 0 74.28-60.431 134.711-134.711 134.711-13.535 0-26.675-2.045-39.029-5.744v86.949c0 4.328 3.541 7.869 7.869 7.869h265.96c4.329 0 7.869-3.541 7.869-7.869V174.211c-.001-13.062-10.545-23.606-23.606-23.606zM118.969 73.866C53.264 73.866 0 127.129 0 192.834s53.264 118.969 118.969 118.969 118.97-53.264 118.97-118.969-53.265-118.968-118.97-118.968zm0 210.864c-50.752 0-91.896-41.143-91.896-91.896s41.144-91.896 91.896-91.896c50.753 0 91.896 41.144 91.896 91.896 0 50.753-41.143 91.896-91.896 91.896zm35.097-72.488c-1.014 0-2.052-.131-3.082-.407L112.641 201.5a11.808 11.808 0 0 1-8.729-11.396v-59.015c0-6.516 5.287-11.803 11.803-11.803 6.516 0 11.803 5.287 11.803 11.803v49.971l29.614 7.983c6.294 1.698 10.02 8.177 8.322 14.469-1.421 5.264-6.185 8.73-11.388 8.73z" fill="#FFF" />
                                </svg>
                            </div>
                            <h3>Drop off at our nearby office</h3>
                            <p>Get your food delivered! And enjoy your meal! </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>




    <section class="featured-restaurants">
        <div class="container">
            <div class="row">

                <div class="row">


                    <?php
                    $query_res = mysqli_query($db, "select * from ship_blog  order by d_id desc LIMIT 3");
                    while ($r = mysqli_fetch_array($query_res)) {

                        echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                                            <div class="food-item-wrap">
                                                <div class="img-base">
                                                <img src="admin/Res_img/' . $r['img'] . '" alt="Oceanlogistix news logo">
                                                </div>

                                                <div class="content">
                                                    <h5><a href="blog.php?blog_id=' . $r['d_id'] . '">' . $r['title'] . '</a></h5>
                                                    <div class="product-name">' . $r['blog'] . '</div>

                                                </div>

                                            </div>
                                    </div>';
                    }
                    ?>
                </div>


            </div>



        </div>

    </section>

    <section>
        <div class="faqs-style-pc">
            <h2>Can’t find what you’re looking for?</h2>
            <p>Go to our FAQs section to find answers to your tracking questions.</p>
            <a href="/">FAQs</a>


        </div>
        <div class="faqs-style-mobile">
            <h2>Can’t find what you’re  looking for?</h2>
            <p>Go to our FAQs section to find answers  to your tracking questions.</p>
            <a href="/">FAQs</a>


        </div>
    </section>







    <?php include "include/footer.php" ?>


    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>


 <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * Github Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->