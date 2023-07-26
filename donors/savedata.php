<?php
$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$bloodgroup = $_POST['bloodGroup'];
$password = $_POST["password"];
$hashed_password = hash('sha256',$password);
$connection=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "INSERT INTO users(name,phone,mail_id,username,gender,blood_group,password) values('{$name}','{$phone}','{$email}','{$username}','{$gender}','{$bloodgroup}','{$hashed_password}')";
$result=mysqli_query($connection,$sql) or die("query unsuccessful.");
if ($result) {
    $response = [
      'success' => true,
      'message' => 'Registration is successful. Please proceed to login.'
    ];
  } else {
    $response = [
      'success' => false,
      'message' => 'An error occurred during registration.'
    ];
  }
  
  echo json_encode($response);

mysqli_close($connection);
 ?>
