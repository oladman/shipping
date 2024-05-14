                <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * GigHub Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->
                <?php
include("../connection/connect.php");
error_reporting(0);
session_start();

mysqli_query($db,"DELETE FROM ship_blog WHERE d_id = '".$_GET['blog_del']."'");
header("location:all_blogs.php");  

?>
                <!--/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * GigHub Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */ -->