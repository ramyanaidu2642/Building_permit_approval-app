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

// Fetch data from the table
$sql = "SELECT * FROM building_permit_applications";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
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
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Admin Panel Styles */
h1 {
  text-align: center;
  margin-bottom: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid #ccc;
}

th, td {
  padding: 10px;
  text-align: center;
}

th {
  background-color: #f2f2f2;
}

td select {
  width: 100%;
  padding: 5px;
}

td button {
  padding: 8px 15px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

td button:hover {
  background-color: #45a049;
}
</style>
</head>
<body>
    <h1>Admin Panel</h1>
    <table>
        <tr>
        <tr>
            <th>Full Name</th>
            <th>UID</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Address</th>
            <th>Pincode</th>
            <th>Email</th>
            <th>Plot No</th>
            <th>Building Category</th>
            <th>Building Details</th>
            <th>Number of Floors</th>
            <th>Election Ward No</th>
            <th>Layout</th>
            <th>Circle Division Name</th>
            <th>Block No</th>
            <th>Zone No</th>
            <th>Lead Architect Name</th>
            <th>Membership Number</th>
            <th>Expiry Date</th>
            <th>Building Dimensions</th>
            <th>Parking Area</th>
            <th>Building Height</th>
            <th>Floor Area</th>
            <th>Construction Type</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row["fullName"]; ?></td>
                <td><?php echo $row["uid"]; ?></td>
                <td><?php echo $row["gender"]; ?></td>
                <td><?php echo $row["dateOfBirth"]; ?></td>
                <td><?php echo $row["address"]; ?></td>
                <td><?php echo $row["pincode"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["plotNo"]; ?></td>
                <td><?php echo $row["buildingCategory"]; ?></td>
                <td><?php echo $row["buildingDetails"]; ?></td>
                <td><?php echo $row["numFloors"]; ?></td>
                <td><?php echo $row["electionWardNo"]; ?></td>
                <td><?php echo $row["layout"]; ?></td>
                <td><?php echo $row["circleDivisionName"]; ?></td>
                <td><?php echo $row["blockNo"]; ?></td>
                <td><?php echo $row["zoneNo"]; ?></td>
                <td><?php echo $row["leadArchitectName"]; ?></td>
                <td><?php echo $row["membershipNumber"]; ?></td>
                <td><?php echo $row["expiryDate"]; ?></td>
                <td><?php echo $row["buildingDimensions"]; ?></td>
                <td><?php echo $row["parkingArea"]; ?></td>
                <td><?php echo $row["buildingHeight"]; ?></td>
                <td><?php echo $row["floorArea"]; ?></td>
                <td><?php echo $row["constructionType"]; ?></td>
                <td>
                    <form action="update_status.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                        <select name="status">
                            <option value="process" <?php if ($row["status"] === "process") echo "selected"; ?>>Process</option>
                            <option value="approved" <?php if ($row["status"] === "approved") echo "selected"; ?>>Approved</option>
                            <option value="rejected" <?php if ($row["status"] === "rejected") echo "selected"; ?>>Rejected</option></td>
                        <td></select>
                        <button type="submit">Update</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
