<html>
<head>
  <title>Donate Blood</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
    #sidebar{
  position:fixed;
  margin-top:-20px;
}
#content{
  position:relative;
  margin-left:210px;
}
.form-container {
      background-color: #fff;
      border-radius: 10px;
      padding: 40px;
      box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
      animation: fadeIn 0.5s ease;
      width: 600px;

    }
    
    .form-container h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      font-weight: bold;
    }
    
    .form-group input,
    .form-group select {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
    }
    
    .form-group input[type="submit"] {
      background-color: #e74c3c;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    
    .form-group input[type="submit"]:hover {
      background-color: #c0392b;
    }
    
    .form-group input[type="submit"]:focus {
      outline: none;
    }
    
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      font-weight: bold;
    }
    
    
    .form-group input.invalid,
    .form-group select.invalid {
      border: 2px solid #dc3545;
    }
    
    .form-group input.valid,
    .form-group select.valid {
      border: 2px solid #28a745;
    }
    
    .form-group .error-message {
      color: #dc3545;
      font-size: 12px;
      margin-top: 5px;
      display: none;
    }
    input:disabled {
      background-color: #d6d3d3;
      color: rgb(0, 0, 0);
    }
    select:disabled {
      background-color: #d6d3d3;
      color: rgb(0, 0, 0);
    }
    .overlay-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      z-index: 1;
      display: flex;
      align-items: center;
      text-align:left;
      justify-content: center;
    }

    .disclaimer {
      background-color: #fff;
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
      animation: fadeIn 0.5s ease;
      width: 600px;
    }

    .disclaimer h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .disclaimer label {
      display: block;
      margin-bottom: 15px;
      font-weight: bold;
    }

    .disclaimer input[type="checkbox"] {
      margin-right: 10px;
    }

    .disclaimer button {
      background-color: #e74c3c;
      color: #fff;
      border : none;
      border-radius : 20px;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .disclaimer button:hover {
      background-color: #c0392b;
    }

    .disclaimer button:focus {
      outline: none;
    }
</style>
</head>
<body>
<?php
include 'connection.php';
  include 'session.php';
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $user_name = $_SESSION['username'];
    $query = "SELECT * FROM users WHERE username = '{$user_name}'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $userphone = $row['phone'];
        $useremail = $row['mail_id'];
        $usergender = $row['gender'];
        $userblood = $row['blood_group'];
    }
  ?>
<body style="color:black">
<div id="header">
<?php include 'header.php';
?>
</div>
<div id="sidebar">
<?php $active="donate_blood"; include 'sidebar.php'; ?>

</div>
    <br><br>
  <center><div class="form-container">

    <h2>Donate Form</h2><br><br>
    <form id="bloodDonationForm" action="donate_req.php" method="post">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name " required >
        <div class="error-message" id="nameError">Name must contain only letters and be at least 6 characters long.</div>
      </div>
      <input type="hidden" id="hiddenname" name="hiddenname" value="<?php echo $name; ?>">
      <input type="hidden" id="hiddenemail" name="hiddenemail" value="<?php echo $useremail; ?>">
      <input type="hidden" id="hiddenphone" name="hiddenphone" value="<?php echo $userphone; ?>">
      <input type="hidden" id="hiddengender" name="hiddengender" value="<?php echo $usergender; ?>">
      <input type="hidden" id="hiddenblood" name="hiddenblood" value="<?php echo $userblood; ?>">

      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" placeholder="Enter your age " required>
        <div class="error-message" id="ageError">Age must be 18 or above.</div>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
          <option value="" disabled selected>Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="bloodGroup">Blood Group:</label>
        <select id="bloodGroup" name="bloodGroup" required>
          <option value="" disabled selected>Select your Blood Group</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
        </select>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your mail ID " required>
        <div class="error-message" id="emailError">Please enter a valid email address.</div>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" placeholder="Enter your address " required>
      </div>
      <div class="form-group">
        <label for="city">City:</label>
        <input type="text" id="city" name="city" placeholder="Enter your city name " required>
      </div>
      <div class="form-group">
        <label for="state">State:</label>
        <select id="state" name="state" required>
          <option value="" disabled selected>Select your State</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Odisha">Odisha</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Telangana">Telangana</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="Uttarakhand">Uttarakhand</option>
          <option value="West Bengal">West Bengal</option>
        </select>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" maxlength=10 placeholder="Enter your phone " required>
        <div class="error-message" id="phoneError">Phone must be a 10-digit number.</div>
      </div>
      <div class="form-group">
        <input type="submit" value="Submit" name="submit" >
      </div>
    </form>
<center>
<div class="overlay-container" id="disclaimerContainer">
    <div class="disclaimer">
      <h2>Terms And Conditions</h2>
      <p>Before placing request , please read and acknowledge the following terms and conditions:</p>
      <ol>
        <li>I am at least 18 years old.</li>
        <li>I am in good health and free from any cold, flu, or infection symptoms.</li>
        <li>I have not traveled to areas with known outbreaks of infectious diseases in the past 4 months.</li>
        <li>I have not received a tattoo, body piercing, or acupuncture in the past 6 months.</li>
        <li>I have not had a major surgery or dental procedure in the past 1 month.</li>
        <li>I have not donated blood in the past 8 weeks.</li>
        <li>I have not engaged in any kind of risky behavior that may transmit infectious diseases in the past 3 months.</li>
        <li>I am not currently taking any medication or have not taken medication in the past 2 weeks that may disqualify me from donating blood.</li>
        <li>I understand that the information provided is general and may not cover all eligibility criteria. The final determination of eligibility will be made by the blood donation organization's medical staff.</li>
      </ol>
      <label>
        <input type="checkbox" id="disclaimerCheckbox" required>
        I have read and hereby acknowledge the terms and conditions.
      </label>
      <button onclick="acceptDisclaimer()">Continue</button>
      <br><br><p id="checkfail" style="color:rgb(255,0,0)"></p>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
    const nameinput = document.getElementById('name');
    const phoneinput = document.getElementById('phone');
    const emailinput = document.getElementById('email');
    const genderinput = document.getElementById('gender');
    const bloodinput = document.getElementById('bloodGroup');

    if (typeof <?php echo json_encode($name); ?> !== "undefined") {
        nameinput.value = <?php echo json_encode($name); ?>;
        nameinput.disabled = true;
        nameinput.classList.add('disabled-input');
    }

    if (typeof <?php echo json_encode($userphone); ?> !== "undefined") {
        phoneinput.value = <?php echo json_encode($userphone); ?>;
        phoneinput.disabled = true;
        phoneinput.classList.add('disabled-input');
    }

    if (typeof <?php echo json_encode($useremail); ?> !== "undefined") {
        emailinput.value = <?php echo json_encode($useremail); ?>;
        emailinput.disabled = true;
        emailinput.classList.add('disabled-input');
    }
    if (typeof <?php echo json_encode($usergender); ?> !== "undefined") {
        genderinput.value = <?php echo json_encode($usergender); ?>;
        genderinput.disabled = true;
        genderinput.classList.add('disabled-select');
    }
    if (typeof <?php echo json_encode($userblood); ?> !== "undefined") {
        bloodinput.value = <?php echo json_encode($userblood); ?>;
        bloodinput.disabled = true;
        bloodinput.classList.add('disabled-select');
    }
  });
    function showDisclaimer() {
      const disclaimerContainer = document.getElementById('disclaimerContainer');
      disclaimerContainer.style.display = 'flex';
    }

    // Accept disclaimer
    function acceptDisclaimer() {
      const disclaimerCheckbox = document.getElementById('disclaimerCheckbox');
      if (disclaimerCheckbox.checked) {
        const disclaimerContainer = document.getElementById('disclaimerContainer');
        disclaimerContainer.style.display = 'none';
      } else {
        document.getElementById("checkfail").innerHTML = "<b>Please select the checkbox to continue</b>"
      }
    }
  
    // Show the form
    function showForm() {
      const formContainer = document.querySelector('.form-container');
      formContainer.style.display = 'block';
    }
    // Form validation
    function validateForm() {

      const nameInput = document.getElementById('name');
      const nameError = document.getElementById('nameError');
      const ageInput = document.getElementById('age');
      const ageError = document.getElementById('ageError');
      const bloodGroupInput = document.getElementById('bloodGroup');
      const emailInput = document.getElementById('email');
      const emailError = document.getElementById('emailError');
      const phoneInput = document.getElementById('phone');
      const phoneError = document.getElementById('phoneError');
      
      const namePattern = /^[a-z, ,A-Z]+$/;
      const pincodePattern = /^\d{6}$/;
      const phonePattern = /^\d{10}$/;
      
      let isValid = true;
      if (!namePattern.test(nameInput.value) || nameInput.value.length < 6) {
        nameInput.classList.add('invalid');
        nameInput.classList.remove('valid');
        nameError.style.display = 'block';
        isValid = false;
      } else {
        nameInput.classList.add('valid');
        nameInput.classList.remove('invalid');
        nameError.style.display = 'none';
      }
      
      if (parseInt(ageInput.value) < 18) {
        ageInput.classList.add('invalid');
        ageInput.classList.remove('valid');
        ageError.style.display = 'block';
        isValid = false;
      } else {
        ageInput.classList.add('valid');
        ageInput.classList.remove('invalid');
        ageError.style.display = 'none';
      }
      
      if (!phonePattern.test(phoneInput.value)) {
        phoneInput.classList.add('invalid');
        phoneInput.classList.remove('valid');
        phoneError.style.display = 'block';
        isValid = false;
      } else {
        phoneInput.classList.add('valid');
        phoneInput.classList.remove('invalid');
        phoneError.style.display = 'none';
      }
      
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(emailInput.value)) {
        emailInput.classList.add('invalid');
        emailInput.classList.remove('valid');
        emailError.style.display = 'block';
        isValid = false;
      } else {
        emailInput.classList.add('valid');
        emailInput.classList.remove('invalid');
        emailError.style.display = 'none';
      }
      
      return true;

    }
    
    
    function submitForm() {
      const form = document.getElementById('bloodDonationForm');
      const formData = new FormData(form);

      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'donate_req.php', true);
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Show the success message after successful form submission
          const successMessage = "<div class='alert alert-success'>Form submitted successfully!<br>Please visit our nearest collection center with your ID proof.</div>";
          const formContainer = document.querySelector('.form-container');
          formContainer.innerHTML = successMessage;
          setTimeout(function () {
            formContainer.style.display = 'none';
          },500000);
        }
      };
      xhr.send(formData);
    }

    // Event listener for form submission
    const form = document.getElementById('bloodDonationForm');
    form.addEventListener('input', validateForm);
    form.addEventListener('submit', function (event) {
      event.preventDefault();
      if (validateForm()) {
        submitForm();
      }
    });
    window.onload = showDisclaimer;

  
  </script>
   
      <?php }
   else {
       echo '<div class="alert alert-danger"><b> Please Login First To Access Portal.</b></div>';
       ?>
       <form method="post" name="" action="login_register.php" class="form-horizontal">
         <div class="form-group">
           <div class="col-sm-8 col-sm-offset-4" style="float:left">

             <button class="btn btn-primary" name="submit" type="submit">Go to Login Page</button>
           </div>
         </div>
       </form>
   <?php }

    ?>
     
</body>
</html>

