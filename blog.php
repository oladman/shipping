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
include("connection/connect.php"); 
error_reporting(0);
session_start();

include_once 'product-action.php'; 

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
    <title>Oceanlogistix | Best Shippping for all global services | Track & Ship</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="/shipping/images/favicon.png"/>
    <script src="https://kit.fontawesome.com/41097bf629.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * Github Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->

    <header id="header" class="header-scroll top-header headrom">
        <nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/logo.png" alt="" width="18%"> </a>
                <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                      
                        <?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							}
						else
							{
									
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
                        <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * Github Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page-wrapper">
       
        <?php $ress= mysqli_query($db,"select * from ship_blog where d_id='$_GET[blog_id]'");
									     $rows=mysqli_fetch_array($ress);
										  
										  ?>
        <section >
                <div class="container">
                 
                       
                        <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * Github Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->

                      
                            <div class="blog-style">
                                <h1><?php echo $rows['title']; ?></h1>
                               
                                <?php echo '<img class="blog-image-style" src="admin/Res_img/'.$rows['img'].'" alt="Blog logo" >'; ?>
                          
                                <div class="blog-post-text"><?php echo $rows['blog']; ?></div>
                            </div>
                    


                    
                </div>
            
        </section>
       
        


        <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * Github Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->


        <?php include "include/footer.php" ?>

    </div>

    </div>
    <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * Github Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->


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