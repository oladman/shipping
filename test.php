<?php
$conn = mysqli_connect("localhost", "root", "", "shipping_oceanlogistix");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
}
?>
