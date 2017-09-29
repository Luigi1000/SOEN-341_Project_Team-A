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
  <div class="container-fluid">
    <div class="row">
      <!-- side bar -->
      <div class="col-sm-3 sidenav">
        <div class="well text-left" >
          <h4>Pets</h4>
  			  <li><a href="#">assesories</a></li>
  			  <li><a href="#">animal, pet services</a></li>
  			  <li><a href="#">birds for rehoming</a></li>
  			  <li><a href="#">fish for rehoming</a></li>
  			  <li><a href="#">dogs, puppies</a></li>
  			  <li><a href="#">cats, kittens for rehoming</a></li>
        </div>
        <div class="well text-center" >
          <h3>not finish</h3>
          <h3>may be add price search</h3>
        </div>
        <div class="well text-center" >
          <h3>not finish</h3>
          <h3>may be add something</h3>
        </div>
      </div>
      <!-- //side bar end -->

      <div class="col-sm-9 text-left">
        <div class="list-group">
          <!-- first item -->
          <a href="#" class="list-group-item">
            <div class="row">
              <div class="col-sm-3">
                <img src="images/k2.jpg" alt="" width="100%" height="100%">
              </div>
              <div class="col-sm-9">
                <div>
                  <h3 style="font-weight: bold;">ITEM NAME 1</h3>
                </div>
                <div class="pull-right" style="color: #27a34a" >
                  <h4><span class="glyphicon glyphicon-usd"></span>50</h4>
                </div>
                <div class="">
                  location <span class="glyphicon glyphicon-time"></span>
                  post time
                </div><br>
                <div>
                  <p style="color:#1f0935;font-weight:bold;">
                    description here
                  </p>
                </div>
              </div>
            </div>
          </a>
          <!-- //end item  -->
          <!-- next item -->
          <a href="#" class="list-group-item">
            <div class="row">
              <div class="col-sm-3">
                <img src="images/k3.jpg" alt="" width="100%" height="100%">
              </div>
              <div class="col-sm-9">
                <div>
                  <h3 style="font-weight: bold;">ITEM NAME 2</h3>
                </div>
                <div class="pull-right" style="color: #27a34a" >
                  <h4><span class="glyphicon glyphicon-usd"></span>80</h4>
                </div>
                <div class="">
                  location <span class="glyphicon glyphicon-time"></span>
                  post time
                </div><br>
                <div>
                  <p style="color:#1f0935;font-weight:bold;">
                    description here
                  </p>
                </div>
              </div>
            </div>
          </a>
          <!-- //end item  -->
          <!-- next item -->
          <a href="#" class="list-group-item">
            <div class="row">
              <div class="col-sm-3">
                <img src="images/k4.jpg" alt="" width="100%" height="100%">
              </div>
              <div class="col-sm-9">
                <div>
                  <h3 style="font-weight: bold;">ITEM NAME3</h3>
                </div>
                <div class="pull-right" style="color: #27a34a" >
                  <h4><span class="glyphicon glyphicon-usd"></span>20</h4>
                </div>
                <div class="">
                  location <span class="glyphicon glyphicon-time"></span>
                  post time
                </div><br>
                <div>
                  <p style="color:#1f0935;font-weight:bold;">
                    description here
                  </p>
                </div>
              </div>
            </div>
          </a>
          <!-- //end item  -->
          <!-- next item -->
          <a href="#" class="list-group-item">
            <div class="row">
              <div class="col-sm-3">
                <img src="images/k5.jpg" alt="" width="100%" height="100%">
              </div>
              <div class="col-sm-9">
                <div>
                  <h3 style="font-weight: bold;">ITEM NAME4</h3>
                </div>
                <div class="pull-right" style="color: #27a34a" >
                  <h4><span class="glyphicon glyphicon-usd"></span>12</h4>
                </div>
                <div class="">
                  location <span class="glyphicon glyphicon-time"></span>
                  post time
                </div><br>
                <div>
                  <p style="color:#1f0935;font-weight:bold;">
                    description here
                  </p>
                </div>
              </div>
            </div>
          </a>
          <!-- //end item  -->
          <!-- next item -->
          <a href="#" class="list-group-item">
            <div class="row">
              <div class="col-sm-3">
                <img src="images/k6.jpg" alt="" width="100%" height="100%">
              </div>
              <div class="col-sm-9">
                <div>
                  <h3 style="font-weight: bold;">ITEM NAME 5</h3>
                </div>
                <div class="pull-right" style="color: #27a34a" >
                  <h4><span class="glyphicon glyphicon-usd"></span>99</h4>
                </div>
                <div class="">
                  location <span class="glyphicon glyphicon-time"></span>
                  post time
                </div><br>
                <div>
                  <p style="color:#1f0935;font-weight:bold;">
                    description here
                  </p>
                </div>
              </div>
            </div>
          </a>
          <!-- //end item  -->
          <!-- next item -->
          <a href="#" class="list-group-item">
            <div class="row">
              <div class="col-sm-3">
                <img src="images/k7.jpg" alt="" width="100%" height="100%">
              </div>
              <div class="col-sm-9">
                <div>
                  <h3 style="font-weight: bold;">ITEM NAME 6</h3>
                </div>
                <div class="pull-right" style="color: #27a34a" >
                  <h4><span class="glyphicon glyphicon-usd"></span>65</h4>
                </div>
                <div class="">
                  location <span class="glyphicon glyphicon-time"></span>
                  post time
                </div><br>
                <div>
                  <p style="color:#1f0935;font-weight:bold;">
                    description here
                  </p>
                </div>
              </div>
            </div>
          </a>
          <!-- //end item  -->
        </div>
      </div>
    </div>

  </div>
  <br><br>
  <!-- fake pages -->
  <div>
    <ul class="pager">
    <li></li>
      <ul class="pagination pagination-lg">
        <li><a href="#">Previous </a></li>
        <li><a href="#">1 </a></li>
        <li><a href="#">2 </a></li>
        <li><a href="#">3 </a></li>
        <li><a href="#">4 </a></li>
        <li><a href="#">5 </a></li>
        <li><a href="#">6 </a></li>
        <li><a href="#">7 </a></li>
        <li><a href="#">8 </a></li>
        <li><a href="#">9 </a></li>
        <li><a href="#">10 </a></li>
        <li><a href="#">Next</a></li>
      </ul>
    <li></li>
  </ul>
  </div>

  <?php include('include/footer.php') ;?>

</body>
</html>
