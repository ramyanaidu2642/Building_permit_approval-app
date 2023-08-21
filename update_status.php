<?php
// Database connection parameters (same as in the admin_panel.php)
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

// Get the updated status and ID from the form
$status = $_POST["status"];
$id = $_POST["id"];

// Update the status in the database
$sql = "UPDATE building_permit_applications SET status = '$status' WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    // Redirect back to the admin panel after updating
    header("Location: admin_panel.php");
    exit();
} else {
    echo "Error updating status: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
