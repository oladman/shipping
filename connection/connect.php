<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASSWORD = "";
$DB_NAME = "shipping";
$DB_CHARSET = "utf8mb4";

// Safe connection
try {
  $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
  if (!$conn) {
    throw new Exception("Database connection failed: " . mysqli_connect_error());
  }
} catch (Exception $e) {
  die($e->getMessage()); // Or log the error and display a user-friendly message
}
?>
