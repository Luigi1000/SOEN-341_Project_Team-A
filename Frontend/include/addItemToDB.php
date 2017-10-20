<?php
include 'dbConnector.php';

$productName=mysqli_real_escape_string($conn,$_POST['productName']);
$price=mysqli_real_escape_string($conn,$_POST['price']);
$productCategory=mysqli_real_escape_string($conn,$_POST['productCategory']);
$image1=mysqli_real_escape_string($conn,$_FILES['image1']['name']);
$image2=mysqli_real_escape_string($conn,$_FILES['image2']['name']);
$productDetail=mysqli_real_escape_string($conn,$_POST['text']);	  
$sql="INSERT INTO product(productName,productDetail,productCategory,price,image1,image2) values('$productName','$productDetail','$productCategory','$price','$image1','$image2')";
mysqli_query($conn,$sql);

header("Location:../item.php") // redirect form to item listing

exit();
?>
