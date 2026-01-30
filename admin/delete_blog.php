<?php
include("../connection/connect.php");
error_reporting(E_ALL);

if (isset($_GET['blog_del'])) {
    $blog_del_id = $_GET['blog_del'];

    // First, get the image file name to delete it from the folder
    $sql_get_image = "SELECT img FROM ship_blog WHERE id = UUID_TO_BIN(?)";
    $stmt_get_image = mysqli_prepare($conn, $sql_get_image);
    mysqli_stmt_bind_param($stmt_get_image, "s", $blog_del_id);
    mysqli_stmt_execute($stmt_get_image);
    $result_get_image = mysqli_stmt_get_result($stmt_get_image);

    if ($row = mysqli_fetch_assoc($result_get_image)) {
        $image_to_delete = "blog_img/" . $row['img'];

        // Now, delete the blog post from the database
        $sql_delete = "DELETE FROM ship_blog WHERE id = UUID_TO_BIN(?)";
        $stmt_delete = mysqli_prepare($conn, $sql_delete);
        mysqli_stmt_bind_param($stmt_delete, "s", $blog_del_id);

        if (mysqli_stmt_execute($stmt_delete)) {
            // If the database deletion is successful, delete the image file
            if (file_exists($image_to_delete)) {
                unlink($image_to_delete);
            }
            $_SESSION['success_message'] = "Blog post deleted successfully.";
        } else {
            $_SESSION['error_message'] = "Error deleting blog post: " . mysqli_error($conn);
        }
    } else {
        $_SESSION['error_message'] = "Blog post not found.";
    }
} else {
    $_SESSION['error_message'] = "No blog ID provided.";
}

header("Location: all_blogs.php");
exit();
?>