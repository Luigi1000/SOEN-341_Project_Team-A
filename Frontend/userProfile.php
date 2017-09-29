<!-- reference: w3c school online store theme -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UserProfile</title>

  <?php include('include/dbConnector.php'); ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- link your own css here -->
  <link rel="stylesheet" type="text/css" href="StyleSheet/index.css">
  <!-- <link rel="stylesheet" type="text/css" href="StyleSheet/login.css"> -->
</head>
<body>
  <?php include('include/header.php'); ?>
  <!-- user profile -->
  <div class="container">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#summary">Account Summary</a></li>
      <li><a data-toggle="tab" href="#ads">My Ads</a></li>
      <li><a data-toggle="tab" href="#edit">Edit Profile</a></li>
    </ul>


  </div>
  <!-- //body end -->
  <br><br>
  <?php include('include/footer.php') ;?>

</body>
</html>
