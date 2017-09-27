<!-- reference: w3c school online store theme -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>

  <?php include('include/dbConnector.php'); ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="StyleSheet/index.css">
  <!-- link your own css here -->
</head>
<body>
<?php include ('include/header.php');?>
  
  <!-- content here -->
  <div class="container-fluid">
		
		<!-- toggleable menu keep the category remove detail-->
	  <ul class="nav nav-tabs">
		  <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-hand-right"></span> car</a></li>
		  <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-hand-right"></span> pet</a></li>
		  <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-hand-right"></span> book</a></li>
		  <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-hand-right"></span> phone</a></li>
		  <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-hand-right"></span> computer</a></li>
		  <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-hand-right"></span> cloth</a></li>
		  <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-hand-right"></span> job</a></li>
		  <li><a data-toggle="tab" href="#"><span class="glyphicon glyphicon-hand-right"></span> furniture</a></li>
	  </ul>
   <!--  //menu list end -->
    </br></br></br></br></br></br></br></br>
   <!-- Images gallery  -->

    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div id="my-slider" class="carousel slide" data-ride="carousel">

          <!--  indicator dot nov  -->
          <ol class="carousel-indicators">
            <li data-target="#my-slider" data-slide-to="0" class="active " ></li>
            <li data-target="#my-slider" data-slide-to="1"></li>
            <li data-target="#my-slider" data-slide-to="2"></li>
            <li data-target="#my-slider" data-slide-to="3"></li>
          </ol>

          <!--  wrapper for slides  -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/b5.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
              <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/b6.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
              <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/b11.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
              <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/b12.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
              <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/b13.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
              <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/b7.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
              <div class="carousel-caption">
                <h4>Books</h4>
              </div>
            </div>

            <div class="item">
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/k1.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/k2.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/k3.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/k4.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/k5.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/k7.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
              <div class="carousel-caption">
                <h4>Land</h4>
              </div>
            </div>

            <div class="item">
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/d1.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/d2.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/d3.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/d4.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/d5.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/d6.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo</div>
                </div>
              </div>
              <div class="carousel-caption">
                <h4>House</h4>
              </div>
            </div>
          </div>

          <!--  controls or next and pre buttons  -->
          <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>      
      </div>
    </div>









  </br></br></br></br></br></br></br></br></br></br></br>

  </div>


<?php include ('include/footer.php');?>

</body>
</html>
