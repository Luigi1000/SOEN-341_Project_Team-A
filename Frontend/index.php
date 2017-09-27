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
		
		<!-- toggleable menu -->
	  <ul class="nav nav-tabs">
	  <li><a data-toggle="tab" href="#buyandsell">buy and sell</a></li>
	  <li><a data-toggle="tab" href="#cars">cars & vehicles</a></li>
	  <li><a data-toggle="tab" href="#pets">Pets</a></li>
	  <li><a data-toggle="tab" href="#jobs">jobs</a></li>
	  <li><a data-toggle="tab" href="#services">services</a></li>
	  </ul>

	  <div class="tab-content">
	   
		<div id="blank" class="tab-pane fade in active">
		</div>
		<!-- choice for buy and sell -->
		<div id="buyandsell" class="tab-pane fade">
		  <div class="col-md-4">
			<ul>
			  <li><a href="#">All categories</a></li>
			  <li><a href="#">art collectibles</a></li>
			  <li><a href="#">audio</a></li>
			  <li><a href="#">baby items</a></li>
			  <li><a href="#">bikes</a></li>
			  <li><a href="#">books</a></li>
			  <li><a href="#">business, industrial</a></li>
			</ul>
		  </div>
		  <div class="col-md-4">
			<ul>
			  <li><a href="#">clothing</a></li>
			  <li><a href="#">computers</a></li>
			  <li><a href="#">furniture</a></li>
			  <li><a href="#">tickets</a></li>
			  <li><a href="#">home-indoor</a></li>
			  <li><a href="#">home-outdoor</a></li>
			</ul>
		  </div>     
		</div>
		<!-- choice for cars -->
		<div id="cars" class="tab-pane fade">
		   <div class="col-md-4">
			<ul>
			  <li><a href="#">All categories</a></li>
			  <li><a href="#">auto parts,tires</a></li>
			  <li><a href="#">cars & trucks</a></li>
			  <li><a href="#">motorcycles</a></li>
			  <li><a href="#">boats, watercraft</a></li>
			  <li><a href="#">heavy quipment</a></li>
			  <li><a href="#">classic cars</a></li>
			</ul>
		  </div>
		</div>
		<!-- choice for pets -->
		<div id="pets" class="tab-pane fade">
		  <div class="col-md-4">
			<ul>
			  <li><a href="#">All categories</a></li>
			  <li><a href="#">assesories</a></li>
			  <li><a href="#">animal, pet services</a></li>
			  <li><a href="#">birds for rehoming</a></li>
			  <li><a href="#">fish for rehoming</a></li>
			  <li><a href="#">dogs, puppies</a></li>
			  <li><a href="#">cats, kittens for rehoming</a></li>
			</ul>
		  </div>
		  <div class="col-md-4">
			<ul>
			  <li><a href="#">small animals for rehoming</a></li>
			  <li><a href="#">livestock</a></li>
			  <li><a href="#">horse, ponies for rehoming</a></li>
			</ul>
		  </div>
		</div>
		<!-- choice for jobs -->
		<div id="jobs" class="tab-pane fade">
		  <div class="col-md-4">
			<ul>
			  <li><a href="#">All categories</a></li>
			  <li><a href="#">bar, food, hospitality</a></li>
			  <li><a href="#">general labour</a></li>
			  <li><a href="#">driver, security</a></li>
			  <li><a href="#">construction</a></li>
			  <li><a href="#">sales, retail sales</a></li>
			  <li><a href="#">child care</a></li>
			</ul>
		  </div>
		  <div class="col-md-4">
			<ul>
			  <li><a href="#">health care</a></li>
			  <li><a href="#">programmers, computer</a></li>
			  <li><a href="#">part time, students</a></li>
			  <li><a href="#">cleaning</a></li>
			  <li><a href="#">hair stylist</a></li>
			</ul>
		  </div>
		</div>
		<!-- choice for service -->
		<div id="services" class="tab-pane fade">
		  <div class="col-md-4">
			<ul>
			  <li><a href="#">All categories</a></li>
			  <li><a href="#">skilled trades</a></li>
			  <li><a href="#">health, beauty</a></li>
			  <li><a href="#">tutors, languages </a></li>
			  <li><a href="#">wedding</a></li>
			</ul>
		  </div>
		</div>
	  </div>
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
