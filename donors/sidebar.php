<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/css/bootstrap.min.css">
  <style>
    /* Sidebar */
    .sidebar {
      width: 200px; /* Adjust the width as desired */
      height: 100vh;
      background-color: rgb(0, 0, 0);
      color: #fff;
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
   
  </style>
</head>
<body>
  <div class="sidebar">
    <ul class="nav">
      <li><a href="dashboard.php" <?php if($active=='dashboard') echo "class='active'" ;?>>Dashboard</a></li>
      <li><a href="donate_regform.php" <?php if($active=='donate_blood') echo "class='active'" ;?>>Donate Blood</a></li>
      <li><a href="donate_status.php" <?php if($active=='donate_status') echo "class='active'" ;?>>Donate Status</a></li>
      <li><a href="donate_history.php" <?php if($active=='donate_history') echo "class='active'" ;?>>Donate History</a></li>
    </ul>
  </div>
  

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
