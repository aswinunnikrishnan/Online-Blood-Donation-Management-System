<html>
<head>
  <title>Request Blood</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
</style>
</head>
<body>
<?php
include 'connection.php';
  include 'session.php';
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  ?>
<body style="color:black">
<div id="header">
<?php include 'header.php';
?>
</div>
<div id="sidebar">
<?php $active="request_blood"; include 'sidebar.php'; ?>

</div>
    <br><br>
  <center><div class="form-container">
  <?php
    if (session_status() === PHP_SESSION_NONE)
    {
        session_start();
    }
    if (isset($_SESSION['success_message'])) 
    {
        $msg = $_SESSION['success_message'];
        unset($_SESSION['success_message']); // Clear the session variable
        echo "<div class='alert alert-success'>$msg</div>";
    }
  ?>
    <h2>Request Blood</h2><br><br>
    <form id="bloodrequestForm" action="request.php" method="post">
      <div class="form-group">
        <label for="bloodGroup">Blood Group:</label>
        <select  id="bloodGroup" name="bloodGroup" required>
          <option value="" disabled selected>Select Blood Group</option>
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
        <label for="units">Number of Units:</label>
        <input type="number"  name="units" placeholder="Enter the number of units required">
      </div>
      <div class="form-group">
        <label for="prio">Priority:</label>
        <select id="priority" name="priority" required>
          <option value="" disabled selected>Select request priority</option>
          <option value="1">High</option>
          <option value="0">Low</option>
        </select>
      </div><br><br>
      <div class="form-group">
        <input type="submit" value="Submit" name="submit" >
      </div>
    </form>
<center>
   
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
