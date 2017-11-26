<!-- reference: w3c school online store theme -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>

  <?php include('include/dbConnector2.php'); ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- A bootstrap validator plugin -->
  <!-- reference: https://github.com/1000hz/bootstrap-validator -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
  
  <!-- link your own css here -->
  <link rel="stylesheet" type="text/css" href="StyleSheet/index.css">
  <link rel="stylesheet" type="text/css" href="StyleSheet/mylogin2.css">
  <script src="myScript/myScript.js"></script>
</head>
<body>
  <?php include('include/header.php'); ?>
     
  <!-- Register section -->
<div class="container center">
  <div class="row">
    <form class="form-horizontal" action="index.php" method="post" data-toggle="validator" id="register">
    <!-- "Register" header -->
    <div class="form-group" id="register">
      <label class="control-label" style="text-align: left;" ><h2><span class="glyphicon glyphicon-user"></span>Register</h2></label>
    </div>

    <div class="form-group">
       <!--    body  (form)-->            
        <form role="form" action="./index.php" method="post" id="register">
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Address: " required>
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input type="password" name="password" id="pwd" class="form-control" placeholder="Password: " required>
            <div class="help-block">At least 8 characters with at least one Capital letter, at least one lower case letter and at least one number and at least one Special character:</div>
          </div>
          <div class="form-group">
            <input type="password" name="repassword" id="repwd" class="form-control" placeholder="Re-type Password: " required">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username: " required>
          </div>
        </form>                  
    </div>
    <!-- Submib button -->
    <div class="form-group">
      <button class="btn btn-success btn-block" name="submit" onclick = "return registerValidation()"  form="register">Register</button>
    </div>
  </form>
  </div>

</div>


<?php include('include/footer.php') ;?>

</body>
</html>
