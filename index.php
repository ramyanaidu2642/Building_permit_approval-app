<?php
?>
<!DOCTYPE html>
<html>
<head>
  <title>Building Permit Application Form</title>
  <?php include('header.php');?>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>Building Permit Application</h1>
  <form id="buildingPermitForm" action="process_form.php" method="POST">
    <!-- Personal Details -->
    <fieldset>
      <legend>Personal Details</legend>
      <div class="formField">
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" required>
      </div>

      <div class="formField">
        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" required>
      </div>

      <div class="formField">
        <label for="uid">UID:</label>
        <input type="text" id="uid" name="uid" required>
      </div>
      <div class="formField">
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" required>
      </div>

      <div class="formField">
        <label for="dateOfBirth">Date of Birth:</label>
        <input type="date" id="dateOfBirth" name="dateOfBirth" required>
      </div>

      <div class="formField">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
      </div>

      <div class="formField">
        <label for="pincode">Pincode:</label>
        <input type="text" id="pincode" name="pincode" required>
      </div>

      <div class="formField">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
    </fieldset>

    <!-- Building Details -->
    <fieldset>
      <legend>Building Details</legend>
      <div class="formField">
        <label for="plotNo">Plot No:</label>
        <input type="text" id="plotNo" name="plotNo" required>
      </div>

      <div class="formField">
        <label for="buildingCategory">Building Category:</label>
        <select id="buildingCategory" name="buildingCategory" required>
          <option value="">Select Building Category</option>
          <option value="residential">Residential</option>
          <option value="commercial">Commercial</option>
          <option value="industrial">Industrial</option>
        </select>
      </div>

      <div class="formField">
        <label for="buildingDetails">Building Details:</label>
        <textarea id="buildingDetails" name="buildingDetails" required></textarea>
      </div>

      <div class="formField">
        <label for="numFloors">Number of Floors:</label>
        <input type="number" id="numFloors" name="numFloors" required>
      </div>

      <div class="formField">
        <label for="electionWardNo">Election Ward No:</label>
        <input type="text" id="electionWardNo" name="electionWardNo" required>
      </div>

      <div class="formField">
        <label for="layout">Layout:</label>
        <input type="text" id="layout" name="layout" required>
      </div>

      <div class="formField">
        <label for="circleDivisionName">Circle Division Name:</label>
        <input type="text" id="circleDivisionName" name="circleDivisionName" required>
      </div>

      <div class="formField">
        <label for="blockNo">Block No:</label>
        <input type="text" id="blockNo" name="blockNo" required>
      </div>

      <div class="formField">
        <label for="zoneNo">Zone No:</label>
        <input type="text" id="zoneNo" name="zoneNo" required>
      </div>
    </fieldset>

    <!-- Lead Architect Details -->
    <fieldset>
      <legend>Lead Architect Details</legend>
      <div class="formField">
        <label for="leadArchitectName">Lead Architect Name:</label>
        <input type="text" id="leadArchitectName" name="leadArchitectName" required>
      </div>

      <div class="formField">
        <label for="membershipNumber">Membership Number:</label>
        <input type="text" id="membershipNumber" name="membershipNumber" required>
      </div>

      <div class="formField">
        <label for="expiryDate">Expiry Date:</label>
        <input type="date" id="expiryDate" name="expiryDate" required>
      </div>
    </fieldset>

    <!-- Technical Data -->
    <fieldset>
      <legend>Technical Data</legend>
      <div class="formField">
        <label for="buildingDimensions">Building Dimensions (in meters):</label>
        <input type="text" id="buildingDimensions" name="buildingDimensions" required>
      </div>

      <div class="formField">
        <label for="parkingArea">Parking Area (in square meters):</label>
        <input type="number" id="parkingArea" name="parkingArea" required>
      </div>

      <div class="formField">
        <label for="buildingHeight">Building Height (in meters):</label>
        <input type="number" id="buildingHeight" name="buildingHeight" required>
      </div>

      <div class="formField">
        <label for="floorArea">Floor Area (in square meters):</label>
        <input type="number" id="floorArea" name="floorArea" required>
      </div>

      <div class="formField">
        <label for="constructionType">Construction Type:</label>
        <select id="constructionType" name="constructionType" required>
          <option value="">Select Construction Type</option>
          <option value="concrete">Concrete</option>
          <option value="steel">Steel</option>
          <option value="wood">Wood</option>
        </select>
      </div>
    </fieldset>

    <!-- Documents -->
    <fieldset>
      <legend>Documents</legend>
      <div class="formField">
        <label for="buildingPlan">Building Plan (PDF):</label>
        <input type="file" id="buildingPlan" name="buildingPlan" accept=".pdf" required>
      </div>

      <div class="formField">
        <label for="structuralDesign">Structural Design (PDF):</label>
        <input type="file" id="structuralDesign" name="structuralDesign" accept=".pdf" required>
      </div>

      <div class="formField">
        <label for="electricLayout">Electrical Layout (PDF):</label>
        <input type="file" id="electricLayout" name="electricLayout" accept=".pdf" required>
      </div>
    </fieldset>

    <!-- Application Undertaking -->
    <fieldset>
      <legend>Application Undertaking</legend>
      <div class="formField">
        <label>
        <input type="checkbox" id="agreementCheckbox" name="agreementCheckbox" class="custom-checkbox" required>
          I hereby declare that the information provided in this application is true and accurate to the best of my knowledge.
        </label>
      </div>
    </fieldset>

    <button type="submit">Submit Application</button>
  </form>

  <script src="script.js"></script>
</body>
<?php include('foot.php');?>
</html>
