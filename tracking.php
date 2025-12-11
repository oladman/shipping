<?php
// connect.php (for database connection)
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASSWORD = "";
$DB_NAME = "shipping";
$DB_CHARSET = "utf8mb4";



try {
  $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
  if (!$conn) {
    throw new Exception("Database connection failed: " . mysqli_connect_error());
  }
} catch (Exception $e) {
  die($e->getMessage()); // Or log the error and display a user-friendly message
}



error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$tracking = isset($_POST['search']) ? $_POST['search'] : ''; // Safely get the tracking number

function fetch_shipping_data($conn, $tracking)
{
  $sql = "SELECT * FROM `shipping` WHERE s_tracking = ?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    throw new Exception("SQL statement failed");
  }
  mysqli_stmt_bind_param($stmt, "s", $tracking);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function fetch_status_data($conn, $tracking)
{
  $sql = "SELECT * FROM `ship_status` WHERE s_tracking = ? ORDER BY ss_id DESC";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    throw new Exception("SQL statement failed");
  }
  mysqli_stmt_bind_param($stmt, "s", $tracking);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

try {
  $shipping_data = fetch_shipping_data($conn, $tracking);
  $status_data = fetch_status_data($conn, $tracking);
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
  $shipping_data = [];
  $status_data = [];
}

// 🚨 Redirect to 404 if tracking number doesn't exist
if (empty($shipping_data) && empty($status_data)) {
  header("Location: 404.php");
  exit();
}


$currentStatus = $status_data[0]['ss_status'] ?? null;
$statusDate = $status_data[0]['ss_date'] ?? null;


$statusAddress = $status_data[0]['ss_location'] ?? null;

if (!$statusAddress) {
  echo "No address available";
  exit;
}

$address = trim($statusAddress);
$address = trim($address, "'\"");

?>


<!DOCTYPE html>
<html lang="en">
<?php
//include "include/header.php";


?>

<head>
  <link href="css/track.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/41097bf629.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" media="print" href="print.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/jpg" href="/shipping/images/favicon.png" />
  <title>Tracking | Marinex </title>
  <script src="https://kit.fontawesome.com/41097bf629.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- JsBarcode CDN -->
  <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
  <script>
     // Function to trigger print
        function printPage() {
            window.print(); // This opens the browser's print dialog
        }

    function copyTracking() {
      const text = document.getElementById("trackingText").innerText;
      navigator.clipboard.writeText(text).then(() => {
        alert("Copied: " + text);
      });
    }

       document.addEventListener("DOMContentLoaded", function() {
      // Generate barcode
      <?php if (!empty($shipping_data)): ?>
      var trackingNumber = "<?php echo htmlspecialchars($shipping_data[0]['s_tracking']); ?>";
      JsBarcode("#barcode", trackingNumber, {
        format: "CODE128",
        width: 2,
        height: 50,
        displayValue: true,
        fontSize: 14
      });
      <?php endif; ?>
    });
  </script>

<style>
    @media print {
      .no-print { display: none; }
      #barcode { margin: 10px 0; max-width: 100%; }
    }
  </style>
</head>

<body>
  <section class="container-track">
    <?php if (!empty($shipping_data)): ?>
      <?php foreach ($shipping_data as $row): ?>

        <div class="track-left">
          <div class="track-left-top">
            <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="200" height="70" viewBox="0 0 500 120">
              <!-- Orange Square with Plane Icon -->
              <g transform="translate(10,20)">
                <!-- Square -->
                <rect x="0" y="0" width="80" height="70" rx="10"
                  fill="none" stroke="#FF7A00" stroke-width="2" />

                <!-- Plane Icon -->
                <path d="M20 50 L40 40 L20 10 L30 10 L50 35 L70 25 L75 30 L50 45 L30 60 L20 60 Z"
                  fill="#000" />
              </g>

              <!-- Text -->
              <text x="120" y="70"
                font-family="Montserrat, Arial, sans-serif"
                font-size="60"
                font-weight="550"
                fill="#333">
                Marinex
              </text>
            </svg></a>

          <div class="tracking-number-mobile">
          <div>
            <p class="text-tracking-number">Tracking No :</p>
          <p class="tracking-number"><?php echo htmlspecialchars($row['s_tracking']); ?></p></div>
          <svg id="barcode"></svg>
        </div>
          
          </div>
<hr class="line"/>
          <div class="track-left-middle">
            <div class="shipment-details-track">
              <div class="info-cover">
                <p class="title">Sender's name </p>
                <p class="content"><?php echo ucwords(strtolower(htmlspecialchars($row['s_name']))); ?></p>
              </div>
              <div class="info-cover">
                <p class="title">Contact </p>
                <p class="content"><?php echo ucwords(strtolower(htmlspecialchars($row['s_phone']))); ?></p>
                <p class="content"><?php echo ucwords(strtolower(htmlspecialchars($row['s_email']))); ?></p>
              </div>

              <div class="info-cover">
                <p class="title">Address</p>
                <p class="content">
                  <?php
                  echo ucwords(strtolower(htmlspecialchars(
                    $row['s_address'] . ', ' .
                      $row['s_city'] . ', ' .
                      $row['s_state'] . ', ' .
                      $row['s_country'] . ' - ' . 
                      $row['s_zip']
                  )));
                  ?>.
                </p>
              </div>
            </div>
            <hr class="line"/>
                        <div class="shipment-details-track">
              <div class="info-cover">
                <p class="title">Receiver's name </p>
                <p class="content"><?php echo ucwords(strtolower(htmlspecialchars($row['r_name']))); ?></p>
              </div>
              <div class="info-cover">
                <p class="title">Contact </p>
                <p class="content"><?php echo ucwords(strtolower(htmlspecialchars($row['r_phone']))); ?></p>
                <p class="content"><?php echo ucwords(strtolower(htmlspecialchars($row['r_email']))); ?></p>
              </div>

              <div class="info-cover">
                <p class="title">Address</p>
                <p class="content">
                  <?php
                  echo ucwords(strtolower(htmlspecialchars(
                    $row['r_address'] . ', ' .
                      $row['r_city'] . ', ' .
                      $row['r_state'] . ', ' .
                      $row['r_country'] . ' - ' . 
                      $row['r_zip']
                  )));
                  ?>.
                </p>
              </div>
            </div>
          </div>
          <hr class="line"/>
            <div class="shipment-info-track">
              <p class="title"> Shipment Details </p>
              <div class="shipment-details-cover">
                <p class="title">Service: </p>
                <p class="content"><?php echo ucwords(strtolower(htmlspecialchars($row['s_type']))); ?></p>
              </div>
              <div class="shipment-details-cover">
                <p class="title">Weight: </p>
                <p class="content"><?php echo ucwords(strtolower(htmlspecialchars($row['s_weight']))); ?>kg</p>
              </div>
               <div class="shipment-details-cover">
                <p class="title">Quantity: </p>
                <p class="content"><?php echo ucwords(strtolower(htmlspecialchars($row['s_quantity']))); ?></p>
              </div>
               <div class="shipment-details-cover">
                <p class="title">Insurance: </p>
                <p class="content"><?php echo ucwords(strtolower(htmlspecialchars($row['s_insurance']))); ?></p>
              </div>
               <div class="shipment-details-cover">
                <p class="title">Declared Value: </p>
                <p class="content">$<?php echo ucwords(strtolower(htmlspecialchars($row['s_value']))); ?></p>
              </div>
               <div class="shipment-details-cover">
                <p class="title">Sub Total: </p>
                <p class="content">$<?php echo ucwords(strtolower(htmlspecialchars($row['s_subtotal']))); ?></p>
              </div>
              <div class="shipment-details-cover">
                <p class="title">Freight Cost: </p>
                <p class="content"><?php echo ucwords(strtolower(htmlspecialchars($row['s_trans']))); ?></p>
              </div>
               <div class="shipment-details-cover">
                <p class="title">Freight Total Cost: </p>
                <p class="content">$<?php echo ucwords(strtolower(htmlspecialchars($row['s_freight']))); ?></p>
              </div>
               

              
            </div>
          </div>
        </div> <!-- END .track-left-up -->

        <div class="track-right">
          
          <div class="track-right-top">
           <div class="track-pc">
            <p class="text-tracking-number">Tracking No :</p>
          <p class="tracking-number"><?php echo htmlspecialchars($row['s_tracking']); ?></p> 
        </div>
           <svg id="barcode"></svg>
          
                </div>
                <hr class="line"/>
                <div class="track-right-middle">
                  <div class="track-right-middle-left" >
                    <p>Your order status:</p>
                    <h2 class="order-status"><?php echo htmlspecialchars($currentStatus); ?></h2>
                    <p class="last-updated">as on <?php echo date('F d, Y', strtotime($statusDate)); ?></p>
         <hr class="line blind no-print"/>                 
        <div class="track-another no-print">
          <p>Track Another Package</p>

          <form method="POST" action="tracking.php">
            <input class="input-one" name="search" placeholder="Enter Tracking Number" required />
            <input type="submit" value="Track" class="input-two" />
          </form>

        </div>
                  </div>
                    <div class="track-right-middle-right no-print">
        <div class="protection-scam">
          <div>
            <img src="https://img.icons8.com/ios/50/124076/security-checked--v1.png" />
            <div>
              <h1>Stay Safe - Avoid Fraud and Scams</h1>
              <p class="beware-text">Received a text, call, or email that seems suspicious? Don’t respond to it</p>
              <input type="submit" value="Tips to Avoid Fraud" class="input-two" />
            </div>
          </div>
      </div>
   
                      <div class="delivery-queries">
                      <p>For Delivery Queries</p>
                      <a href="#">Contact Us</a></div>
                    
                  </div>
                 
                </div>
                <hr class="line no-print"/>
                <div class="track-right-bottom">
                  <p class="tracking-history">Tracking History</p>
                        <div class="timeline-container">

        <?php foreach ($status_data as $index => $row): ?>

          <?php
          $formattedDateTime = strtotime($row['ss_date'] . ' ' . $row['ss_time']);
          $formattedDay = date('F d Y', $formattedDateTime);
          $formattedTime = date('h:i a', $formattedDateTime);
          ?>
          <div class="timeline-item <?= $index === 0 ? 'active' : '' ?>">
            <div class="timeline-date">
              <div class="day"><?= $formattedDay ?></div>
              <div class="time"><?= $formattedTime ?></div>
            </div>
            <div class="timeline-content">
              <div class="status <?= $index === 0 ? 'bold-status' : 'normal-status' ?>">
                <?= $row['ss_comment'] ?>
              </div>

              <div class="location"><?= $row['ss_location'] ?></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

                </div>
            
        </div>

      <?php endforeach; ?>
    <?php endif; ?>
  </section>
  <button class="no-print" onclick="printPage()">Print This Page</button>
</body>

</html>