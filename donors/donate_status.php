<html>

<head>
  <title>Request Status</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

  <style>
    /* Your custom CSS styles go here */
    #sidebar{
    position:fixed;
    margin-top:-20px;
  }
  #content{
    position:relative;
    margin-left:210px;
  }
  @media (max-width: 767px) {
    #sidebar{
      position:fixed;
      margin-left:auto;
      margin-right:auto;
      z-index:1037;
    }
    #content {
      position:relative;
      margin-left:auto;
      margin-right:auto;
      margin-top: 10%;
    }
  }

    #he {
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
      padding: 3px 7px;
      color: #fff;
      text-decoration: none;
      border-radius: 3px;
      align: center;
    }

    /* Add responsive class to the table */
    .table-responsive {
      display: block;
      width: 100%;
      overflow-x: auto;
    }
  </style>
</head>
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
<?php $active="donate_status"; include 'sidebar.php'; ?>

</div>
<div id="content" >
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 lg-12 sm-12">

          <h1 class="page-title">Status</h1>

        </div>

      </div>
      <hr>
      <?php
        include 'connection.php';

        $username=$_SESSION['username'];
        $sql1="select * from users where username='$username'";
        $result1=mysqli_query($connection,$sql1) or die("query failed.");
        $row1=mysqli_fetch_assoc($result1);
        $name = $row1['name'];
        $count=1;
        $sql= "select * from donors_pending where name='$name'";
        $result=mysqli_query($connection,$sql);
        if(mysqli_num_rows($result)>0)   {
       ?>

       <div class="table-responsive">
      <table class="table table-bordered" style="text-align:center">
          <thead style="text-align:center">
          <th style="text-align:center;width:10px;">S.NO</th>
          <th style="text-align:center;width:5px;">DATE</th>
          <th style="text-align:center;width:5px;">STATUS</th>
          <th style="text-align:center;width:5px;">DOWNLOAD E-CERTIFICATE</th>
          </thead>
          <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
              <td><?php echo $count++; ?></td>
              <td><?php echo $row['date_time']; ?></td>
              <?php if ($row['status'] == 'pending') { ?>
              <td id="he" style="width:5px">
              <button type="button" class="btn btn-primary btn-sm btn-secondary" disabled>PENDING</button>
              </td>
              <?php } elseif ($row['status'] == 'approved') { ?>
              <td id="btn-text">
                <button type="button" class="btn btn-primary btn-sm btn-success" disabled>APPROVED</button>
              </td>
              <td id="he" style="width:5px">
                <button type="button" class="btn btn-primary btn-sm btn-success" onclick="window.location.href = 'download_certificate.php?name=<?php echo urlencode($row['name']); ?>&id=<?php echo $row['id']; ?>';">DOWNLOAD</button>
              </td>
              <?php } elseif ($row['status'] == 'rejected') { ?>
              <td id="btn-text">
              <button type="button" class="btn btn-primary btn-sm btn-danger" disabled>REJECTED</button>
              </td>
              <?php } ?>
                       
            </tr>
            <?php } ?>
          </tbody>
      </table>
    </div>
    <?php } ?>






  </div>
  </div>
</div>
</div>
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
