<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>

<style>
  /* Sidebar */
  .sidebar {
    width: 200px; /* Adjust the width as desired */
    height: 100vh;
    background-color: rgb(0, 0, 0);
    color: #fff;
    padding: 5px;
  }
  
  .sidebar ul.nav {
    padding: 20px;
    list-style-type: none;
  }
  
  .sidebar ul.nav li {
    margin-bottom: 10px;
  }
  
  .sidebar ul.nav li a {
    color: #fff;
    text-decoration: none;
  }
  
  .sidebar ul.nav li a:hover,
  .sidebar ul.nav li a.active {
    color: red;
  }


  .navbar-toggle {
    background-color: #000;
    position: fixed;
    top: 65px;
    left: 0px;
    z-index: 1032;
  }
  .navbar-toggle:hover{
    background-color: rgb(255, 255, 255) !important; /* Change this to the desired hover color */
  }
  .navbar-toggle:hover .icon-bar{
    background-color : red !important;
  }
  .close-button:hover{
    color: red;
  }
  

  /* Close Button */
  .close-button {
    display: none;
    position: absolute;
    top: 10px;
    right: 10px;
    color: #fff;
    cursor: pointer;
  }
  
  /* Custom CSS for Small Screens (Mobile) */
  @media (max-width: 767px) {
    .navbar-collapse {
      overflow-x: hidden; 
    }

    .sidebar {
      position: fixed;
      top: 0;
      left: -200px; /* Hide the sidebar initially */
      transition: left 0.3s ease;
      z-index: 1037 ;
    }
    
    .sidebar.show {
      left: 0; /* Show the sidebar when .show class is applied */
      top: 55px; 
      position: fixed; 
    }

    /* Show the close button when the sidebar is shown */
    .sidebar.show .close-button {
      display: block;
    }

    /* Hide the hamburger menu when the sidebar is shown */
    .navbar-toggle.delete {
      display: none;
    }
  }
  .navbar{
    padding-top:0px;
  }
</style>
</head>
<body>
  <!-- Bootstrap Navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebarNav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="sidebarNav">
      <div class="sidebar">
        <ul class="nav">
          <li><a href="dashboard.php" <?php if($active=='dashboard') echo "class='active'" ;?>>Dashboard</a></li>
          <li><a href="donorpend.php" <?php if($active=='donorpend') echo "class='active'" ;?>>Pending Donor List</a></li>
          <li><a href="donor_list.php" <?php if($active=='donor_list') echo "class='active'" ;?>>Approved Donor List</a></li>
          <li><a href="query.php" <?php if($active=='contact') echo "class='active'" ;?>>Queries</a></li>
          <li><a href="request.php"<?php if($active=='request') echo "class='active'" ;?>>Blood Requests</a></li>
          <li><a href="blood_status.php"<?php if($active=='blood_status') echo "class='active'" ;?>>Blood Bank Status</a></li>
          <li><a href="hospital_query.php"<?php if($active=='hospital_query') echo "class='active'" ;?>>Hospital Queries</a></li>
          <li><a href="live_update.php"<?php if($active=='live') echo "class='active'" ;?>>Update News</a></li>
        </ul>
        <!-- Close button to hide the sidebar -->
        <div class="close-button" onclick="$('.sidebar').removeClass('show'); $('.navbar-toggle').removeClass('delete');">&#10006;</div>
      </div>
    </div>
  </nav>

  <!-- Script to toggle sidebar on hamburger menu button click -->
  <script>
    $(document).ready(function() {
      // Toggle the sidebar when hamburger menu is clicked
      $('.navbar-toggle').click(function() {
        $('.sidebar').toggleClass('show');
        $('.navbar-toggle').toggleClass('delete');
      });
    });
 </script>
 </body>
 </html>
