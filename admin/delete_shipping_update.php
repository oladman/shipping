<?php
include("../connection/connect.php");
error_reporting(E_ALL);

if (isset($_GET['shipping_del'])) {
    $shipping_del_id = $_GET['shipping_del'];

    // Delete the shipping update from the database
    $sql_delete = "DELETE FROM ship_status WHERE ss_id = ?";
    $stmt_delete = mysqli_prepare($conn, $sql_delete);
    mysqli_stmt_bind_param($stmt_delete, "i", $shipping_del_id);

    if (mysqli_stmt_execute($stmt_delete)) {
        $_SESSION['success_message'] = "Shipping update deleted successfully.";
    } else {
        $_SESSION['error_message'] = "Error deleting shipping update: " . mysqli_error($conn);
    }
} else {
    $_SESSION['error_message'] = "No shipping update ID provided.";
}

header("Location: all_shipping_updates.php");
exit();
?>
