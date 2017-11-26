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
      <a href="index.php"><img src="images/shop.png" height="100"></a>     
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
                  <p><a href="./register.php"><button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-user"></span>  Register</button></a></p>
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
