<?php
include 'dbConnector.php';
$target="images/".basename($_FILES['image1']['name']);
$productName=mysqli_real_escape_string($conn,$_POST['productName']);
$price=mysqli_real_escape_string($conn,$_POST['price']);
$productCategory=mysqli_real_escape_string($conn,$_POST['productCategory']);
$image1=mysqli_real_escape_string($conn,$_FILES['image1']['name']);
$productDetail=mysqli_real_escape_string($conn,$_POST['text']);	  
$sql="INSERT INTO product(productName,productDetail,productCategory,price,image1) values('$productName','$productDetail','$productCategory','$price','$image1')";
mysqli_query($conn,$sql);
if(move_uploaded_file($_FILES['image1']['tmp_name'],$target)){
$msg="done";
}else
{
$msg="failed";
}
exit();
?>
