<?php
include("include/header.php");
include("../connection/connect.php");
error_reporting(E_ALL);

// Fetch all shipping records
$shipping_data = [];
$sql = "SELECT * FROM shipping";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $shipping_data[] = $row;
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
                            <a href="dashboard.php" class="nav-link">
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon bi bi-truck-flatbed"></i>
                                <p>
                                    Shipping
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="all_shipping.php" class="nav-link active">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>All Shipping</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="add_shipping.php" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create Shipping</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-pencil-square"></i>
                                <p>
                                    Update Shipping
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="update_status.php" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Update Shipping Status</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="all_shipping_updates.php" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>All Shipping Updates</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-journal-text"></i>
                                <p>
                                    Ship Blog
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="all_blogs.php" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>All Blog</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="add_blog.php" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Add blog</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="all_users.php" class="nav-link">
                                <i class="nav-icon bi bi-people"></i>
                                <p>Users</p>
                            </a>
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
                            <h3 class="mb-0">All Shipping Records</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Shipping</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Shipping Records</h3>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Tracking No</th>
                                                <th>Sender Name</th>
                                                <th>Recipient Name</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($shipping_data)) { ?>
                                                <?php foreach ($shipping_data as $shipping_item) { ?>
                                                    <tr>
                                                        <td><?php echo $shipping_item['s_id']; ?></td>
                                                        <td><?php echo $shipping_item['s_tracking']; ?></td>
                                                        <td><?php echo $shipping_item['s_name']; ?></td>
                                                        <td><?php echo $shipping_item['r_name']; ?></td>
                                                        <td><?php echo $shipping_item['s_description']; ?></td>
                                                        <td><?php echo $shipping_item['s_date']; ?></td>
                                                        <td>
                                                            <a href="update_shipping.php?s_id=<?php echo $shipping_item['s_id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                                            <a href="delete_shipping.php?s_id=<?php echo $shipping_item['s_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure you want to delete this shipping record?\');">Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <tr>
                                                    <td colspan="7" class="text-center">No shipping records found.</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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
