<?php
include("include/header.php");
include("../connection/connect.php");
error_reporting(E_ALL);

$error = '';
$success = '';

if (isset($_POST['submit'])) {
    if (empty($_POST['title']) || empty($_POST['blog'])) {
        $error = '<div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>All fields Must be Fillup!</strong>
                  </div>';
    } else {
        $fname = $_FILES['file']['name'];
        if (!empty($fname)) {
            $temp = $_FILES['file']['tmp_name'];
            $fsize = $_FILES['file']['size'];
            $extension = strtolower(pathinfo($fname, PATHINFO_EXTENSION));
            $fnew = uniqid() . '.' . $extension;
            $store = "blog_img/" . basename($fnew);

            if (in_array($extension, ['jpg', 'png', 'gif'])) {
                if ($fsize >= 1000000) {
                    $error = '<div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <strong>Max Image Size is 1MB!</strong> Try a different Image.
                              </div>';
                } else {
                    // Generate a new UUID
                    $uuid_query = "SELECT UUID() as uuid";
                    $uuid_result = mysqli_query($conn, $uuid_query);
                    $uuid_row = mysqli_fetch_assoc($uuid_result);
                    $uuid = $uuid_row['uuid'];

                    $sql = "INSERT INTO ship_blog (id, title, blog, img) VALUES (UUID_TO_BIN(?), ?, ?, ?)";
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, "ssss", $uuid, $_POST['title'], $_POST['blog'], $fnew);

                    if (mysqli_stmt_execute($stmt)) {
                        move_uploaded_file($temp, $store);
                        $success = '<div class="alert alert-success alert-dismissible fade show">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <strong>Blog Added Successfully!</strong>
                                  </div>';
                    } else {
                        $error = '<div class="alert alert-danger alert-dismissible fade show">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <strong>Error adding blog: </strong> ' . mysqli_error($conn) . '
                                  </div>';
                    }
                }
            } else {
                $error = '<div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong>Invalid extension!</strong> png, jpg, gif are accepted.
                          </div>';
            }
        } else {
            $error = '<div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>Please select an image.</strong>
                      </div>';
        }
    }
}
?>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <nav class="app-header navbar navbar-expand bg-body">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                            <i class="bi bi-list"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a href="dashboard.php" class="nav-link">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown user-menu">
                                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                                <img src="assets/icons/manager.png" class="user-image rounded-circle shadow" alt="User Image" />
                                                <span class="d-none d-md-inline">Admin</span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                                <li class="user-header text-bg-primary">
                                                    <img src="assets/icons/manager.png" class="rounded-circle shadow" alt="User Image" />
                                                    <p>
                                                        Admin 
                                                        <small></small>
                                                    </p>
                                                </li>
                                                <li class="user-footer">
                                                    <a href="#" class="btn btn-outline-secondary">Profile</a>
                                                    <a href="logout.php" class="btn btn-outline-danger float-end">Sign out</a>
                                                </li>
                                            </ul>
                                        </li>
                </ul>
            </div>
        </nav>
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <div class="sidebar-brand">
                <svg
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 500 120"
    class="logo-svg"
    aria-label="Marinex logo"
  >
                        <!-- Orange Square with Plane Icon -->
                        <g transform="translate(10,20)">
                            <!-- Square -->
                            <rect x="0" y="0" width="80" height="70" rx="10"
                                fill="none" stroke="#FF7A00" stroke-width="2" />

                            <!-- Plane Icon -->
                            <path d="M20 50 L40 40 L20 10 L30 10 L50 35 L70 25 L75 30 L50 45 L30 60 L20 60 Z"
                                fill="#fff" />
                        </g>

                        <!-- Text -->
                        <text x="120" y="70"
                            font-family="Montserrat, Arial, sans-serif"
                            font-size="46"
                            font-weight="700"
                            fill="#fff">
                            Marinex
                        </text>
                    </svg>
            </div>
            <div class="sidebar-wrapper">
                <nav class="mt-2">
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation" aria-label="Main navigation" data-accordion="false" id="navigation">
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link"><i class="nav-icon bi bi-speedometer"></i><p>Dashboard</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="nav-icon bi bi-truck-flatbed"></i><p>Shipping<i class="nav-arrow bi bi-chevron-right"></i></p></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"><a href="all_shipping.php" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>All Shipping</p></a></li>
                                <li class="nav-item"><a href="add_shipping.php" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Create Shipping</p></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="nav-icon bi bi-pencil-square"></i><p>Update Shipping<i class="nav-arrow bi bi-chevron-right"></i></p></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"><a href="update_status.php" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Update Shipping Status</p></a></li>
                                <li class="nav-item"><a href="all_shipping_updates.php" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>All Shipping Updates</p></a></li>
                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active"><i class="nav-icon bi bi-journal-text"></i><p>Ship Blog<i class="nav-arrow bi bi-chevron-right"></i></p></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"><a href="all_blogs.php" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>All Blog</p></a></li>
                                <li class="nav-item"><a href="add_blog.php" class="nav-link active"><i class="nav-icon bi bi-circle"></i><p>Add blog</p></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="all_users.php" class="nav-link"><i class="nav-icon bi bi-people"></i><p>Users</p></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Add New Blog</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="all_blogs.php">Blogs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add New</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    <?php echo $error; echo $success; ?>
                    <div class="card card-outline-primary">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">CREATE NEW BLOG POST</h4>
                        </div>
                        <div class="card-body">
                            <form action='' method='post' enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3">
                                            <label for="title" class="form-label">* Title</label>
                                            <input type="text" id="title" name="title" class="form-control" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="file" class="form-label">* Image</label>
                                            <input type="file" id="file" name="file" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="blog" class="form-label">* Blog Content</label>
                                            <textarea id="blog" name="blog" class="form-control" rows="5" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                    <a href="all_blogs.php" class="btn btn-inverse">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include("include/footer.php"); ?>
    </div>
</body>
</html>