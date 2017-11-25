<?php
    session_start(); 
?>  
<?php include('include/dbConnector2.php'); ?>
<?php                      // session validation      
  if (isset($_POST['login']))
  {
	$username = @$_POST['username'];
	$log = $db->query("SELECT * FROM `user` WHERE `Email` = '$username'");
	$login = $log->fetch(\PDO::FETCH_ASSOC);
	$password = md5(@$_POST['inputPwd']);
    //  check if the email and password are correct
    if ($_POST['username'] == $login['Email'] && $password == $login['Password'])
	{
		$_SESSION['is_login'] = true;
        $_SESSION['wrong'] = false;
        $_SESSION['username'] = $login['UserName'];  // keep the registration info in session later on use it for the nav bar dynamic changing (switch between My Profile and Register)
        $_SESSION['email'] = $_POST['username'];
		$_SESSION['address'] = $login['Address'];
		$_SESSION['phone'] = $login['PhoneNumber'];
        header('Location: index.php');
	}
	else 
    {
        $_SESSION['is_login'] = false;
        $_SESSION['wrong'] = true;
    }
  }
  else
  {
      $_SESSION['is_login'] = false;
      $_SESSION['wrong'] = false;
      
  }
?>

  <div class="jumbotron-custom">
    <div class="container text-center">
      <h1>Online Store</h1>
      <a href="index.php"><img src="images/shop.png"></a>     
      <p>Coming soon...</p>
    </div>
  </div>
<!--  Navigation bar -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Logo -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a href="index.php" class="navbar-brand">.SHOP</a>
        </div>

        <!-- Menu Items-->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

            <!-- Right align -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                  <?php if($_SESSION['is_login']) {  ?>
                  <p><kbd>Welcome home <?php echo( $_SESSION['username'] ) ?> ! </kbd>   <a href="./userProfile.php" class="btn btn-primary btn-lg"> <span class="glyphicon glyphicon-duplicate"></span>   My Profile</a></p>
                  <?php  }  ?>
                  <?php if(!$_SESSION['is_login']) { ?>
                  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#popUpWindow"><span class="glyphicon glyphicon-user"></span>   Register</button>
                    <div class="modal fade" id="popUpWindow">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <!--    header-->
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 class="modal-title">Register</h2>
                          </div>
                          <!--    body  (form)-->
                          <div class="modal-body">
                            <form role="form" action="./index.php" method="post" id="register">
                              <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Address: " required>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Password</label>
                                <input type="password" name="password" id="pwd" class="form-control" placeholder="Password: " required>
                                <div class="help-block">Minimum of 8 characters</div>
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
                          <!--    button  (submit)-->
                          <div class="modal-footer">
                            <button class="btn btn-success btn-block" name="submit" onclick = "return registerValidation()"  form="register">Register</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                </li>
               
                <!-- when the user is logged in, Login button should be invisible -->
                <?php if(!$_SESSION['is_login']) {  ?>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php  }  ?>

                <!-- Logout button should stay invisible until a user is logged in -->
                <?php if($_SESSION['is_login']) {  ?>
                    <li><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                <?php  }  ?>
            </ul>
        </div>
    </div>
  </nav>


  <!-- search bar -->
   <!-- the search bar function has been move out of the login page !! -->
