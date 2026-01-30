<?php
include("include/header.php");
include("../connection/connect.php");
error_reporting(E_ALL);

$error = '';
$success = '';

if (isset($_POST['submit'])) {
    // Check for empty fields
    $required_fields = ['s_country', 's_name', 's_address', 's_zip', 's_city', 's_state', 's_phone', 's_email', 'r_country', 'r_name', 'r_address', 'r_zip', 'r_city', 'r_state', 'r_phone', 'r_email', 's_trans', 's_type', 's_ptype', 's_description', 's_weight', 's_value', 's_insurance', 's_quantity', 's_freight', 's_subtotal', 's_date', 's_estimate', 's_tracking'];
    $empty_fields = [];
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $empty_fields[] = $field;
        }
    }

    if (!empty($empty_fields)) {
        $error = '<div class="alert alert-danger">The following fields are required: ' . implode(', ', $empty_fields) . '</div>';
    } else {
        // Use prepared statement to prevent SQL injection
        $sql = "INSERT INTO shipping (s_country, s_name, s_address, s_zip, s_city, s_state, s_phone, s_email, r_country, r_name, r_address, r_zip, r_city, r_state, r_phone, r_email, s_trans, s_type, s_ptype, s_description, s_weight, s_value, s_insurance, s_quantity, s_freight, s_subtotal, s_date, s_estimate, s_tracking) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param(
            $stmt, 
            "sssisssssssissssssssidsisdsss",
            $_POST['s_country'], $_POST['s_name'], $_POST['s_address'], $_POST['s_zip'], $_POST['s_city'], $_POST['s_state'], $_POST['s_phone'], $_POST['s_email'], 
            $_POST['r_country'], $_POST['r_name'], $_POST['r_address'], $_POST['r_zip'], $_POST['r_city'], $_POST['r_state'], $_POST['r_phone'], $_POST['r_email'], 
            $_POST['s_trans'], $_POST['s_type'], $_POST['s_ptype'], $_POST['s_description'], $_POST['s_weight'], $_POST['s_value'], $_POST['s_insurance'], 
            $_POST['s_quantity'], $_POST['s_freight'], $_POST['s_subtotal'], $_POST['s_date'], $_POST['s_estimate'], $_POST['s_tracking']
        );

        if (mysqli_stmt_execute($stmt)) {
            $success = '<div class="alert alert-success">New Shipment Created Successfully.</div>';
        } else {
            $error = '<div class="alert alert-danger">Error creating shipment: ' . mysqli_error($conn) . '</div>';
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
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active"><i class="nav-icon bi bi-truck-flatbed"></i><p>Shipping<i class="nav-arrow bi bi-chevron-right"></i></p></a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"><a href="all_shipping.php" class="nav-link"><i class="nav-icon bi bi-circle"></i><p>All Shipping</p></a></li>
                                <li class="nav-item"><a href="add_shipping.php" class="nav-link active"><i class="nav-icon bi bi-circle"></i><p>Create Shipping</p></a></li>
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
                            <h3 class="mb-0">Create Shipment</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create Shipment</li>
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
                            <h4 class="m-b-0 text-white">Create a Shipment</h4>
                        </div>
                        <div class="card-body">
                            <form action='' method='post'>
                                <div class="form-body">
                                    <p class="from-style">1. From (Sender)</p>
                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">* Country/Territory</label><input type="text" name="s_country" class="form-control"></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">* Sender Name</label><input type="text" name="s_name" class="form-control"></div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">* Address</label><input type="text" name="s_address" class="form-control"></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">* Zip</label><input type="text" name="s_zip" class="form-control"></div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">* City</label><input type="text" name="s_city" class="form-control"></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">* State</label><input type="text" name="s_state" class="form-control"></div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">* Phone</label><input type="text" name="s_phone" class="form-control"></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">* Email</label><input type="email" name="s_email" class="form-control"></div>
                                    </div>

                                    <p class="from-style">2. To (Recipient)</p>
                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">* Country/Territory</label><input type="text" name="r_country" class="form-control"></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">* Recipient Name</label><input type="text" name="r_name" class="form-control"></div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">* Address</label><input type="text" name="r_address" class="form-control"></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">* Zip</label><input type="text" name="r_zip" class="form-control"></div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">* City</label><input type="text" name="r_city" class="form-control"></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">* State</label><input type="text" name="r_state" class="form-control"></div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">* Phone</label><input type="text" name="r_phone" class="form-control"></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">* Email</label><input type="email" name="r_email" class="form-control"></div>
                                    </div>

                                    <p class="from-style">3. Shipping Information</p>
                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">Bill Transportation:</label><select name="s_trans" class="form-control custom-select"><option value="Paid">Paid</option><option value="Not Paid">Not-Paid</option></select></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">Service Type:</label><select name="s_type" class="form-control custom-select"><option value="Parcel Shipping">Parcel Shipping</option><option value="Sea Freight">Sea Freight</option><option value="Air Freight">Air Freight</option><option value="Road Freight">Road Freight</option><option value="Expedited Freight">Expedited Freight</option><option value="Railway">Railway</option><option value="First Overnight">First Overnight</option></select></div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">* Product Type</label><select name="s_ptype" class="form-control custom-select"><option value="Box">Box</option><option value="Mailer">Mailer</option><option value="Tube">Tube</option><option value="Freight Box">Freight Box</option><option value="Envelope">Envelope</option></select></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">* Product Status:</label><select name="s_description" class="form-control custom-select"><option value="In-Transit">In-Transit</option><option value="On-Hold">On-Hold</option><option value="Held in Customs">Held in Customs</option><option value="To-Pay">To-Pay</option><option value="Shipment is on Hold">Shipment is on Hold</option></select></div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">* Weight (kg)</label><input type="number" name="s_weight" class="form-control"></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">* Declared Value (USD)</label><input type="number" name="s_value" class="form-control"></div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">Insurance:</label><select name="s_insurance" class="form-control custom-select"><option value="Paid">Paid</option><option value="ToPay">To Pay</option><option value="Cash on Delivery">Cash on Delivery</option></select></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">* Quantity:</label><input type="number" name="s_quantity" class="form-control"></div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">* Freight Price</label><input type="number" name="s_freight" class="form-control"></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">* Subtotal Shipping (USD)</label><input type="number" name="s_subtotal" class="form-control"></div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6 mb-3"><label class="control-label">* Date</label><input type="date" name="s_date" class="form-control"></div>
                                        <div class="col-md-6 mb-3"><label class="control-label">* Estimated Delivery Date</label><input type="date" name="s_estimate" class="form-control"></div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-12 mb-3"><label class="control-label">* Tracking No:</label><input type="text" name="s_tracking" value="<?php $i = 0; $tmp = mt_rand(1, 9); do { $tmp .= mt_rand(0, 9); } while (++$i < 11); echo '2VH' . $tmp; ?>" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" name="submit" class="btn btn-primary">Create</button>
                                    <a href="all_shipping.php" class="btn btn-inverse">Cancel</a>
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
