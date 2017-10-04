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
  <script src="myScript/myScript.js"></script>
  <!-- link your own css here -->
</head>
<body>
<?php include ('include/header.php');?>
  
  <!-- content here -->
  <div class="container-fluid">
		
		<!-- category nav bar add link with query string-->
	  <ul class="nav nav-tabs">
      <li><a href="listings.php?category=vehicle"><span class="glyphicon glyphicon-hand-right"></span> vehicle</a></li>
      <li><a href="listings.php?category=pet"><span class="glyphicon glyphicon-hand-right"></span> pet</a></li>
      <li><a href="listings.php?category=book"><span class="glyphicon glyphicon-hand-right"></span> book</a></li>
      <li><a href="listings.php?category=phone"><span class="glyphicon glyphicon-hand-right"></span> phone</a></li>
      <li><a href="listings.php?category=computer"><span class="glyphicon glyphicon-hand-right"></span> computer</a></li>
      <li><a href="listings.php?category=instrument"><span class="glyphicon glyphicon-hand-right"></span> instrument</a></li>
      <li><a href="listings.php?category=bike"><span class="glyphicon glyphicon-hand-right"></span> bike</a></li>
      <li><a href="listings.php?category=TV"><span class="glyphicon glyphicon-hand-right"></span> TV</a></li>
    </ul>
   <!--  //menu list end -->
    </br></br></br>
   <!-- Images gallery  -->
	<h1>Popular items</h1>
    <div class="row">
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
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
              <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/b6.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
              <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/b11.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
              <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/b12.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
              <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/b13.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
              <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/b7.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
			</div>
            <div class="item">
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/k1.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/k2.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/k3.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/k4.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/k5.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/k7.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
            </div>

            <div class="item">
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/d1.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/d2.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/d3.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/d4.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/d5.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
              </div>
               <div class=" col-md-2">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img class="img-responsive" width="350" height="350" src="images/d6.jpg" alt="">
                  </div>
                  <div class="panel-footer"> dumbo <div class="price">price：</div></div>
                </div>
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

	<!-- categories with icon -->
  <!-- CHANG ALL LINK , then the link along with category -->
    <!-- first row -->
    <div class="container">
      <div class="row">
        <!-- car icon -->
        <div class="col-sm-3" style="text-align: center;">
          <a href="listings.php?category=vehicle">
            <li class="fa fa-car"></li>
            <p class="item-category">vehicle</p>
          </a>
        </div>
        <!-- pets -->
       <div class="col-sm-3" style="text-align: center;">
        <a href="listings.php?category=pet">
          <li class="fa fa-paw"></li>
          <p class="item-category">pet</p>
        </a>
      </div>
      <!-- book -->
       <div class="col-sm-3" style="text-align: center;">
        <a href="listings.php?category=book">
          <li class="fa fa-book"></li>
          <p class="item-category">book</p>
        </a>
      </div>
      <!-- phone -->
       <div class="col-sm-3" style="text-align: center;">
        <a href="listings.php?category=phone">
          <li class="fa fa-mobile"></li>
          <p class="item-category">phone</p>
        </a>
      </div>

      </div>
    </div><br><br>
    <!--// first row -->

    <!-- second row -->
    <div class="container">

      <div class="row">
        <!-- computer icon -->
        <div class="col-sm-3" style="text-align: center;">
          <a href="listings.php?category=computer">
            <li class="fa fa-desktop"></li>
            <p class="item-category">computer</p>
          </a>
        </div>
        <!-- clothe icon -->
        <div class="col-sm-3" style="text-align: center;">
         <a href="listings.php?category=instrument">
           <li class="fa fa-music"></li>
           <p class="item-category">instrument</p>
         </a>
       </div>
       <!-- bike icon 20171002 yang-->
        <div class="col-sm-3" style="text-align: center;">
         <a href="listings.php?category=bike">
           <li class="fa fa-bicycle"></li>
           <p class="item-category">bike</p>
         </a>
       </div>
      <!-- TV 20171002 YANG -->
       <div class="col-sm-3" style="text-align: center;">
        <a href="listings.php?category=TV">
          <li class="fa fa-television"></li>
          <p class="item-category">TV</p>
        </a>
       </div>

      </div>
    </div><br>
    <!-- second row -->








  </br></br></br></br>

  </div>


<?php include ('include/footer.php');?>

</body>
</html>
