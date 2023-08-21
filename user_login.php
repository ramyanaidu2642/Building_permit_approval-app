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
    // Get the user's full name and UID from the form
    $userFullName = $_POST["fullname"];
    $userUID = $_POST["uid"];

    // Prepare and execute the SQL query to fetch user details
    $sql = "SELECT * FROM building_permit_applications WHERE fullName = '$userFullName' AND uid = '$userUID'";
    $result = $conn->query($sql);

    // Check if a row is returned from the query
    if ($result->num_rows == 1) {
        // User login successful, redirect to user dashboard or profile page
        header("Location: user_dashboard.php"); // Replace with the appropriate dashboard or profile page
        exit();
    } else {
        // User login failed, display error message
        $loginError = "Invalid full name or UID";
    }
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
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
      <h2>User Login</h2>
      <form action="dashboard.php" method="POST">
        <div class="form-field">
          <label for="fullname">Full Name:</label>
          <input type="text" id="fullname" name="fullname" required>
        </div>

        <div class="form-field">
          <label for="uid">UID:</label>
          <input type="text" id="uid" name="uid" required>
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
<?php include('foot.php');?>
</html>

