<?php include("include/header.php"); ?>
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
                            <a href="dashboard.php" class="nav-link active">
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-truck-flatbed"></i>
                                <p>
                                    Shipping
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="all_shipping.php" class="nav-link">
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
                            <h3 class="mb-0">Dashboard</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    <div style="padding-top: 10px;">
                        <marquee onMouseOver="this.stop()" onMouseOut="this.start()"> <a href="https://github.com/oladman">OLADMAN</a> is the sole owner of this script. For any of your problems contact me on <a href="https://twitter.com/iam_oladman">Twitter</a> <a href="https://wa.me/+2349068084773">WhatsApp</a> </marquee>
                    </div>
                    <div class="row">
                        <div class="row">
                            <!-- Shipping Card -->
                            <div class="col-lg-3 col-6">
                                <div class="small-box text-bg-primary">
                                    <div class="inner">
                                        <h3><?php $sql = "select * from shipping";
                                            $result = mysqli_query($conn, $sql);
                                            $rws = mysqli_num_rows($result);
                                            echo $rws; ?></h3>
                                        <p>Shipping</p>
                                    </div>
                                    <div class="icon">
                                        <i class="bi bi-truck-flatbed"></i>
                                    </div>
                                    <a href="all_shipping.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                        More info <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Ship Status Card -->
                            <div class="col-lg-3 col-6">
                                <div class="small-box text-bg-success">
                                    <div class="inner">
                                        <h3><?php $sql = "select * from ship_status";
                                            $result = mysqli_query($conn, $sql);
                                            $rws = mysqli_num_rows($result);
                                            echo $rws; ?></h3>
                                        <p>Ship Status</p>
                                    </div>
                                    <div class="icon">
                                        <i class="bi bi-file-earmark-check"></i>
                                    </div>
                                    <a href="all_shipping_updates.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                        More info <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Users Card -->
                            <div class="col-lg-3 col-6">
                                <div class="small-box text-bg-warning">
                                    <div class="inner">
                                        <h3><?php $sql = "select * from users";
                                            $result = mysqli_query($conn, $sql);
                                            $rws = mysqli_num_rows($result);
                                            echo $rws; ?></h3>
                                        <p>Users</p>
                                    </div>
                                    <div class="icon">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <a href="all_users.php" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                                        More info <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Blog Card -->
                            <div class="col-lg-3 col-6">
                                <div class="small-box text-bg-info">
                                    <div class="inner">
                                        <h3><?php $sql = "select * from ship_blog";
                                            $result = mysqli_query($conn, $sql);
                                            $rws = mysqli_num_rows($result);
                                            echo $rws; ?></h3>
                                        <p>Blog</p>
                                    </div>
                                    <div class="icon">
                                        <i class="bi bi-journals"></i>
                                    </div>
                                    <a href="all_blogs.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                        More info <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include("include/footer.php"); ?>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
