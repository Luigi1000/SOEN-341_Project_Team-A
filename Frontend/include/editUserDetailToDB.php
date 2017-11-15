<?php
include 'dbConnector.php';

$userName=mysqli_real_escape_string($conn,$_POST['userName']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);

if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
	}
}
$sql="UPDATE user SET UserName='$userName',Address='$address',PhoneNumber='$phone',image='$imgContent' WHERE Email='neeluchawla@me.com'"; 

mysqli_query($conn,$sql);
exit();
?>
