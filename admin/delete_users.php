<?php
include("../connection/connect.php");
error_reporting(E_ALL);

if (isset($_GET['user_del'])) {
    $user_del_id = $_GET['user_del'];

    // Delete the user from the database
    $sql_delete = "DELETE FROM users WHERE u_id = ?";
    $stmt_delete = mysqli_prepare($conn, $sql_delete);
    mysqli_stmt_bind_param($stmt_delete, "i", $user_del_id);

    if (mysqli_stmt_execute($stmt_delete)) {
        $_SESSION['success_message'] = "User deleted successfully.";
    } else {
        $_SESSION['error_message'] = "Error deleting user: " . mysqli_error($conn);
    }
} else {
    $_SESSION['error_message'] = "No user ID provided.";
}

header("Location: all_users.php");
exit();
?>