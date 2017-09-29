<!-- reference: w3c school online store theme -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>

  <?php include('include/dbConnector.php'); ?>

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
  <link rel="stylesheet" type="text/css" href="StyleSheet/mylogin.css">
</head>
<body>
<?php include('include/header.php'); ?>
  
  <!-- Login section -->
<div class="container center">
  <div class="row">
    <form class="form-horizontal" action="login.php" method="post" data-toggle="validator" role="form">
    <!-- "Sign in" header -->
    <div class="form-group" id="signin">
      <label class="control-label" >Sign in</label>
    </div>

    <div class="form-group">
      <label for="username" class="col-sm-4 control-label" style="text-align: left;">Username or Email</label>
      <div class="col-sm-8">
        <input type="text" class="form-control col-sm-1" id="username" data-error="* Required field"required>
        <div class="help-block with-errors" style="margin-bottom: 0px;"></div>
      </div>
    </div>

    <div class="form-group">
      <label for="password" class="col-sm-4 control-label"  style="text-align: left;">Password</label>
      <div class="col-sm-8">
        <input type="password" class="form-control" id="password" data-minlength="8" data-error="* Minimum of 8 characters" required="Required">
        <div class="help-block with-errors" style="margin-bottom: 0px;"></div>
      </div>
    </div>
    
    <div id="forget">
      <label class="col-sm-3 control-label"></label>
      <label class="col-sm-5 control-label">
        <a href="#">forgot your password?</a>
      </label>
      <!-- <label class="col-sm-1 control-label"></label> -->
      <!-- Checkbox "Remember me" -->
      <label class="col-sm-4 control-label">
        <input type="checkbox" value="remember"> Remember me
      </label>
    </div>
    <!-- Submib button -->
    <div class="form-group">
      <button class="btn btn-primary btn-lg btn-success" type="submit" style="margin-left: 10px;">Sign in</button>
    </div>
  </form>
  </div>

</div>


<?php include('include/footer.php') ;?>

</body>
</html>
