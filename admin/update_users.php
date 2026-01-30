<?php
include("include/header.php");
include("../connection/connect.php");
error_reporting(E_ALL);

$error = '';
$success = '';
$user_upd = $_GET['user_upd'] ?? null;

// Fetch the user for editing
if ($user_upd) {
    $sql = "SELECT * FROM users WHERE u_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $user_upd);
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

// Handle form submission for updating the user
if (isset($_POST['submit'])) {
    $required_fields = ['uname', 'fname', 'lname', 'email', 'phone'];
    $empty_fields = [];
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $empty_fields[] = $field;
        }
    }

    if (!empty($empty_fields)) {
        $error = '<div class="alert alert-danger">The following fields are required: ' . implode(', ', $empty_fields) . '</div>';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error = '<div class="alert alert-danger">Invalid email format.</div>';
    } elseif (!empty($_POST['password']) && strlen($_POST['password']) < 6) {
        $error = '<div class="alert alert-danger">Password must be at least 6 characters long.</div>';
    } else {
        $username = $_POST['uname'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        if (!empty($_POST['password'])) {
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $update_sql = "UPDATE users SET username = ?, f_name = ?, l_name = ?, email = ?, phone = ?, password = ? WHERE u_id = ?";
            $update_stmt = mysqli_prepare($conn, $update_sql);
            mysqli_stmt_bind_param($update_stmt, "ssssssi", $username, $fname, $lname, $email, $phone, $password, $user_upd);
        } else {
            $update_sql = "UPDATE users SET username = ?, f_name = ?, l_name = ?, email = ?, phone = ? WHERE u_id = ?";
            $update_stmt = mysqli_prepare($conn, $update_sql);
            mysqli_stmt_bind_param($update_stmt, "sssssi", $username, $fname, $lname, $email, $phone, $user_upd);
        }

        if (mysqli_stmt_execute($update_stmt)) {
            $success = '<div class="alert alert-success">User updated successfully.</div>';
            // Refresh user data
            $sql_refresh = "SELECT * FROM users WHERE u_id = ?";
            $stmt_refresh = mysqli_prepare($conn, $sql_refresh);
            mysqli_stmt_bind_param($stmt_refresh, "i", $user_upd);
            mysqli_stmt_execute($stmt_refresh);
            $result_refresh = mysqli_stmt_get_result($stmt_refresh);
            $user = mysqli_fetch_assoc($result_refresh);
        } else {
            $error = '<div class="alert alert-danger">Error updating user: ' . mysqli_error($conn) . '</div>';
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
                            <h3 class="mb-0">Edit User</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="all_users.php">Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit User</li>
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
                            <h4 class="m-b-0 text-white">Update User</h4>
                        </div>
                        <div class="card-body">
                            <form action='' method='post'>
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">Username</label><input type="text" name="uname" class="form-control" value="<?php echo htmlspecialchars($user['username']); ?>"></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">First-Name</label><input type="text" name="fname" class="form-control" value="<?php echo htmlspecialchars($user['f_name']); ?>"></div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">Last-Name </label><input type="text" name="lname" class="form-control" value="<?php echo htmlspecialchars($user['l_name']); ?>"></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">Email</label><input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($user['email']); ?>"></div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">Password</label><input type="password" name="password" class="form-control" placeholder="Leave blank to keep current password"></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">Phone</label><input type="text" name="phone" class="form-control" value="<?php echo htmlspecialchars($user['phone']); ?>"></div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                                    <a href="all_users.php" class="btn btn-inverse">Cancel</a>
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