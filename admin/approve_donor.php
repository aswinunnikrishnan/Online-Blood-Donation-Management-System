<?php
$id = $_GET['id'];
$connection=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql = "SELECT * FROM donors_pending WHERE id={$id}";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $phone = $row['mobile'];
        $email = $row['mail_id'];
        $age = $row['age'];
        $gender = $row['gender'];
        $bloodgroup = $row['blood_group'];
        $address = $row['address'];
        $city = $row['city'];
        $state = $row['state'];
    }    
}

$sql1 = "INSERT INTO donor_details(name,mobile,mail_id,age,gender,blood_group,address,city,state) values('{$name}','{$phone}','{$email}','{$age}','{$gender}','{$bloodgroup}','{$address}','{$city}','{$state}')";
$result1=mysqli_query($connection,$sql1) or die("query unsuccessful.");
$sql2 = "UPDATE blood_units SET units = units + 1 WHERE blood_group = '{$bloodgroup}'";
$result2=mysqli_query($connection,$sql2) or die("query unsuccessful.");
$sql3 = "UPDATE donors_pending SET status='approved' WHERE id='{$id}'";
$result3=mysqli_query($connection,$sql3) or die("query unsuccessful.");
if($result3)
{
  $url = "generate_certificate.php?name=" . urlencode($name). "&id=" .$id;
  header("Location:".$url);
}
else
{
    header("Location: donorpend.php");
}
mysqli_close($connection);

?>