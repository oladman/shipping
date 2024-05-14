<?php
/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * GitHub Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */

//main connection file for both admin & front end
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "shipping_oceanlogistix";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}
/*!
 * Author Name: Oladimeji Seunayo Ezekiel.
 * Twitter Link: https://twitter.com/iam_oladman">
 * GitHub Link: https://github.com/oladman">
 for any React, Next.js, PHP, Typescript Laravel, Javascript, Node.JS, Express.JS, MongoDB, SQL & PostgreSQL work contact me @ oladimejiseunayo@gmail.com
 * Visit My Website : https://oladimejiseunayo.netlify.app
 */

?>