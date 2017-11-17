<!-- reference: w3c school online store theme -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Inbox</title>

  <?php include('include/dbConnector.php'); ?>

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
  <?php include('include/header.php');?>
  <div class="container">
    <h1>Inbox</h1>

    <?php
    $email=$_SESSION['email']; 

    $searchQuery1 = $db->query("SELECT UserId FROM user WHERE Email='$email' LIMIT 1");
    $searchQuery1->execute();
    $row1=$searchQuery1->fetch();
    $fromID=$row1['UserId']; //ID of loged-in user

    $resultArray = $db->query("SELECT * FROM inbox INNER JOIN user ON inbox.ToUserID = user.UserId WHERE FromUserID = '$fromID'");
    foreach($resultArray as $eachRow) 
    {
      echo "<div class=\"panel panel-default\"> <div class-\"panel-heading\"> Messages with: ".$eachRow['UserName']."</div> <div class=\"panel-body\"> ".$eachRow['Message']." </div></div>";
    }

    ?>

  </div>
  <br><br>
  <?php include('include/footer.php');?>

</body>
</html>