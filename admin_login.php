<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "approval_form_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$loginError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the admin username and password from the form
  $adminUsername = $_POST["adminUsername"];
  $adminPassword = $_POST["adminPassword"];

  // Prepare and execute the SQL query
  $sql = "SELECT * FROM admin WHERE admin_username = '$adminUsername' AND admin_password = '$adminPassword'";
  $result = $conn->query($sql);

  // Check if there is a row returned from the query
  if ($result->num_rows == 1) {
    // Admin login successful, redirect to admin panel
    header("Location: admin_panel.php");
    exit();
  } else {
    // Admin login failed, display error message
    $loginError = "Invalid username or password";
  }
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <?php include('header.php');?>
  <style>
    /* Global Styles */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    /* Container for the page content */
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    /* Login Form Styles */
    .login-form {
      text-align: center;
    }

    .login-form h2 {
      margin-bottom: 20px;
    }

    .form-field {
      margin-bottom: 15px;
    }

    .form-field label {
      display: block;
      font-weight: bold;
    }

    .form-field input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .form-field button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .form-field button:hover {
      background-color: #45a049;
    }

    /* Error Message Styles */
    .error-message {
      color: red;
      font-size: 14px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h2>Admin Login</h2>
      <form action="admin_panel.php" method="POST">
        <div class="form-field">
          <label for="adminUsername">Admin Username:</label>
          <input type="text" id="adminUsername" name="adminUsername" required>
        </div>

        <div class="form-field">
          <label for="adminPassword">Admin Password:</label>
          <input type="password" id="adminPassword" name="adminPassword" required>
        </div>

        <div class="form-field">
          <button type="submit">Login</button>
        </div>

        <!-- Display error message if login fails -->
        <?php if (isset($loginError) && !empty($loginError)) { ?>
          <div class="error-message"><?php echo $loginError; ?></div>
        <?php } ?>
      </form>
    </div>
  </div>
</body>

</html>
<?php include('foot.php');?>
