<html>
<head>
  <title>News Update</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<style>
#sidebar{
  position:fixed;
  margin-top:-20px;
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
    @media (max-width: 767px) {
    #sidebar{
      position:fixed;
      margin-left:auto;
      margin-right:auto;
      z-index:1037;
    }
    .form-container {
      position:relative;
      margin-left:auto;
      margin-right:auto;
      padding: auto;
      width: auto;
    }
    .form-container textarea {
      max-width: 100%;
    }
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
<?php $active="live"; include 'sidebar.php'; ?>

</div>
    <br><br>
    <?php

    // Check if the database connection was successful
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch the current content from the database
    $sql = "SELECT content FROM news_updates WHERE id = 1"; 
    $result = mysqli_query($connection, $sql);

    // Check if the query was successful
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $currentcontent = $row["content"];
    } else {
        $currentcontent = "No latest news are currently available!";
    }

    // Close the database connection
    mysqli_close($connection);
    ?>
  <center><div class="form-container">
     <?php
    if (session_status() === PHP_SESSION_NONE)
    {
        session_start();
    }
    if (isset($_SESSION['message'])) 
    {
        $msg = $_SESSION['message'];
        unset($_SESSION['message']); // Clear the session variable
        echo "<div class='alert alert-success'>$msg</div>";
    }
    ?>
    <h2>Update Live News</h2><br><br>
    <form id="liveupdate" action="update_news.php" method="post">
      <div class="form-group">
        <label for="content">News Content:</label><br> 
        <textarea name="content" rows="4" cols="70"><?php echo htmlspecialchars($currentcontent); ?></textarea>
      </div>
      <br><br>
      <div class="form-group">
        <input type="submit" value="Update" name="Update" >
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
