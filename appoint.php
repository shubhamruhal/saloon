<?php
include 'common.php';
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$service=$_POST['service'];
$sql = "INSERT INTO leads VALUES('$name','$mobile','$service')";
$res = mysqli_query($conn,$sql);
if (!$res){
    echo "failed";
}
else{
    header('location:index.html');
}
?>