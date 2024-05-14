 <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * Github Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->
<!DOCTYPE html>
<html lang="en">
<?php
include "connection/connect.php";
include "track.php";

error_reporting(0);
session_start();

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Tracking | Oceanwidelogistix Best Shippping for all global services | Track & Ship</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/41097bf629.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="print" href="style.css">
    <link rel="shortcut icon" type="image/jpg" href="/shipping/images/favicon.png"/>
    <script src="https://kit.fontawesome.com/41097bf629.js" crossorigin="anonymous"></script>

</head>


<body class="tracking-page content-box">


<header id="header" class=" header-scroll top-header `headrom`">
        <nav class="navbar navbar-dark">
            <a class="navbar-brand off" href="index.php"> <img class="img-rounded" src="images/logo.png" alt=""> </a>
            <div class="specific-design"> <a class="navbar-brand off-display" href="index.php"> <img class="img-rounded-edited" src="images/logoprint.png" alt=""> </a>
            <h2 class="bold-p-two-print off-display"> Shipment Receipt </h2>
           </div>
      
            <div class="header-style">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>

                <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Explore <span class="sr-only"></span></a> </li>



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

        <nav class="nav-sec">
            <ul>
                <li><a href="/"> Track </a> </li>
                <li><a href="/"> Ship </a> </li>
                <li> <a href="/"> Customer Service </a> </li>
            </ul>

            <a href="login.php"> Customer Portal Logins </a>



        </nav>

    </header>


    <section class="container track-style">
        <div class="hero-inner">
            <div class="container text-center hero-text font-white track-style-inner">
                <h1>Track your package </h1>

                <div class="track-cover-track">

                    <form method="post" action="tracking.php">
                        <input class="track-input-track" type="text" name="search" placeholder="Enter your tracking number(s)" required>
                        <input class="submit-track" type="submit" value="  Track">
                    </form>
                </div>
            </div>
    </section>

    <?php
$DB_HOST = "localhost";
$DB_NAME = "code_camp_bd_fos";
$DB_CHARSET = "utf8mb4";
$DB_USER = "root";
$DB_PASSWORD = "";
$tracking = $_POST['search'];

$pdo = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

// (C) SEARCH
// CREATE A TEMPLATE
$sql = ("SELECT * FROM `shipping` WHERE s_tracking = ?");

//CREATE A PREPARED STATEMENT
$stmt = mysqli_stmt_init($pdo);

//PREPARE THE PREPARED STATEMENT
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo 'SQL STATEMENT FAILED';
} else {
    //BIND PARAMETERS TO THE PLACEHOLDER
    mysqli_stmt_bind_param($stmt, "s", $tracking);

    //RUN PARAMETERS INSIDE THE DATABASE
    mysqli_stmt_execute($stmt);
    $results = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($results)) {

        echo '
        <hr class="print-hr-hr" />
    <div class="result-tracking-style-cover">
        <div class="result-tracking-style">
        <div class="left-track-page">
        <h6 class="tracking-number bold-p"> Tracking Number : ' . $row['s_tracking'] . ' </h6> 
        <hr class="print-hr" />
        <h1 class"angry-style"> ' . $row['s_description'] . ' </h1>
        <div id="progressbar">
        <div class="in-in-track"></div><div class="in-in-arrow"><i class="fa-solid fa-chevron-right icon-arrow-track"></i></div>
      </div>
                                                <div class="card-header-tracker">

                                         <div class="scheduled-style"> <p class="bold-p"> Scheduled Delivery </p>
                                         
                                         <h3 class="bold-p" >' . $row['s_date'] . '</h3>

                                        </div>
                                                 <div class="estimated-style">
                                                  <p class="bold-p"> Estimated Date </p>

                                         <h3 class="bold-p">' . $row['s_estimate'] . '</h3>


                                                </div>

                                                </div>
                                                <hr class="print-hr-hr" />
                                                <div class="button-track-style">
                                                <button class="button-track-one bold-p"> Send Updates</button>
                                                <button class="button-track-two bold-p"> Delivery Options</button>

                                                </div>
                                                </div>


                                                </div>


                                                <div class="box-down-track">

                                                <div class="box-down-left">

                                                <div class="status-card">
                                                <p class="bold-p-two offset-display"> Ship To </p>
                                                <h3 class="bold-p-two-print off-display"> Shipment To </h3>
                                                <p>' . strtoupper($row['r_name']) . '</p>
                                                <p>' . strtoupper($row['r_address']) . '</p>
                                                <p>' . strtoupper($row['r_city']) . '</p>
                                               <div class="address-style-updated">
                                                <p>' . strtoupper($row['r_state']) . '</p> ,
                                                <p>' . strtoupper($row['r_zip']) . '</p> ,
                                                <p>' . strtoupper($row['r_country']) . '</p> </div>
                                               <div class="margin-bottom-style"> <p>' . strtoupper($row['r_email']) . '</p>
                                                <p>' . strtoupper($row['r_phone']) . '</p> </div>

                                                </div>
                                             
                                                <hr class="linetwo-style" />

                                                <div class="status-card">
                                                <p class="bold-p-two offset-display"> Ship from </p>
                                                <h3 class="bold-p-two-print off-display"> Shipment From </h3>
                                                <p>' . strtoupper($row['s_name']) . '</p>
                                                <p>' . strtoupper($row['s_address']) . '</p>
                                                <p>' . strtoupper($row['s_city']) . '</p>
                                                <div class="address-style-updated">
                                                <p>' . strtoupper($row['s_state']) . '</p> ,
                                                <p>' . strtoupper($row['s_zip']) . '</p> ,
                                                <p>' . strtoupper($row['s_country']) . '</p> </div>
                                                <div class="margin-bottom-style">  <p>' . strtoupper($row['s_email']) . '</p>
                                                <p>' . strtoupper($row['s_phone']) . '</p> </div>

                                                </div>



                                                </div>
                                                <hr class="print-hr" />


                                                <div class="box-down-right">
                                                <div class="up-progress"> <p class="bold-p-two"> Shipment Details </p> <i class="fa-solid  "></i> </div>
                                                <h3 class="bold-p-two-print off-display"> Shipment Details </h3>

                                                <div class="cover-down-box">

                                                <div class="box-ship-details">
                                                <p class="bold-p-two"> Service :</p>
                                                <p class="bold-p-grey">' . $row['s_type'] . '</p>


                                                </div>
                                                <div class="box-ship-details">
                                                <p class="bold-p-two"> Weight :</p>
                                                <p class="bold-p-grey">' . $row['s_weight'] . ' Kg</p>

                                                </div>
                                                <div class="box-ship-details">
                                                <p class="bold-p-two"> Quantity :</p>
                                                <p class="bold-p-grey">' . $row['s_quantity'] . '</p>


                                                </div>
                                                <div class="box-ship-details">
                                                <p class="bold-p-two"> Tracking ID :</p>
                                                <p class="bold-p-grey">' . $row['s_tracking'] . '</p>

                                                </div>
                                                <div class="box-ship-details">
                                                <p class="bold-p-two"> Insurance :</p>
                                                <p class="bold-p-grey">' . $row['s_insurance'] . '</p>


                                                </div>
                                               
                                                <div class="box-ship-details">
                                                <p class="bold-p-two"> Total Declared Value :</p>
                                                <p class="bold-p-grey">$' . $row['s_value'] . '</p>


                                                </div>

                                                <div class="box-ship-details">
                                                <p class="bold-p-two"> Subtotal :</p>
                                                <p class="bold-p-grey">$' . $row['s_subtotal'] . '</p>


                                                </div>
                                                <div class="box-ship-details">
                                                <p class="bold-p-two"> Freight Total cost :</p>
                                                <p class="bold-p-grey">$' . $row['s_freight'] . '</p>


                                                </div>
                                                
                                                <div class="box-ship-details">
                                                <p class="bold-p-two">Freight cost: </p>
                                                <p class="bold-p-grey">' . $row['s_trans'] . '</p>


                                                </div>
                                                </div>




                                                </div>

                                                </div>

                                                </div>

                                    </div>

    ';
    }
}
;

?>

    <?php

$DB_HOST = "localhost";
$DB_NAME = "code_camp_bd_fos";
$DB_CHARSET = "utf8mb4";
$DB_USER = "root";
$DB_PASSWORD = "";
$tracking = $_POST['search'];

$pdo = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

// (C) SEARCH
// CREATE A TEMPLATE
$sql = ("SELECT * FROM `ship_status` WHERE s_tracking = ? ORDER BY ss_id DESC ");

//CREATE A PREPARED STATEMENT
$stmt = mysqli_stmt_init($pdo);

//PREPARE THE PREPARED STATEMENT
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo 'SQL STATEMENT FAILED';
} else {
    //BIND PARAMETERS TO THE PLACEHOLDER
    mysqli_stmt_bind_param($stmt, "s", $tracking);

    //RUN PARAMETERS INSIDE THE DATABASE
    mysqli_stmt_execute($stmt);
    $results = mysqli_stmt_get_result($stmt);

    echo '
    <div class="box-down-track-down">
    <div class="box-down-down">
    <div class="up-progress"> <p class="bold-p"> Tracking Details </p> <i class="fa-solid fa-arrow-up"></i> </div>
    <button class="btn-style"> Overview </button>
    <h3 class="bold-p-two-print off-display"> Tracking Details </h3>
    
    <div class="box-track-pro-down">
    <table>
    <tr>
    <th>DATE & TIME</th>
    <th>STATUS OF ITEM</th>
    <th>LOCATION</th>
    </tr>
    
    </div>
   
    </div>
  
    
    ';

    while ($row = mysqli_fetch_assoc($results)) {
       
        
        echo "
        
        <tr>
        
      
    <div class='unto-style'> <td>" . str_replace('-', '/', date('F-d-Y', strtotime($row['ss_date']))) . ",
    " . strtoupper(date("h:i a", strtotime($row['ss_time']))) . "</td> </div>
    <td><div class='style-wrap'>" . $row['ss_comment'] . "</div></td>
    <td>" .  strtoupper($row['ss_location']) . "</td>

    </tr> 
    
    ";
    
    }

    echo '</table> </div> </div> <button id="print-button">Print</button> </div> ';
}

?>







<?php
$DB_HOST = "localhost";
$DB_NAME = "code_camp_bd_fos";
$DB_CHARSET = "utf8mb4";
$DB_USER = "root";
$DB_PASSWORD = "";
$tracking = $_POST['search'];

$pdo = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
// (C) SEARCH
// CREATE A TEMPLATE
$sql = ("SELECT * FROM `ship_status` WHERE s_tracking = ? ORDER BY ss_id DESC ");

//CREATE A PREPARED STATEMENT
$stmt = mysqli_stmt_init($pdo);

//PREPARE THE PREPARED STATEMENT
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo 'SQL STATEMENT FAILED';
} else {
    //BIND PARAMETERS TO THE PLACEHOLDER
    mysqli_stmt_bind_param($stmt, "s", $tracking);

    //RUN PARAMETERS INSIDE THE DATABASE
    mysqli_stmt_execute($stmt);
    $results = mysqli_stmt_get_result($stmt);


    echo '
    <div class="box-down-right-mobile">
    <div class="up-progress"> <p class="bold-p-two"> Tracking Details </p> <i class="fa-solid fa-arrow-up"></i> </div>

    <div class="cover-down-box-mobile">
   
  
    
    ';
    while ($row = mysqli_fetch_assoc($results)) {

        echo '
        <div class="mobile-inner-down">
        <div class="date-time-mobile "> 
        <div class="bold-p-two no-wrap">' 
       . str_replace('-', '/', date('m-d-Y', strtotime($row['ss_date']))) .'</div>
        <div class="no-wrap">' .strtoupper(date("h:i a", strtotime($row['ss_time']))) . '</div> </div>
        <div class="update-mobile-right"> 
        <div class="bold-p-two">' . $row['ss_status'] . '</div>
        <div class="">' . $row['ss_comment'] . '</div>
        <div class="bold-p">' . $row['ss_location'] . '</div>
        </div>
    

        </div>

    ';
    }

    echo ' </div> 
    
    </div>';
}
;

?>




<footer class="footer">

<div class="not-footer">



    <div class="bottom-footer">
        <div class="socials">
            
            <div class="icon-social">
                <img src="images/youtube-new.svg" height='22px' width='22px' />
                <img src="images/facebook-new.svg" height='22px' width='22px' />
                <img src="images/linkedIn-new.svg" height='22px' width='22px' />
                <img src="images/instagram-new.svg" height='22px' width='22px' />
            </div>

        </div>

        <ul class="add-list">
        <li><img src='images/turbo.png' height='' width='100px' alt='logo' /> </li>
            <li> Fraud Awareness</li>
            <li> Legal Notice</li>
            <li> Terms of Use</li>
            <li> Privacy Notice</li>
            <li> Dispute Resolution</li>
            <li>
                Additional Information</li>
            <li> Consent Settings</li>
        </ul>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-3 payment-options color-gray">
            <h5>Payment Options</h5>
            <ul>
                <li>
                    <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                </li>
                <li>
                    <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                </li>
                <li>
                    <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                </li>
                <li>
                    <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                </li>
                <li>
                    <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                </li>
            </ul>
        </div>



    </div>
    <p class="reserved">2024 © - all rights reserved</p>
</div>
</footer>






<script>document.getElementById("print-button").addEventListener("click", function() {

window.print();

}); </script>

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