<?php
include 'dbConnector.php';

session_start();

$userName=mysqli_real_escape_string($conn,$_POST['userName']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);

if($userName == "")
{
    $userName = $_SESSION["username"];
}
else
{
    $_SESSION["username"] = $userName;
}

if($address == "")
{
    $address = $_SESSION["address"];
}
else
{
    $_SESSION["address"] = $address;
}

if($phone == "")
{
    $phone = $_SESSION["phone"];
}
else
{
    $_SESSION["phone"] = $phone;
}

$tmpemail = $_SESSION["email"];

if($_FILES["image"]["tmp_name"] != "")
{
	if(isset($_POST["submit"])){
    	$check = getimagesize($_FILES["image"]["tmp_name"]);
    	if($check !== false){
        	$image = $_FILES['image']['tmp_name'];
        	$imgContent = addslashes(file_get_contents($image));
		}
	}
	$sql="UPDATE user SET UserName='$userName',Address='$address',PhoneNumber='$phone',image='$imgContent' WHERE Email='$tmpemail'"; 
}
else
{
	$sql="UPDATE user SET UserName='$userName',Address='$address',PhoneNumber='$phone' WHERE Email='$tmpemail'"; 
}


mysqli_query($conn,$sql);

header("Location:../userProfile.php");

exit();
?>
