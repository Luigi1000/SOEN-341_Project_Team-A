<?php include('include/dbConnector.php'); ?>
<?php
if(isset($_POST['c_id'])) {
	$sql = "select * from `category_level3` where `category_level2_id`=".mysqli_real_escape_string($conn, $_POST['c_id']);
	$res = mysqli_query($conn, $sql);
	if(mysqli_num_rows($res) > 0) {
		echo "<option value=''>------- Select --------</option>";
		while($row = mysqli_fetch_object($res)) {
			echo "<option value='".$row->Id."'>".$row->Third_Category."</option>";
		}
	}
} else {
	header('location: ./');
}
?>
