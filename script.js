  // Function to validate the form fields
  function validateForm() {
    // Personal Details Validation
    var fullName = document.getElementById('fullName').value;
    var phoneNumber = document.getElementById('phoneNumber').value;
    var uid = document.getElementById('uid').value;
    var gender = document.getElementById('gender').value;
    var dateOfBirth = document.getElementById('dateOfBirth').value;
    var address = document.getElementById('address').value;
    var pincode = document.getElementById('pincode').value;
    var email = document.getElementById('email').value;

    // Building Details Validation
    var plotNo = document.getElementById('plotNo').value;
    var buildingCategory = document.getElementById('buildingCategory').value;
    var buildingDetails = document.getElementById('buildingDetails').value;
    var numFloors = document.getElementById('numFloors').value;
    var electionWardNo = document.getElementById('electionWardNo').value;
    var layout = document.getElementById('layout').value;
    var circleDivisionName = document.getElementById('circleDivisionName').value;
    var blockNo = document.getElementById('blockNo').value;
    var zoneNo = document.getElementById('zoneNo').value;

    // Lead Architect Details Validation
    var leadArchitectName = document.getElementById('leadArchitectName').value;
    var membershipNumber = document.getElementById('membershipNumber').value;
    var expiryDate = document.getElementById('expiryDate').value;

    // Technical Data Validation
    var buildingDimensions = document.getElementById('buildingDimensions').value;
    var parkingArea = document.getElementById('parkingArea').value;
    var buildingHeight = document.getElementById('buildingHeight').value;
    var floorArea = document.getElementById('floorArea').value;
    var constructionType = document.getElementById('constructionType').value;

    // Documents Validation
    var buildingPlan = document.getElementById('buildingPlan').value;
    var structuralDesign = document.getElementById('structuralDesign').value;
    var electricLayout = document.getElementById('electricLayout').value;

    // Additional Validation: Check number of floors based on building dimensions
  var buildingDimensions = document.getElementById('buildingDimensions').value;
  var numFloors = document.getElementById('numFloors').value;
 // Additional Validation: Check number of floors based on building dimensions
 var buildingDimensions = parseFloat(document.getElementById('buildingDimensions').value);
 var numFloors = parseInt(document.getElementById('numFloors').value);

 // Parse building dimensions to calculate allowed floors (adjust the formula as needed)
 var allowedFloors = Math.floor(buildingDimensions / 100); // Adjust as needed

 if (numFloors <= 0 || numFloors > allowedFloors) {
   alert('Number of floors must be between 1 and ' + allowedFloors + ' for the given building dimensions.');
   return false;
 }

 // Additional Validation: Check building height
 var buildingHeight = parseFloat(document.getElementById('buildingHeight').value);
 if (buildingHeight <= 0) {
   alert('Building height must be a positive value.');
   return false;
 }

 // Additional Validation: Check floor area
 var floorArea = parseFloat(document.getElementById('floorArea').value);
 if (floorArea <= 0) {
   alert('Floor area must be a positive value.');
   return false;
 }

 // Additional Validation: Check if documents are uploaded
 var buildingPlan = document.getElementById('buildingPlan').value;
 var structuralDesign = document.getElementById('structuralDesign').value;
 var electricLayout = document.getElementById('electricLayout').value;

 if (buildingPlan === '' || structuralDesign === '' || electricLayout === '') {
   alert('Please upload all required documents.');
   return false;
 }

    // Application Undertaking Validation
    var agreementCheckbox = document.getElementById('agreementCheckbox').checked;
    if (!agreementCheckbox) {
      alert('Please agree to the application undertaking before submitting.');
      return false;
    }

    // Validation checks for each field
    if (!/^[a-zA-Z ]+$/.test(fullName)) {
      alert('Please enter a valid Full Name (letters and spaces only).');
      return false;
    }

    if (!/^\d+$/.test(phoneNumber)) {
      alert('Please enter a valid Phone Number (numbers only).');
      return false;
    }

    if (!/^[a-zA-Z ]+$/.test(uid)) {
      alert('Please enter a valid UID (letters and spaces only).');
      return false;
    }

    // Add more specific validation checks for other fields...
  // Additional Validation: Date of Birth should not be in the future
  var today = new Date();
  var enteredDateOfBirth = new Date(dateOfBirth);
  
  if (enteredDateOfBirth > today) {
    alert('Date of Birth cannot be in the future.');
    return false;
  }
    // Validation passed if all checks are successful
    return true;
  }

  // Add event listener for form submission
  document.getElementById('buildingPermitForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Call the validation function before submitting the form
    if (validateForm()) {
      // If validation passes, submit the form
      this.submit();
    }
  });
</script>