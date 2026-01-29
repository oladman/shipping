<?php
include("connection/connect.php"); 
session_start();
include "include/header.php";

// Sanitize input from URL
$blog_id = isset($_GET['blog_id']) ? $_GET['blog_id'] : '';

if (empty($blog_id)) {
    // Redirect or show 404
    header("Location: index.php");
    exit;
}

// Fetch 5 latest posts (exclude current blog)
$recentQuery = "
    SELECT BIN_TO_UUID(id) AS id, title 
    FROM ship_blog 
    WHERE BIN_TO_UUID(id) != ?
    ORDER BY created_at DESC 
    LIMIT 5
";

$recentStmt = $conn->prepare($recentQuery);
$recentStmt->bind_param("s", $blog_id);
$recentStmt->execute();
$recentResult = $recentStmt->get_result();

// Fetch the blog post by UUID
$query = "SELECT BIN_TO_UUID(id) AS id, title, blog, img, created_at 
          FROM ship_blog 
          WHERE BIN_TO_UUID(id) = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $blog_id);
$stmt->execute();
$result = $stmt->get_result();
$rows = $result->fetch_assoc();

if (!$rows) {
    // Blog not found
    echo "<h2>Blog post not found!</h2>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($rows['title']); ?> | Marinex</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/newstyle.css" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet">
      <script src="https://kit.fontawesome.com/41097bf629.js" crossorigin="anonymous"></script>
</head>
<body>
<main class="container">
    <article class="blog-post">
      <h1 class="blog-title"><?php echo htmlspecialchars($rows['title']); ?></h1>

      <div class="blog-meta">
       
        <span class="date">Posted on: <?php echo date("d M Y", strtotime($rows['created_at'])); ?></span>
      </div>

      <img
        src="admin/blog_img/<?php echo htmlspecialchars($rows['img']); ?>"
        alt="<?php echo htmlspecialchars($rows['title']); ?>"
        class="blog-image-style"
      />

      <section class="blog-content">
        <?php echo $rows['blog']; ?>
      </section>
    </article>

    <aside class="sidebar">
  <h3>Recent Posts</h3>

  <ul class="recent-posts">
    <?php while ($post = $recentResult->fetch_assoc()) { ?>
      <li>
        <a href="blog.php?blog_id=<?php echo htmlspecialchars($post['id']); ?>">
          <?php echo htmlspecialchars($post['title']); ?>
        </a>
      </li>
    <?php } ?>
  </ul>
</aside>

  </main>

  <?php include "include/footer.php" ?>
</body>
</html>
