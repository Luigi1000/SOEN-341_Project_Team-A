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
                  <p><kbd>Welcome home <?php echo( $_SESSION['username'] ) ?> ! </kbd>   <a href="./userProfile.php" class="btn btn-primary btn-lg"> <span class="glyphicon glyphicon-duplicate"></span>   My Profile</a><a href="./product.php" class="btn btn-warning btn-lg"> <span class="glyphicon glyphicon-pushpin"></span>   Post Ads</a></p>
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
  <div class="well text-center">
    <form class="form-inline" action="listings.php" method="post">
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
            <!-- <optgroup label="Alberta">
              <option value="Banff/Canmore">Banff/Canmore</option>
              <option value="Edmonton Area">Edmonton Area</option>
              <option value="Fort McMurray">Fort McMurray</option>
            </optgroup>
            <optgroup label="British Columbia">
              <option value="Cariboo Area">Cariboo Area</option>
              <option value="Comox Valley Area">Comox Valley Area</option>
              <option value="Cowicha Valley">Cowicha Valley</option>
            </optgroup>
            <optgroup label="Ontario">
              <option value="Muskoka">Muskoka</option>
              <option value="North Bay">North Bay</option>
              <option value="Toronto">Toronto</option>
            </optgroup> -->
            <optgroup label="Quebec">
              <!-- <option value="Abitibi-Temiscamingue">Abitibi-Temiscamingue</option>
              <option value="Granby">Granby</option> -->
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
