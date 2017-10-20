<?php
include 'dbConnector.php';

$productName=mysqli_real_escape_string($conn,$_POST['productName']);
$price=mysqli_real_escape_string($conn,$_POST['price']);


$sql= "select First_Category from `category_level1` where `Id`=".mysqli_real_escape_string($conn, $_POST['productCategory1']);
$res= mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$productCategory1Name=$row['First_Category'];
$sql = "select Second_Category from `category_level2` where `id`=".mysqli_real_escape_string($conn, $_POST['productCategory2']);
$res= mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$productCategory2Name =$row['Second_Category'];
$sql = "select Third_Category from `category_level3` where `Id`=".mysqli_real_escape_string($conn, $_POST['productCategory3']);
$res= mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
$productCategory3Name = $row['Third_Category'];
$productDetail=mysqli_real_escape_string($conn,$_POST['text']);	
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image1"]["tmp_name"]);
    $check1 = getimagesize($_FILES["image2"]["tmp_name"]);
    if($check !== false){
        $image1 = $_FILES['image1']['tmp_name'];
        $imgContent1 = addslashes(file_get_contents($image1));
	}
	 if($check1 !== false){
        $image2 = $_FILES['image2']['tmp_name'];
        $imgContent2 = addslashes(file_get_contents($image2));
	}
}
    
  
$sql="INSERT INTO product(productName,productDetail,productCategory1,productCategory2,productCategory3,price,image1,image2,Email) values('$productName','$productDetail','$productCategory1Name','$productCategory2Name','$productCategory3Name','$price','$imgContent1','$imgContent2','neeluchawla@me.com')";
mysqli_query($conn,$sql);

exit();
?>
