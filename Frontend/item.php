<!-- reference: w3c school online store theme -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Item Name</title>

  <?php include('include/dbConnector2.php'); ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- link your own css here -->
  <link rel="stylesheet" type="text/css" href="StyleSheet/index.css">
  <link rel="stylesheet" type="text/css" href="StyleSheet/listings.css">
  <link rel="stylesheet" type="text/css" href="StyleSheet/item.css">
  <script src="myScript/myScript.js"></script>
</head>
<body>
  <?php include('include/header.php'); ?>
  <div class="container-fluid">
    <div class="row">

      <?php
	  echo "Prev: ".$_SESSION['previous_page']." id: ".$_SESSION['ad'];		
	  if(strcmp($_SESSION['previous_page'],"addItemToDBphp")==0){
	  $id = $_SESSION['ad'];
	  }
	  else{
      $id = $_GET['ad'];
	  }

      $result = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE ProductId='$id'");
      foreach ($result as $eachRow) {

         echo "<div class=\"container\"> <h2> ".$eachRow['ProductName']." <button type=\"button\" class=\"btn btn-default btn-sm\"> <span class=\"glyphicon glyphicon-user\"></span> ".$eachRow['UserName']." </button></h2>   <p class=\"lead\"> $ ".$eachRow['Price']." </p>  <img src=\"data:image/png;base64,".base64_encode($eachRow['Image1'])."\" width=\"300\" height=\"300\"> <p class=\"text-muted\">".$eachRow['ProductDetail']."</p>  <button type=\"button\" class=\"btn btn-success\"> Contact </button> </div>"; 

      }

      ?>

    </div>
  </div>
  <br><br>

  <?php include('include/footer.php') ;?>

</body>
</html>
