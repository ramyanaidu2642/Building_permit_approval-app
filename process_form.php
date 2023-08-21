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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST["fullName"];
    $phoneNumber = $_POST["phoneNumber"];
    $uid = $_POST["uid"];
    $gender = $_POST["gender"];
    $dateOfBirth = $_POST["dateOfBirth"];
    $address = $_POST["address"];
    $pincode = $_POST["pincode"];
    $email = $_POST["email"];
    $plotNo = $_POST["plotNo"];
    $buildingCategory = $_POST["buildingCategory"];
    $buildingDetails = $_POST["buildingDetails"];
    $numFloors = $_POST["numFloors"];
    $electionWardNo = $_POST["electionWardNo"];
    $layout = $_POST["layout"];
    $circleDivisionName = $_POST["circleDivisionName"];
    $blockNo = $_POST["blockNo"];
    $zoneNo = $_POST["zoneNo"];
    $leadArchitectName = $_POST["leadArchitectName"];
    $membershipNumber = $_POST["membershipNumber"];
    $expiryDate = $_POST["expiryDate"];
    $buildingDimensions = $_POST["buildingDimensions"];
    $parkingArea = $_POST["parkingArea"];
    $buildingHeight = $_POST["buildingHeight"];
    $floorArea = $_POST["floorArea"];
    $constructionType = $_POST["constructionType"];
    // Set agreementCheckbox value to 1 if it's checked, otherwise 0
    $agreementCheckbox = isset($_POST["agreementCheckbox"]) ? 1 : 0;

    // Prepare and execute the SQL query
    $sql = "INSERT INTO building_permit_applications (
        fullName, phoneNumber, uid, gender, dateOfBirth, address, pincode, email, plotNo, buildingCategory,
        buildingDetails, numFloors, electionWardNo, layout, circleDivisionName, blockNo, zoneNo,
        leadArchitectName, membershipNumber, expiryDate, buildingDimensions, parkingArea, buildingHeight,
        floorArea, constructionType, agreementCheckbox
    ) VALUES (
        '$fullName', '$phoneNumber', '$uid', '$gender', '$dateOfBirth', '$address', '$pincode', '$email',
        '$plotNo', '$buildingCategory', '$buildingDetails', $numFloors, '$electionWardNo', '$layout',
        '$circleDivisionName', '$blockNo', '$zoneNo', '$leadArchitectName', '$membershipNumber', '$expiryDate',
        '$buildingDimensions', $parkingArea, $buildingHeight, $floorArea, '$constructionType', $agreementCheckbox
    )";

    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
        echo "Data entered successfully! We will be in touch with your account details for the update of your permission.";
        header("Location: home.php"); // Redirect to header.php
        exit();
    } else {
        // Error inserting data
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
