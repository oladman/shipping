<?php
include("include/header.php");
include("../connection/connect.php");
error_reporting(E_ALL);

$user_id = $_GET['user_id'] ?? null;

// Fetch user data
if ($user_id) {
    $sql = "SELECT * FROM users WHERE u_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $user_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    if (!$user) {
        // Redirect if user not found
        header("Location: all_users.php");
        exit();
    }
} else {
    header("Location: all_users.php");
    exit();
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
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="nav-icon bi bi-journal-text"></i><p>Ship Blog<i class="nav-arrow bi bi-chevron-right"></i></p></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"><a href="all_blogs.php" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>All Blog</p></a></li>
                                <li class="nav-item"><a href="add_blog.php" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>Add blog</p></a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="all_users.php" class="nav-link active"><i class="nav-icon bi bi-people"></i><p>Users</p></a>
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
                            <h3 class="mb-0">User Profile</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="all_users.php">Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="assets/img/user2-160x160.jpg" alt="User profile picture">
                                    </div>
                                    <h3 class="profile-username text-center"><?php echo htmlspecialchars($user['f_name'] . ' ' . $user['l_name']); ?></h3>
                                    <p class="text-muted text-center"><?php echo htmlspecialchars($user['username']); ?></p>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Email</b> <a class="float-right"><?php echo htmlspecialchars($user['email']); ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Phone</b> <a class="float-right"><?php echo htmlspecialchars($user['phone']); ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Address</b> <a class="float-right"><?php echo htmlspecialchars($user['address']); ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Registration Date</b> <a class="float-right"><?php echo htmlspecialchars($user['date']); ?></a>
                                        </li>
                                    </ul>
                                    <a href="update_users.php?user_upd=<?php echo $user['u_id']; ?>" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include("include/footer.php"); ?>
    </div>
</body>
</html>