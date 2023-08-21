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
$userFullName = "";
$userUID = "";
// Add more variables for other user details as needed

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's full name and UID from the form
    $userFullName = $_POST["fullname"];
    $userUID = $_POST["uid"];

    // Prepare and execute the SQL query to fetch user details
    $sql = "SELECT * FROM building_permit_applications WHERE fullName = '$userFullName' AND uid = '$userUID'";
    $result = $conn->query($sql);

    // Check if a row is returned from the query
    if ($result->num_rows == 1) {
        // Fetch the user details from the result
        $userDetails = $result->fetch_assoc();
        // Assign other user details to variables as needed
        // For example: $userPhoneNumber = $userDetails["phoneNumber"];

        // Note: It's recommended to use session variables to store and access user details after login.
        // However, for the sake of simplicity, we are directly fetching the details here.

    } else {
        // User login failed, redirect back to login page
        header("Location: user_login.php");
        exit();
    }
} else {
    // If user directly accesses this page without logging in, redirect to login page
    header("Location: user_login.php");
    exit();
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<?php include('header.php');?>
  <!-- ... (CSS and other head content) ... -->
  <style>
    /* ... (Previous CSS styles) ... */
    body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

/* Table Styles */
table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ccc;
}

    /* Two Column Layout Styles */
    .user-details-container {
      display: flex;
      justify-content: space-between;
    }

    .user-details-container table {
      width: 45%;
      border-collapse: collapse;
    }

    .user-details-container th, .user-details-container td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ccc;
    }

    .user-details-left, .user-details-right {
      flex: 1;
      padding: 10px;
    }

    /* Highlight Status Styles (Same as before) */
    .status-approved {
      background-color: #b2d8b2;
    }

    .status-rejected {
      background-color: #ffc0c0;
    }

    
  </style>
</head>
<body>
  <h1>Welcome, <?php echo $userFullName; ?>!</h1>

  <h2>Your Details</h2>
  <div class="user-details-container">
    <div class="user-details-left">
      <table>
        <tr>
          <th>Full Name</th>
          <td><?php echo $userDetails["fullName"]; ?></td>
        </tr>
        <tr>
          <th>UID</th>
          <td><?php echo $userDetails["uid"]; ?></td>
        </tr>
        <!-- Add more table rows for the left side -->
        <tr>
          <th>Status</th>
          <td class="<?php echo ($userDetails["status"] === 'approved') ? 'status-approved' : 'status-rejected'; ?>">
            <?php echo $userDetails["status"]; ?>
          </td>
        </tr>
        <tr>
          <th>Gender</th>
          <td><?php echo $userDetails["gender"]; ?></td>
        </tr>
        <tr>
          <th>Date of Birth</th>
          <td><?php echo $userDetails["dateOfBirth"]; ?></td>
        </tr>
        <tr>
          <th>Address</th>
          <td><?php echo $userDetails["address"]; ?></td>
        </tr>
        <tr>
          <th>Pincode</th>
          <td><?php echo $userDetails["pincode"]; ?></td>
        </tr>
        <tr>
          <th>Email</th>
          <td><?php echo $userDetails["email"]; ?></td>
        </tr>
      </table>
    </div>
    <div class="user-details-right">
      <table>
        <!-- Add more table rows for the right side -->
        <tr>
          <th>Plot No</th>
          <td><?php echo $userDetails["plotNo"]; ?></td>
        </tr>
        <tr>
          <th>Building Category</th>
          <td><?php echo $userDetails["buildingCategory"]; ?></td>
        </tr>
        <tr>
          <th>Building Details</th>
          <td><?php echo $userDetails["buildingDetails"]; ?></td>
        </tr>
        <tr>
          <th>Number of Floors</th>
          <td><?php echo $userDetails["numFloors"]; ?></td>
        </tr>
        <tr>
          <th>Election Ward No</th>
          <td><?php echo $userDetails["electionWardNo"]; ?></td>
        </tr>
        <tr>
          <th>Layout</th>
          <td><?php echo $userDetails["layout"]; ?></td>
        </tr>
        <tr>
          <th>Circle Division Name</th>
          <td><?php echo $userDetails["circleDivisionName"]; ?></td>
        </tr>
        <tr>
          <th>Block No</th>
          <td><?php echo $userDetails["blockNo"]; ?></td>
        </tr>
        <tr>
          <th>Zone No</th>
          <td><?php echo $userDetails["zoneNo"]; ?></td>
        </tr>
        <tr>
          <th>Lead Architect Name</th>
          <td><?php echo $userDetails["leadArchitectName"]; ?></td>
        </tr>
        <tr>
          <th>Membership Number</th>
          <td><?php echo $userDetails["membershipNumber"]; ?></td>
        </tr>
        <tr>
          <th>Expiry Date</th>
          <td><?php echo $userDetails["expiryDate"]; ?></td>
        </tr>
        <tr>
          <th>Building Dimensions</th>
          <td><?php echo $userDetails["buildingDimensions"]; ?></td>
        </tr>
        <tr>
          <th>Parking Area</th>
          <td><?php echo $userDetails["parkingArea"]; ?></td>
        </tr>
        <tr>
          <th>Building Height</th>
          <td><?php echo $userDetails["buildingHeight"]; ?></td>
        </tr>
        <tr>
          <th>Floor Area</th>
          <td><?php echo $userDetails["floorArea"]; ?></td>
        </tr>
        <tr>
          <th>Construction Type</th>
          <td><?php echo $userDetails["constructionType"]; ?></td>
        </tr>
      </table>
    </div>
  </div>

  <!-- ... (Other content of the user dashboard) ... -->
</body>
<?php include('foot.php');?>
</html>


