<?php
$id = $_GET['id'];
$connection=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql = "UPDATE donors_pending SET status='rejected' WHERE id='{$id}'";
$result=mysqli_query($connection,$sql);

mysqli_close($connection);
header("Location: donorpend.php");
?>