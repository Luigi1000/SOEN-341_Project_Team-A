
<!-- reference: w3c school online store theme -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Profile</title>

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
      <li class="active"><a data-toggle="tab" href="#summary">Account Details</a></li>
      <li><a data-toggle="tab" href="#ads">My Ads</a></li>
      <li><a data-toggle="tab" href="#edit">Edit Profile</a></li>
    </ul>

    <div class="tab-content">
      <!-- view user information -->
      <!-- NEED RETRIEVE INFO FROM DATA BASE, NEED HELP FROM BACK END -->
      <div id="summary" class="tab-pane fade in active">
        <h1>Account Details</h1>
        <table class="table">
          <tbody>
		   
            <tr>
              <td><strong>User Name: </strong></td>
              <td><?php echo ($_SESSION["username"]) ?></td>
            </tr>
            <tr>
              <td><strong>Email: </strong></td>
              <td><?php echo($_SESSION["email"]) ?></td>
            </tr>
            <tr>
              <td><strong>Phone Number: </strong></td>
              <td><?php if (isset($_SESSION["phone"])) echo($_SESSION["phone"]) ?></td>
            </tr>
            <tr>
              <td><strong>Address: </strong></td>
              <td><?php if (isset($_SESSION["address"])) echo($_SESSION["address"]) ?></td>
            </tr>
			<tr>
              <td><strong>Profile Pics: </strong></td>
              <td>
          			  <?php
          			  $resultArray = $db->query("SELECT * FROM user WHERE Email = '{$_SESSION["email"]}'");
          			  foreach($resultArray as $eachRow)
                  {
                    echo "<img src=\"data:image/png;base64,".base64_encode($eachRow['image'])."\" alt=\"\" width=\"200\" height=\"200\">";
                  }
          			
          			  ?>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- view all lists(Ads) the user has posted -->
      <!-- NEED RETRIEVE INFO FROM DATA BASE, NEED HELF FROM BACK END -->
     <div id="ads" class="tab-pane fade">
        <h1>Your listed items:</h1>
        <p></p>
       <!-- <table class="table table-bordered">
          <tbody>
            <tr>
              <td>image here</td>
              <td>description here</td>
            </tr>
            <tr>
              <td class="col-sm-3"><img src="images/k3.jpg" width="100%" height="150"></td>
              <td>
                <ul>
                  <li>description here</li>
                  <li>here just a example</li>
                  <li>a toy elephent</li>
                </ul>
              </td>
            </tr>
          </tbody>
        </table> -->

	<?php
	$tmpname = $_SESSION['username'];
 	$resultArray = $db->query("SELECT * FROM product INNER JOIN user ON product.UserId = user.UserId WHERE UserName = '$tmpname' ORDER BY ProductId ASC");
      
          foreach($resultArray as $eachRow)
          {
            echo "<a href=\"item.php?ad=".$eachRow['ProductId']." class=\"list-group-item\">
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <img src=\"data:image/png;base64,".base64_encode($eachRow['Image1'])."\" alt=\"\" width=\"200\" height=\"200\">
                    </div>
                    <div class=\"col-sm-9\">
                      <div>
                        <h3 style=\"font-weight: bold;\">".$eachRow['ProductName']."</h3>
                      </div>
                      <div class=\"pull-right\" style=\"color: #27a34a\" >
                        <h4><span class=\"glyphicon glyphicon-usd\">".$eachRow['Price']."</span></h4>
                      </div>
                      <div class=\"\">
                        ".$eachRow['CityName']." <span class=\"glyphicon glyphicon-time\"></span>"
                        .$eachRow['timeStamp']."
                      </div><br>
                      <div>
                        <p style=\"color:#1f0935;font-weight:bold;\">
                          ".$eachRow['ProductDetail']."
                        </p>
                      </div>
                    </div>
                  </div>
                </a>";  
          }
      ?>
      </div>
      <!-- user can edit profile here -->
      <div id="edit" class="tab-pane fade">
        <div class="container">
          <form action="include/editUserDetailToDB.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="userName">User Name:</label>
              <input type="text" class="form-control" placeholder="will be the user name now" name="userName">
            </div>
            <div class="form-group">
              <label for="adress">Address:</label>
              <input type="text" class="form-control" placeholder="address" name="address">
            </div>
            <!-- not add validation yet -->
            <div class="form-group">
              <label for="phone">Phone Number:</label>
              <input type="text" class="form-control" placeholder="phone number" name="phone">
            </div>
            <!-- <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div> -->
			 <div class="form-group">
          <label for="profilePics">Profile Pics:
          </label>
          <input type="file" name="image" id="fileToUpload1">
        </div>
	
            <button type="submit" class="btn btn-success" name="submit">Save Changes</button>
          </form>
        </div>
      </div>
      <!-- //edit file end -->
    </div>
    <!-- //tab content end -->
  </div>
  <!-- //body end -->
  <br><br>
  <?php include('include/footer.php') ;?>

</body>
</html>
