<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>404 - Page Not Found | Oceanlogistix</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #f2f4f8;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;
      padding: 20px;
    }

    .error-container {
      max-width: 600px;
    }

    .error-icon {
      font-size: 6rem;
      color: #124076;
      margin-bottom: 20px;
    }

    h1 {
      font-size: 3rem;
      color: #333;
      margin-bottom: 10px;
    }

    p {
      font-size: 1.2rem;
      color: #666;
      margin-bottom: 30px;
    }

    a.back-home {
      display: inline-block;
      background-color: #124076;
      color: #fff;
      padding: 12px 24px;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 500;
      transition: background-color 0.3s ease;
    }

    a.back-home:hover {
      background-color: #0e325c;
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 2.2rem;
      }

      .error-icon {
        font-size: 4.5rem;
      }

      p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

  <div class="error-container">
    <div class="error-icon">
      <i class="fa-solid fa-triangle-exclamation"></i>
    </div>
    <h1>404 - Page Not Found</h1>
    <p>Sorry, the page or tracking number you are looking for doesn't exist.</p>
    <a href="index.php" class="back-home"><i class="fa-solid fa-arrow-left"></i> Back to Home</a>
  </div>

</body>
</html>
