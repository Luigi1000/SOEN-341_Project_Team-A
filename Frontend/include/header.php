<?php session_start(); ?>
<?php include('include/dbConnector2.php'); ?>
<?php                      // session validation
  if (isset($_POST['submit']))
  {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $hashed_pwd = md5($password); // the password must be hashed before insert into DB

  $result = $db->query("SELECT * FROM `user` WHERE `Email` = '$email'");
  $dbResult = $result->fetch(\PDO::FETCH_ASSOC);
  $nameResult = $db->query("SELECT `UserName` FROM `user` WHERE `UserName` = '$username'");
  $dbNameResult = $nameResult->fetch(\PDO::FETCH_ASSOC);

    if(strcasecmp($dbResult['Email'], $email)==0) // if find out the email already exist , refuse to add it into the db
    {
    $check_email_result = true;
    }
    else
  {
        $check_email_result = false;
  }

    if(strcasecmp($dbNameResult['UserName'], $username)==0) // if find out the userName already exist , refuse to add it into the db
    {
        $check_usrname_result = true;
    }
    else
        $check_usrname_result = false;

    if($check_usrname_result == false && $check_email_result == false) // if Both userName and email do not exist in db then good to insert into db
    {
       $db->query("INSERT INTO user (UserId, UserName, Email, Password, Address, CityName, Province, Country) VALUES (NULL, '$username', '$email', '$hashed_pwd', NULL, NULL, NULL, NULL)");

      $_SESSION['username'] = $_POST['username'];  // keep the registration info in session later on use it for the nav bar dynamic changing (switch between My Profile and Register)
      $_SESSION['email'] = $_POST['email'];        // also can be used in user info retrive for the MyProfile page
      // if the user manages to register, he is logged in automatically
      $_SESSION['is_login'] = true;
    }
    else if($check_email_result == true)
    {
      echo ("<script type='text/javascript'>alert('This email address has already been used for registration before, please choose another one!!')</script>");
    }
    else
    {
      echo ("<script type='text/javascript'>alert('This username has already been used for registration before, please choose another one!!')</script>");
    }

  }
  // when the index page is opened for the first time, no users are logged in.
  else
  {
      if(!isset($_SESSION['is_login']))
      {
          $_SESSION['is_login'] = false;
      }

  }

?>
  <div class="jumbotron jumbotron-custom">
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
                <li><a href="listings.php">Listings</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

            <!-- Right align -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                  <?php if($_SESSION['is_login']) {  ?>
                  <p><kbd>Welcome home <?php echo( $_SESSION['username'] ) ?> ! </kbd>  
                    <a href="./userProfile.php" class="btn btn-primary btn-lg"> <span class="glyphicon glyphicon-duplicate"></span>   My Profile</a>
                    <a href="./inbox.php" class="btn btn-info btn-lg"> <span class="glyphicon glyphicon-inbox"></span>   Inbox</a>
                    <a href="./product.php" class="btn btn-warning btn-lg"> <span class="glyphicon glyphicon-pushpin"></span>   Post Ad</a>
                  </p>
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
  <div class="well text-center">
    <form class="form-inline" action="listings.php" method="get">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search for anything..." name="item" size="65">
      </div>
      <div class="form-group" >
         <select class="form-control" name="Ads">
          <option value="All">All Ads</option>
          <option value="Vehicle">Vehicle</option>
          <option value="Pet">Pet</option>
          <option value="Book">Book</option>
          <option value="Phone">Phone</option>
          <option value="Computer">Computer</option>
          <option value="Instrument">Instrument</option>
          <option value="Bike">Bike</option>
          <option value="TV">TV</option>
         </select>
      </div>
      <div class="input-group">
        <!-- select dropdown menu -->
          <select class="selectpicker form-control" name="city" required>
              <option value="" selected disabled>Select location...</option>
            <optgroup label="Alberta">
              <option value="Alberta">All of Alberta</option>
              <option value="Calgary">Calgary</option>
              <option value="Edmonton">Edmonton</option>
            </optgroup>
            <optgroup label="British Columbia">
              <option value="BritishColumbia">All of British Columbia</option>
              <option value="Vancouver">Vancouver</option>
              <option value="Victoria">Victoria</option>
            </optgroup>
            <optgroup label="Ontario">
              <option value="Ontario">All of Ontario</option>
              <option value="Mississauga">Mississauga</option>
              <option value="Toronto">Toronto</option>
            </optgroup>
            <optgroup label="Quebec">
              <option value="Quebec">All of Quebec</option>
              <option value="QuebecCity">Quebec City</option>
              <option value="Laval">Laval</option>
              <option value="Montreal">Montreal</option>
            </optgroup>
          </select>
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit" name="search">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>

  </div>
