<?php
include("../connection/connect.php");
error_reporting(E_ALL);

if (isset($_GET['s_id'])) {
    $shipping_id = $_GET['s_id'];

    // Delete the shipping record from the database
    $sql_delete = "DELETE FROM shipping WHERE s_id = ?";
    $stmt_delete = mysqli_prepare($conn, $sql_delete);
    mysqli_stmt_bind_param($stmt_delete, "i", $shipping_id);

    if (mysqli_stmt_execute($stmt_delete)) {
        $_SESSION['success_message'] = "Shipping record deleted successfully.";
    } else {
        $_SESSION['error_message'] = "Error deleting shipping record: " . mysqli_error($conn);
    }
} else {
    $_SESSION['error_message'] = "No shipping ID provided.";
}

header("Location: all_shipping.php");
exit();
?>
