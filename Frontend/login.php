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
  
  <!-- link your own css here -->
  <link rel="stylesheet" type="text/css" href="StyleSheet/index.css">
  <link rel="stylesheet" type="text/css" href="StyleSheet/login.css">
</head>
<body>
<?php include('include/header.php'); ?>
  
  <!-- Login section -->
<div class="container center">
  <form class="form-group login" action="#" method="post">
    <!-- Username Section -->
    <div >
      <label class="head" for="username" >Sign in</label>
      <!-- <input type="text" placeholder="Enter username or email" required="Required" size="25px" style="visibility: hidden;"> -->
    </div>
    <div >
      <label for="username" ><span>Username</span></label>
      <input type="text" placeholder="Enter username or email" required="Required" size="25px">
    </div>
    <!-- Password section -->
    <div  class="form-group login">
      <label for="password"><span>Password</span></label>
      <input type="password"  placeholder="Password" required="Required" size="25px">
    </div>
    <div>
      <label class="forgot" >
        <a href="#">forgot your password?</a>
      </label>
      <!-- <input type="text" placeholder="Enter username or email" required="Required" size="25px" style="visibility: hidden;"> -->
    </div>
    <!-- Checkbox "Remember me" -->
    <div align="right" class="checkbox">
      <label>
        <input type="checkbox" value="remember"> Remember me
      </label>
    </div>
    <!-- Submib button -->
    <button class="btn btn-lg btn-success" type="submit">Sign in</button>
  </form>

</div>


<?php include('include/footer.php') ;?>

</body>
</html>
