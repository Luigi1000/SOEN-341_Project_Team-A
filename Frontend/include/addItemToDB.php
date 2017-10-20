<?php
session_start();
include 'dbConnector.php';

$productName=mysqli_real_escape_string($conn,$_POST['productName']);
$price=mysqli_real_escape_string($conn,$_POST['price']);
$productCategory=mysqli_real_escape_string($conn,$_POST['productCategory']);
$image1=mysqli_real_escape_string($conn,$_FILES['image1']['name']);
$image2=mysqli_real_escape_string($conn,$_FILES['image2']['name']);
$productDetail=mysqli_real_escape_string($conn,$_POST['text']);	  

$email=$_SESSION['email'];

$searchQuery="SELECT UserId FROM user WHERE Email = '$email'"; 
$userNum = mysqli_query($conn,$searchQuery);
$userID = $userNum->fetch_assoc();

$sql="INSERT INTO product(productName,productDetail,price,image1,image2,UserID,productCategory,productCategory2,productCategory3)values('$productName','$productDetail','$price','$image1','$image2','$userID[UserId]','$productCategory','Null','Null')";
mysqli_query($conn,$sql);

$queryLast="SELECT * FROM product WHERE UserId = $userID[UserId] ORDER BY ProductId DESC LIMIT 1";
$productNum = mysqli_query($conn,$queryLast);
$productIDnum = $productNum->fetch_assoc();

$_SESSION['ad'] = $productIDnum['ProductId'];
$_SESSION['previous_page'] = addItemToDB.php;

//echo "UserID: ".$userID['UserId']." ProductIdnumber: ".$productIDnum['ProductId'];

header("Location:../item.php"); // redirect form to item's page

exit();
?>
