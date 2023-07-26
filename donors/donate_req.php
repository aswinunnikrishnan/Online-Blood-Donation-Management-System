<?php
$name = $_POST["hiddenname"];
$email = $_POST["hiddenemail"];
$phone = $_POST["hiddenphone"];
$age = $_POST['age'];
$gender = $_POST['hiddengender'];
$bloodgroup = $_POST['hiddenblood'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];

$connection=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql = "INSERT INTO donors_pending(name,mobile,mail_id,age,gender,blood_group,address,city,state) values('{$name}','{$phone}','{$email}','{$age}','{$gender}','{$bloodgroup}','{$address}','{$city}','{$state}')";
$result=mysqli_query($connection,$sql) or die("query unsuccessful.");


mysqli_close($connection);
?>