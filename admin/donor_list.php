<html>

<head>
  <title>Donor List</title>
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
<?php $active="donor_list"; include 'sidebar.php'; ?>

</div>
<div id="content" >
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 lg-12 sm-12">

          <h1 class="page-title">Approved Donor List</h1>

        </div>

      </div>
      <hr>
      <?php
        include 'connection.php';

        
        $count=1;
        $sql= "select * from donor_details ";
        $result=mysqli_query($connection,$sql);
        if(mysqli_num_rows($result)>0)   {
       ?>

       <div class="table-responsive">
      <table class="table table-bordered" style="text-align:center">
          <thead style="text-align:center">
          <th style="text-align:center">S.NO</th>
          <th style="text-align:center">NAME</th>
          <th style="text-align:center">PHONE</th>
          <th style="text-align:center">EMAIL</th>
          <th style="text-align:center">AGE</th>
          <th style="text-align:center">GENDER</th>
          <th style="text-align:center">BLOOD GROUP</th>
          <th style="text-align:center">ADDRESS</th>
          <th style="text-align:center">ACTION</th>
          </thead>
          <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
                  <td><?php echo $count++; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['mobile']; ?></td>
                  <td><?php echo $row['mail_id']; ?></td>
                  <td><?php echo $row['age']; ?></td>
                  <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['blood_group']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td id="he" style="width:100px">
                    <button type="button" class="btn btn-primary btn-sm btn-danger" onclick="window.location.href = 'delete.php?id=<?php echo $row['id']; ?>';" >DELETE</button>
                    </td>
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
       echo '<div class="alert alert-danger"><b> Please Login First To Access Admin Portal.</b></div>';
       ?>
       <form method="post" name="" action="login.php" class="form-horizontal">
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
