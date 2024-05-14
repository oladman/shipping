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
                include("../connection/connect.php");
                error_reporting(0);
                session_start();




                if (isset($_POST['submit']))        
                {







                    if ( empty($_POST['ss_location']) || empty($_POST['ss_comment']) || empty($_POST['ss_status']) || empty($_POST['ss_date']) || empty($_POST['ss_time']) ) {
                        $error =     '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>All fields Must be Fillup!</strong>
															</div>';
                    }else {

                        $sql = "update ship_status set ss_location='$_POST[ss_location]',ss_comment='$_POST[ss_comment]',ss_status='$_POST[ss_status]',ss_date='$_POST[ss_date]',ss_time='$_POST[ss_time]' where ss_id='$_GET[shipping_upd]'" ;  
                        mysqli_query($db, $sql);
                        

                        $success =     '<div class="alert alert-success alert-dismissible fade show">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <strong>Record Updated!</strong>
                                                    </div>';
                    }
                }








                ?>
                


                <head>
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta name="description" content="">
                    <meta name="author" content="">
                    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
                    <title>Update Shipping</title>
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
                                <marquee onMouseOver="this.stop()" onMouseOut="this.start()"> <a href="https://www.youtube.com/@codecampbdofficial">OLADMAN</a> is the sole owner of this script. For any of your problems contact me on twitter <a href="https://twitter.com/iam_oladman">Twitter</a> Github</marquee>
                            </div>

                            


                            <div class="container-fluid">



                                <?php echo $error;
                                echo $success; ?>


<div class="col-lg-12">
                                    <div class="card card-outline-primary">
                                        <div class="card-header">
                                            <h4 class="m-b-0 text-white">Edit Shiping Status</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action='' method='post' enctype="application/x-www-form-urlencoded">
                                                <div class="form-body">
                                                <?php $qml = "select * from ship_status where ss_id='$_GET[shipping_upd]'";
                                                    $rest = mysqli_query($db, $qml);
                                                    $roww = mysqli_fetch_array($rest);
                                                    ?>
                                    


                                                    <hr>
                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">* Location</label>
                                                            
                                                                <input type="text" name="ss_location" value="<?php echo $roww['ss_location']; ?>" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* Comment</label>
                                                               
                                                                <input type="text" name="ss_comment" value="<?php echo $roww['ss_comment']; ?>" class="form-control">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label class="control-label">Status:</label>
                                                                <select name="ss_status" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">

                                                                    
                                                                    <option value="Order Received">Order Received</option>
                                                                    <option value="Shipped">Shipped</option>
                                                                    <option value="Out for Delivery">Out for Delivery</option>
                                                                    <option value="On-hold">On-hold</option>
                                                                    <option value="Held by Custom">Held by Custom</option>
                                                                    <option value="Arrival at Processing Center">Arrival at Processing Center</option>
                                                                    <option value="Arrival at Destination Country">Arrival at Destination Country</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* Tracking</label>
                                                    
                                                                <input type="text" name="s_tracking" value="<?php echo $roww['s_tracking']; ?>" class="form-control">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row p-t-20">
                                                        <div class="col-md-6">
                                                        <div class="form-group has-danger">
                                                                <label class="control-label">* Date</label>
                                                               
                                                                <input type="date" name="ss_date" value="<?php echo $roww['ss_date']; ?>" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group has-danger">
                                                                <label class="control-label">* Time</label>
                                                                <input type="time" name="ss_time" value="<?php echo $roww['ss_time']; ?>" class="form-control">
                                                            </div>
                                                        </div>

                                                    </div>

                                                   
                                                </div>
                                                <div class="form-actions">
                                                    <input type="submit" name="submit" class="btn btn-primary" value="Save">
                                                    <a href="add_menu.php" class="btn btn-inverse">Cancel</a>
                                                </div>
                                            </form>
                                        </div>

                    
                                         
                                        </div>
                                    </div>
                                </div>

                                <?php include "include/footer.php" ?>

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

                </body>
                

                </html>



                <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * GigHub Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->