<?php?>
<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <style>
 /* Global Styles */
 body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    /* Container for the page content */
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    /* CSS for the banner container */
    .banner-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 300px;
      margin-bottom: 20px;
    }

    /* CSS for each banner image */
    .banner-image {
      width: 50%;
      height: 300px;
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    /* CSS for section containers */
    .section-container {
      display: flex;
      justify-content: space-around;
      align-items: center;
      height: 300px;
      margin-top: 30px;
    }

    .section {
      text-align: center;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 30%;
      transition: transform 0.2s;
    }

    /* Styling when hovering over the section */
    .section:hover {
      transform: scale(1.05);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    /* Styling for section headings */
    .section h2 {
      color: #333;
      font-size: 24px;
    }

    /* Styling for section descriptions */
    .section p {
      color: #666;
    }

    /* Styling for login/register links */
    .section a {
      display: inline-block;
      margin-top: 10px;
      padding: 8px 20px;
      background-color: #007BFF;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.2s;
    }

    /* Styling when hovering over login/register links */
    .section a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
<?php include('header.php');?>
  <div class="container">
  <div class="section-container">
    <!-- New User Section -->
    <div class="section">
      <h2>New User</h2>
      <p>Welcome to our website! If you are a new user, you can register here.</p>
      <a href="index.php">Register</a>
    </div>

    <!-- User Login Section -->
    <div class="section">
      <h2>User Login</h2>
      <p>Existing users can log in here to access their account.</p>
      <a href="user_login.php">Login</a>
    </div>

    <!-- Admin Login Section -->
    <div class="section">
      <h2>Admin Login</h2>
      <p>Admins can log in here to access the admin panel.</p>
      <a href="admin_login.php">Login</a>
    </div>
  </div>
</div>
<?php include('foot.php');?>
</body>
</html>
