                <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * GigHub Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->
                <!DOCTYPE html>
                <html lang="en">
                <?php
include "../connection/connect.php";
error_reporting(0);
session_start();

if (isset($_POST['submit'])) {

    if (empty($_POST['s_country']) || empty($_POST['s_name']) || empty($_POST['s_address']) || empty($_POST['s_zip']) || empty($_POST['s_city']) || empty($_POST['s_state']) || empty($_POST['s_phone']) || empty($_POST['s_email']) || empty($_POST['r_country']) || empty($_POST['r_name']) || empty($_POST['r_address']) || empty($_POST['r_zip']) || empty($_POST['r_city']) || empty($_POST['r_state']) || empty($_POST['r_phone']) || empty($_POST['r_email']) || empty($_POST['s_trans']) || empty($_POST['s_type']) || empty($_POST['s_description']) || empty($_POST['s_weight']) || empty($_POST['s_value']) || empty($_POST['s_insurance']) || empty($_POST['s_quantity']) || empty($_POST['s_freight']) || empty($_POST['s_subtotal']) || empty($_POST['s_estimate']) || empty($_POST['s_date']) || $_POST['s_tracking'] == '') {
        $error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>All fields Must be Fillup!</strong>
															</div>';
    } else {

        $sql = "INSERT INTO shipping (s_id, s_country,s_name,s_address,s_zip,s_city,s_state,s_phone,s_email,r_country,r_name,r_address,r_zip,r_city,r_state,r_phone,r_email,s_trans,s_type,s_description,s_weight,s_value,s_insurance,s_quantity,s_freight,s_subtotal,s_estimate,s_date,s_tracking) VALUES ('', '" . $_POST['s_country'] . "', '" . $_POST['s_name'] . "', '" . $_POST['s_address'] . "', '" . $_POST['s_zip'] . "', '" . $_POST['s_city'] . "', '" . $_POST['s_state'] . "', '" . $_POST['s_phone'] . "', '" . $_POST['s_email'] . "','" . $_POST['r_country'] . "', '" . $_POST['r_name'] . "', '" . $_POST['r_address'] . "', '" . $_POST['r_zip'] . "', '" . $_POST['r_city'] . "', '" . $_POST['r_state'] . "', '" . $_POST['r_phone'] . "', '" . $_POST['r_email'] . "', '" . $_POST['s_trans'] . "', '" . $_POST['s_type'] . "', '" . $_POST['s_description'] . "', '" . $_POST['s_weight'] . "', '" . $_POST['s_value'] . "', '" . $_POST['s_insurance'] . "', '" . $_POST['s_quantity'] . "', '" . $_POST['s_freight'] . "', '" . $_POST['s_subtotal'] . "', '" . $_POST['s_estimate'] . "', '" . $_POST['s_date'] . "',  '" . $_POST['s_tracking'] . "' ) ";
        mysqli_query($db, $sql);

        $success = '<div class="alert alert-success alert-dismissible fade show">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                         New Shipment Created Successfully.
                                                    </div>';
    }
}

?>
                <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * GigHub Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->

                <head>
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta name="description" content="">
                    <meta name="author" content="">
                    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
                    <title>Create Shipping</title>
                    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
                    <link href="css/helper.css" rel="stylesheet">
                    <link href="css/style.css" rel="stylesheet">
                    <script src="https://kit.fontawesome.com/41097bf629.js" crossorigin="anonymous"></script>
                </head>

                <body class="fix-header">

                    <div class="preloader">
                        <svg class="circular" viewBox="25 25 50 50">
                            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                        </svg>
                    </div>

                    <div id="main-wrapper">

                        <div class="header">
                            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="dashboard.php">

                                    <span><img src="images/turbo.png" height="60px" lenght="60px" alt="homepage" class="dark-logo" /></span>
                                    </a>
                                </div>
                                <div class="navbar-collapse">

                                    <ul class="navbar-nav mr-auto mt-md-0">




                                    </ul>

                                    <ul class="navbar-nav my-lg-0">

             <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * GigHub Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->


                                        <li class="nav-item dropdown">

                                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                                <ul>
                                                    <li>
                                                        <div class="drop-title">Notifications</div>
                                                    </li>

                                                    <li>
                                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
             <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * GigHub Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/bookingSystem/user-icn.png" alt="user" class="profile-pic" /></a>
                                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                                <ul class="dropdown-user">
                                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * GigHub Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->


                        <div class="left-sidebar">

                            <div class="scroll-sidebar">

                            <nav class="sidebar-nav">
                                    <ul id="sidebarnav">
                                        <li class="nav-devider"></li>
                                        <li class="nav-label">Home</li>
                                        <li> <a href="dashboard.php"><i class="fa-solid fa-gauge"></i><span class="bold-p">Dashboard</span></a></li>
                                        <li class="nav-label">Log</li>


                                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa-solid fa-plane-departure bold-p " aria-hidden="true" ></i><span class="hide-menu bold-p">Shipping</span></a>
                                            <ul aria-expanded="false" class="collapse">
                                                <li><a href="all_shipping.php">All Shipping</a></li>
                                                <li><a href="add_shipping.php">Create Shipping</a></li>

                                            </ul>
                                        </li>
                                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa-solid fa-pen-to-square bold-p" aria-hidden="true"></i><span class="hide-menu bold-p"> Update Shipping</span></a>
                                            <ul aria-expanded="false" class="collapse">
                                                <li><a href="update_status.php">Update Shipping Status</a></li>
                                                <li><a href="all_shipping_updates.php">All Shipping Updates</a></li>




                                            </ul>
                                        </li>

                                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa-solid fa-blog  bold-p" aria-hidden="true"></i><span class="hide-menu bold-p"> Ship Blog</span></a>
                                            <ul aria-expanded="false" class="collapse">
                                                <li><a href="all_blogs.php">All Blog</a></li>
                                                <li><a href="add_blog.php">Add Blog</a></li>




                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>

                        <div class="page-wrapper">
                        <div style="padding-top: 10px;">
                                <marquee onMouseOver="this.stop()" onMouseOut="this.start()"> <a href="https://github.com/oladman">OLADMAN</a> is the sole owner of this script. For any of your problems contact me on <a href="https://twitter.com/iam_oladman">Twitter</a>  <a href="https://wa.me/+2349068084773">WhatsApp</a> </marquee>
                            </div>


 <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * GigHub Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->

                            <div class="container-fluid">
                                <!-- Start Page Content -->


                                <?php echo $error;
echo $success; ?>


     <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * GigHub Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->


                                <div class="col-lg-12">
                                    <div class="card card-outline-primary">
                                        <div class="card-header">
                                            <h4 class="m-b-0 text-white">Create a Shipment</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action='' method='post' enctype="application/x-www-form-urlencoded">
                                                <div class="form-body">
                                                    <p class="from-style">1. From (Sender)</p>


                                                    <hr>
                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">* Country/Territory</label>

                                                                <input type="text" name="s_country" class="form-control form-control-danger">
                                                            </div>

                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* Sender Name</label>
                                                                <input type="text" name="s_name" class="form-control form-control-danger">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">* Address</label>
                                                                <input type="text" name="s_address" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* Zip</label>
                                                              <input type="text" name="s_zip" pattern="[0-9]{5}" title="Five digit zip code" class="form-control form-control-danger" />
                                                                
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">* City</label>
                                                                <input type="text" name="s_city" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* State</label>
                                                                <input type="text" name="s_state" class="form-control form-control-danger">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">* Phone</label>
                                                                <input type="number" name="s_phone" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* Email</label>
                                                                <input type="email" name="s_email" class="form-control form-control-danger">
                                                            </div>
                                                        </div>

                                                    </div>




                                                    <p class="from-style">2. To (Recipient)</p>


                                                    <hr>
                                                    <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">* Country/Territory</label>


                                                                <input type="text" name="r_country" class="form-control form-control-danger">
                                                            </div>

                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* Recipient Name</label>
                                                                <input type="text" name="r_name" class="form-control form-control-danger">
                                                            </div>
                                                        </div>
                                                        </div>

                                                       

                                                    </div>
                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">* Address</label>
                                                                <input type="text" name="r_address" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                        <div class="form-group has-danger">
                                                                <label class="control-label">* Zip</label>
                                                              <input type="text" name="r_zip" pattern="[0-9]{5}" title="Five digit zip code" class="form-control form-control-danger" />
                                                                
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">* City</label>
                                                                <input type="text" name="r_city" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* State</label>
                                                                <input type="text" name="r_state" class="form-control form-control-danger">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">* Phone</label>
                                                                <input type="number" name="r_phone" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* Email</label>
                                                                <input type="email" name="r_email" class="form-control form-control-danger">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <p class="from-style">3. Shipping Information</p>


                                                    <hr>
                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Bill Transportation:</label>
                                                                <select name="s_trans" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">

                                                                    <option value="Paid">Select</option>
                                                                    <option value="Paid">Paid</option>
                                                                    <option value="Not Paid">Not-Paid</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Service Type:</label>
                                                                <select name="s_type" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">

                                                                    <option value="Paid">Select</option>
                                                                    <option value="Parcel Shipping">Parcel Shipping</option>
                                                                    <option value="Sea Freight">Sea Freight (Ship)</option>
                                                                    <option value="Air Freight">Air Freight</option>
                                                                    <option value="Road Freight">Land Freight (Road)</option>
                                                                    <option value="Expedited Freight">Sea (Ship)</option>
                                                                    <option value="Railway">Railway</option>
                                                                    <option value="First Overnight">First Overnight</option>
                                                                </select>
                                                            </div>
                                                        </div>



                                                    </div>

                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* Product Type (<small class="small-p">e.g Box, Envelope</small>)</label>
                                                                <select name="s_ptype" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                                    <option value="Box">Box</option>
                                                                    <option value="Mailer">Mailer</option>
                                                                    <option value="Tube">Tube</option>
                                                                    <option value="Freight Box">Freight Box</option>
                                                                    <option value="Envelope">Envelope</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* Product Status:</label>
                                                                <select name="s_description" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                                    <option value="In-Transist">In-Transist</option>
                                                                    <option value="On-Hold">On-Hold</option>
                                                                    <option value="Held in Customs">Held in Customs</option>
                                                                    <option value="To-Pay">To-Pay</option>
                                                                    <option value="Shipment is on Hold">Shipment is on Hold</option>



                                                                </select>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">* Weight (kg)</label>
                                                                <input type="number" name="s_weight" value="2.2" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* Declared Value (<small class="small-p">Total value of items shipping in USD</small>)</label>
                                                                <input type="number" name="s_value" placeholder="0,00" class="form-control form-control-danger">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Insurance:</label>
                                                                <select name="s_insurance" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">

                                                                    <option value="Paid">Paid</option>
                                                                    <option value="ToPay">To Pay</option>
                                                                    <option value="Cash on Delivery">Cash on Delivery</option>
                                                                    <option value="Payment-Incomplete">Payment-Incomplete</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* Quantity:</label>
                                                                <input type="number" name="s_quantity" value="0" class="form-control form-control-danger">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">* Freight Price</label>
                                                                <input type="number" value="0.00" name="s_freight" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* Subtotal Shipping (USD)</label>
                                                                <input type="number" value="0.00" name="s_subtotal" class="form-control form-control-danger">
                                                            </div>
                                                        </div>

                                                    </div>



                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* Date</label>
                                                                <input type="date" name="s_date" class="form-control form-control-danger">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* Tracking No:</label>
                                                                <input type="text" name="s_tracking" value="<?php
// program to generate random integer value
$i = 0;
$tmp = mt_rand(1, 9);
do {
    $tmp .= mt_rand(0, 9);
} while (++$i < 11);
echo '2VH' . $tmp;

?>" class="form-control form-control-danger">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">Estimated Delivery Date</label>
                                                                <input type="date" name="s_estimate" class="form-control form-control-danger">
                                                            </div>
                                                        </div>
                                                    </div>

                         <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * GigHub Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->

                                                </div>
                                                <div class="form-actions">
                                                    <input type="submit" name="submit" class="btn btn-primary" value="Create">
                                                    <a href="all_shipping.php" class="btn btn-inverse">Cancel</a>
                                                </div>
                                            </form>
                                        </div>
             <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * GigHub Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->

                                    </div>
                                </div>
                                <?php include "include/footer.php"?>
                            </div>
                        </div>
                    </div>
                    </div>

                    <script src="js/lib/jquery/jquery.min.js"></script>
                    <script src="js/lib/bootstrap/js/popper.min.js"></script>
                    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
                    <script src="js/jquery.slimscroll.js"></script>
                    <script src="js/sidebarmenu.js"></script>
                    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
                    <script src="js/custom.min.js"></script>
                    <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * GigHub Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->

                </body>

                </html>